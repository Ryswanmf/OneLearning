<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\StudyPackage;
use App\Models\UtbkTryout;
use App\Models\SdTryout;
use App\Models\SmpTryout;
use App\Models\SmaTryout;
use App\Models\SmaUtbkTryout;
use App\Models\AlumniTryout;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [
            ['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'daily'],
            ['loc' => route('how-to-register'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => route('faq'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => route('paket.index'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => route('blog'), 'priority' => '0.9', 'changefreq' => 'daily'],
        ];

        // Add Blog Posts
        Blog::where('status', 'published')->each(function ($blog) use (&$urls) {
            $urls[] = ['loc' => route('blog.show', $blog->slug), 'priority' => '0.7', 'changefreq' => 'weekly', 'lastmod' => $blog->updated_at->toAtomString()];
        });

        // Add Study Packages
        StudyPackage::where('is_active', true)->each(function ($package) use (&$urls) {
            $urls[] = ['loc' => route('paket.index'), 'priority' => '0.8', 'changefreq' => 'weekly'];
        });

        // Add Tryouts from different levels
        $models = [UtbkTryout::class, SdTryout::class, SmpTryout::class, SmaTryout::class, SmaUtbkTryout::class, AlumniTryout::class];
        foreach ($models as $model) {
            $model::where('status', 'published')->each(function ($tryout) use (&$urls) {
                // Here we usually have a landing/detail page per tryout, if so, add it.
                // For now we add a generic entry if applicable.
            });
        }

        $xmlDeclaration = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml = view('sitemap', compact('urls', 'xmlDeclaration'))->render();

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }
}
