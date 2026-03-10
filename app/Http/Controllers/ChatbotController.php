<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $apiKey = env('GEMINI_API_KEY');
        $userMessage = $request->input('message');

        if (!$apiKey) {
            Log::error('Chatbot Error: GEMINI_API_KEY is not set in .env file.');
            return response()->json(['reply' => 'Maaf, konfigurasi bot belum lengkap (API Key kosong).'], 500);
        }

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->withoutVerifying()
            ->post("https://generativelanguage.googleapis.com/v1/models/gemini-flash-latest:generateContent?key={$apiKey}", [
                'contents' => [
                    [
                        'role' => 'user',
                        'parts' => [
                            ['text' => "Instruksi Sistem: Anda adalah OneBot, asisten AI resmi dari OneLearning Indonesia. 
                            Karakter: Ramah, sabar, cerdas, dan profesional. 
                            Konteks: OneLearning adalah platform tryout online (SD, SMP, SMA, UTBK) dengan sistem penilaian IRT dan analisis peluang SNBP.
                            Tugas:
                            1. Jawab pertanyaan seputar materi pelajaran sekolah dengan jelas dan mudah dimengerti.
                            2. Jelaskan fitur OneLearning jika ditanya (Tryout IRT, Riwayat Hasil, Sertifikat).
                            3. Gunakan Bahasa Indonesia yang santun.
                            4. Jika pertanyaan tidak berhubungan dengan pendidikan atau OneLearning, arahkan kembali dengan sopan.
                            
                            Pertanyaan User: {$userMessage}"]
                        ]
                    ]
                ],
                'generationConfig' => [
                    'temperature' => 0.7,
                    'topK' => 40,
                    'topP' => 0.95,
                    'maxOutputTokens' => 1024,
                ]
            ]);

            if ($response->successful()) {
                $data = $response->json();
                if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                    return response()->json(['reply' => $data['candidates'][0]['content']['parts'][0]['text']]);
                }
                return response()->json(['reply' => 'Maaf, saya sedang memproses informasi. Bisa tanya lagi?']);
            }

            if ($response->status() === 429) {
                return response()->json(['reply' => 'Maaf, kuota harian saya sedang habis (Limit 429). Silakan coba lagi nanti ya!']);
            }

            if ($response->status() === 404) {
                Log::error('Gemini API 404: Model not found.');
                return response()->json(['reply' => 'Maaf, model AI tidak ditemukan (Error 404). Sedang dalam perbaikan.']);
            }

            Log::error('Gemini API Error (' . $response->status() . '): ' . $response->body());
            return response()->json(['reply' => 'Maaf, sistem AI sedang dalam pemeliharaan sejenak.'], 500);

        } catch (\Exception $e) {
            Log::error('Chatbot Exception: ' . $e->getMessage());
            return response()->json(['reply' => 'Terjadi kesalahan koneksi. Pastikan internet Anda stabil.'], 500);
        }
    }
}
