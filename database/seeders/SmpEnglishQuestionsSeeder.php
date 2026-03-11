<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmpTryout;
use App\Models\Question;

class SmpEnglishQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmpTryout::where('name', 'Simulasi Bahasa Inggris SMP')->first();
        
        if (!$tryout) {
            $tryout = SmpTryout::create([
                'name' => 'Simulasi Bahasa Inggris SMP',
                'subject' => 'Bahasa Inggris',
                'question_count' => 50,
                'duration_minutes' => 90,
                'price' => 0,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // GREETINGS & INTRODUCTIONS (1-5)
            [
                'topic' => 'Greetings',
                'question_text' => 'Andi: "Hello, Budi. How are you?" Budi: "..., thank you."',
                'option_a' => 'I am fine',
                'option_b' => 'Nice to meet you',
                'option_c' => 'Goodbye',
                'option_d' => 'You are welcome',
                'option_e' => 'See you',
                'correct_answer' => 'a',
                'order' => 1
            ],
            [
                'topic' => 'Introductions',
                'question_text' => 'Santi: "Hi, I am Santi. What is your name?" Tono: "..."',
                'option_a' => 'I am Tono.',
                'option_b' => 'How do you do?',
                'option_c' => 'I live in Jakarta.',
                'option_d' => 'I am 13 years old.',
                'option_e' => 'Thank you very much.',
                'correct_answer' => 'a',
                'order' => 2
            ],
            [
                'topic' => 'Greetings',
                'question_text' => 'It is 7 PM. You meet your teacher at the supermarket. You say: "..."',
                'option_a' => 'Good morning',
                'option_b' => 'Good afternoon',
                'option_c' => 'Good evening',
                'option_d' => 'Good night',
                'option_e' => 'Goodbye',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Introductions',
                'question_text' => 'Rini: "Mom, this is my friend, Dina." Mom: "Hello, Dina. ..." Dina: "Nice to meet you too, Ma\'am."',
                'option_a' => 'Who are you?',
                'option_b' => 'Nice to meet you.',
                'option_c' => 'How are you?',
                'option_d' => 'Where do you live?',
                'option_e' => 'What is your hobby?',
                'correct_answer' => 'b',
                'order' => 4
            ],
            [
                'topic' => 'Leave Taking',
                'question_text' => 'A: "I have to go now. See you later!" B: "..."',
                'option_a' => 'Nice to meet you.',
                'option_b' => 'I am sorry.',
                'option_c' => 'See you!',
                'option_d' => 'Good morning.',
                'option_e' => 'Thank you.',
                'correct_answer' => 'c',
                'order' => 5
            ],

            // GRAMMAR - TENSES & PRONOUNS (6-20)
            [
                'topic' => 'Simple Present Tense',
                'question_text' => 'She ... her teeth twice a day.',
                'option_a' => 'brush',
                'option_b' => 'brushes',
                'option_c' => 'brushing',
                'option_d' => 'brushed',
                'option_e' => 'is brush',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'Simple Present Tense',
                'question_text' => 'They ... not play football on Sundays.',
                'option_a' => 'do',
                'option_b' => 'does',
                'option_c' => 'is',
                'option_d' => 'are',
                'option_e' => 'am',
                'correct_answer' => 'a',
                'order' => 7
            ],
            [
                'topic' => 'Simple Present Tense',
                'question_text' => '... he like spicy food?',
                'option_a' => 'Do',
                'option_b' => 'Does',
                'option_c' => 'Is',
                'option_d' => 'Are',
                'option_e' => 'Has',
                'correct_answer' => 'b',
                'order' => 8
            ],
            [
                'topic' => 'Pronouns',
                'question_text' => 'This is my cat. ... name is Whiskers.',
                'option_a' => 'It',
                'option_b' => 'Its',
                'option_c' => 'It\'s',
                'option_d' => 'His',
                'option_e' => 'Her',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'Simple Past Tense',
                'question_text' => 'I ... to the cinema yesterday.',
                'option_a' => 'go',
                'option_b' => 'goes',
                'option_c' => 'went',
                'option_d' => 'gone',
                'option_e' => 'going',
                'correct_answer' => 'c',
                'order' => 10
            ],
            [
                'topic' => 'Simple Past Tense',
                'question_text' => 'Did you ... your homework last night?',
                'option_a' => 'finish',
                'option_b' => 'finishes',
                'option_c' => 'finished',
                'option_d' => 'finishing',
                'option_e' => 'is finish',
                'correct_answer' => 'a',
                'order' => 11
            ],
            [
                'topic' => 'Present Continuous Tense',
                'question_text' => 'Look! The baby ... right now.',
                'option_a' => 'sleep',
                'option_b' => 'sleeps',
                'option_c' => 'is sleeping',
                'option_d' => 'are sleeping',
                'option_e' => 'was sleeping',
                'correct_answer' => 'c',
                'order' => 12
            ],
            [
                'topic' => 'Prepositions',
                'question_text' => 'The book is ... the table.',
                'option_a' => 'in',
                'option_b' => 'on',
                'option_c' => 'at',
                'option_d' => 'under',
                'option_e' => 'between',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'Degrees of Comparison',
                'question_text' => 'An elephant is ... than a cow.',
                'option_a' => 'big',
                'option_b' => 'bigger',
                'option_c' => 'biggest',
                'option_d' => 'more big',
                'option_e' => 'most big',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'Degrees of Comparison',
                'question_text' => 'Mount Everest is the ... mountain in the world.',
                'option_a' => 'high',
                'option_b' => 'higher',
                'option_c' => 'highest',
                'option_d' => 'more high',
                'option_e' => 'most high',
                'correct_answer' => 'c',
                'order' => 15
            ],
            [
                'topic' => 'Modals',
                'question_text' => 'I ... speak English fluently.',
                'option_a' => 'can',
                'option_b' => 'am',
                'option_c' => 'is',
                'option_d' => 'have',
                'option_e' => 'do',
                'correct_answer' => 'a',
                'order' => 16
            ],
            [
                'topic' => 'Pronouns',
                'question_text' => 'They are my brothers. I love ... very much.',
                'option_a' => 'they',
                'option_b' => 'their',
                'option_c' => 'them',
                'option_d' => 'theirs',
                'option_e' => 'themselves',
                'correct_answer' => 'c',
                'order' => 17
            ],
            [
                'topic' => 'Articles',
                'question_text' => 'I want to be ... doctor in the future.',
                'option_a' => 'a',
                'option_b' => 'an',
                'option_c' => 'the',
                'option_d' => 'any',
                'option_e' => 'some',
                'correct_answer' => 'a',
                'order' => 18
            ],
            [
                'topic' => 'Articles',
                'question_text' => 'She ate ... apple this morning.',
                'option_a' => 'a',
                'option_b' => 'an',
                'option_c' => 'the',
                'option_d' => 'any',
                'option_e' => 'some',
                'correct_answer' => 'b',
                'order' => 19
            ],
            [
                'topic' => 'Possessive Adjectives',
                'question_text' => 'We live here. This is ... house.',
                'option_a' => 'we',
                'option_b' => 'our',
                'option_c' => 'ours',
                'option_d' => 'us',
                'option_e' => 'their',
                'correct_answer' => 'b',
                'order' => 20
            ],

            // VOCABULARY (21-30)
            [
                'topic' => 'Vocabulary',
                'question_text' => 'A person who flies an airplane is called a ...',
                'option_a' => 'driver',
                'option_b' => 'pilot',
                'option_c' => 'doctor',
                'option_d' => 'chef',
                'option_e' => 'farmer',
                'correct_answer' => 'b',
                'order' => 21
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'We use our ... to listen to music.',
                'option_a' => 'eyes',
                'option_b' => 'ears',
                'option_c' => 'nose',
                'option_d' => 'mouth',
                'option_e' => 'hands',
                'correct_answer' => 'b',
                'order' => 22
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'The opposite of "cheap" is ...',
                'option_a' => 'easy',
                'option_b' => 'hard',
                'option_c' => 'expensive',
                'option_d' => 'dirty',
                'option_e' => 'clean',
                'correct_answer' => 'c',
                'order' => 23
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'A place where we can borrow books is a ...',
                'option_a' => 'hospital',
                'option_b' => 'school',
                'option_c' => 'library',
                'option_d' => 'market',
                'option_e' => 'bank',
                'correct_answer' => 'c',
                'order' => 24
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'What is the color of a ripe banana?',
                'option_a' => 'Red',
                'option_b' => 'Blue',
                'option_c' => 'Yellow',
                'option_d' => 'Green',
                'option_e' => 'Purple',
                'correct_answer' => 'c',
                'order' => 25
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'A ... has four legs and says "meow".',
                'option_a' => 'dog',
                'option_b' => 'bird',
                'option_c' => 'cat',
                'option_d' => 'rabbit',
                'option_e' => 'cow',
                'correct_answer' => 'c',
                'order' => 26
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'Which one is a fruit?',
                'option_a' => 'Carrot',
                'option_b' => 'Spinach',
                'option_c' => 'Apple',
                'option_d' => 'Cabbage',
                'option_e' => 'Potato',
                'correct_answer' => 'c',
                'order' => 27
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'A person who teaches students in a school is a ...',
                'option_a' => 'nurse',
                'option_b' => 'police',
                'option_c' => 'teacher',
                'option_d' => 'soldier',
                'option_e' => 'waiter',
                'correct_answer' => 'c',
                'order' => 28
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'What day comes after Monday?',
                'option_a' => 'Wednesday',
                'option_b' => 'Friday',
                'option_c' => 'Tuesday',
                'option_d' => 'Sunday',
                'option_e' => 'Saturday',
                'correct_answer' => 'c',
                'order' => 29
            ],
            [
                'topic' => 'Vocabulary',
                'question_text' => 'We need an ... when it is raining.',
                'option_a' => 'umbrella',
                'option_b' => 'shoes',
                'option_c' => 'hat',
                'option_d' => 'bag',
                'option_e' => 'glasses',
                'correct_answer' => 'a',
                'order' => 30
            ],

            // FUNCTIONAL TEXTS - NOTICE, INV., ANNOUNCEMENT (31-40)
            [
                'topic' => 'Notice',
                'question_text' => 'Notice: "KEEP OFF THE GRASS". What does it mean?',
                'option_a' => 'We can play on the grass.',
                'option_b' => 'We must not walk on the grass.',
                'option_c' => 'We should water the grass.',
                'option_d' => 'We can sleep on the grass.',
                'option_e' => 'We must cut the grass.',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Notice',
                'question_text' => 'Notice: "NO SMOKING AREA". Where can you find this notice?',
                'option_a' => 'In a park',
                'option_b' => 'In a hospital',
                'option_c' => 'In a swimming pool',
                'option_d' => 'In a forest',
                'option_e' => 'In a gym',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Invitation',
                'question_text' => '"Please come to my 14th birthday party!" What kind of text is it?',
                'option_a' => 'Announcement',
                'option_b' => 'Invitation',
                'option_c' => 'Notice',
                'option_d' => 'Advertisement',
                'option_e' => 'Greeting card',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'Announcement',
                'question_text' => '"Announcement: The school will be closed tomorrow due to the holiday." Who is the announcement for?',
                'option_a' => 'Only teachers',
                'option_b' => 'Only parents',
                'option_c' => 'All students and staff',
                'option_d' => 'The principal',
                'option_e' => 'The government',
                'correct_answer' => 'c',
                'order' => 34
            ],
            [
                'topic' => 'Notice',
                'question_text' => 'Notice: "WET FLOOR". What should we do?',
                'option_a' => 'Run quickly.',
                'option_b' => 'Be careful while walking.',
                'option_c' => 'Bring an umbrella.',
                'option_d' => 'Clean the floor.',
                'option_e' => 'Play water there.',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Greeting Card',
                'question_text' => '"Happy Mother\'s Day! You are the best mom in the world." Why does the writer send the card?',
                'option_a' => 'To ask for money.',
                'option_b' => 'To congratulate her mother.',
                'option_c' => 'To complain about something.',
                'option_d' => 'To tell a story.',
                'option_e' => 'To invite her to a party.',
                'correct_answer' => 'b',
                'order' => 36
            ],
            [
                'topic' => 'Notice',
                'question_text' => 'Notice: "FLAMMABLE". What does it mean?',
                'option_a' => 'Safe to touch.',
                'option_b' => 'Can easily catch fire.',
                'option_c' => 'Can be eaten.',
                'option_d' => 'Very cold.',
                'option_e' => 'Fragile.',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Invitation',
                'question_text' => '"RSVP to 0812-3456-7890". What does RSVP mean?',
                'option_a' => 'Read this carefully.',
                'option_b' => 'Please respond/confirm your attendance.',
                'option_c' => 'Do not forget the date.',
                'option_d' => 'Bring your own food.',
                'option_e' => 'Come early.',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'Announcement',
                'question_text' => 'Where would you usually hear an announcement about a delayed flight?',
                'option_a' => 'In a school',
                'option_b' => 'In an airport',
                'option_c' => 'In a hospital',
                'option_d' => 'In a library',
                'option_e' => 'In a bank',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Notice',
                'question_text' => 'Notice: "SILENCE PLEASE". What does it mean?',
                'option_a' => 'We can talk loudly.',
                'option_b' => 'We must be quiet.',
                'option_c' => 'We can play music.',
                'option_d' => 'We should sing.',
                'option_e' => 'We must leave.',
                'correct_answer' => 'b',
                'order' => 40
            ],

            // READING COMPREHENSION (41-50)
            [
                'topic' => 'Descriptive Text',
                'question_text' => 'Text: "My cat is called Kitty. She has soft white fur and green eyes. She likes eating fish and drinking milk." What is the color of Kitty\'s eyes?',
                'option_a' => 'White',
                'option_b' => 'Blue',
                'option_c' => 'Green',
                'option_d' => 'Black',
                'option_e' => 'Yellow',
                'correct_answer' => 'c',
                'order' => 41
            ],
            [
                'topic' => 'Descriptive Text',
                'question_text' => 'What does Kitty like to drink?',
                'option_a' => 'Water',
                'option_b' => 'Milk',
                'option_c' => 'Juice',
                'option_d' => 'Tea',
                'option_e' => 'Coffee',
                'correct_answer' => 'b',
                'order' => 42
            ],
            [
                'topic' => 'Procedure Text',
                'question_text' => 'Text: "How to make a cup of tea. First, boil some water. Second, put a tea bag into a cup. Third, pour the hot water..." What is the first step?',
                'option_a' => 'Pour the hot water.',
                'option_b' => 'Boil some water.',
                'option_c' => 'Add some sugar.',
                'option_d' => 'Drink the tea.',
                'option_e' => 'Put a tea bag into a cup.',
                'correct_answer' => 'b',
                'order' => 43
            ],
            [
                'topic' => 'Narrative Text',
                'question_text' => 'Text: "Once upon a time, there was a beautiful princess named Snow White. She lived with her seven dwarfs..." Who did Snow White live with?',
                'option_a' => 'Her parents',
                'option_b' => 'Her seven dwarfs',
                'option_c' => 'A wicked queen',
                'option_d' => 'A handsome prince',
                'option_e' => 'Her grandmother',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Recount Text',
                'question_text' => 'Text: "Last week, my family and I went to the beach. We played with sand and went swimming." When did they go to the beach?',
                'option_a' => 'Yesterday',
                'option_b' => 'Last week',
                'option_c' => 'Next month',
                'option_d' => 'Two days ago',
                'option_e' => 'Every Sunday',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Descriptive Text',
                'question_text' => 'Text: "Borobudur is a famous temple in Central Java. It is a Buddhist temple." Where is Borobudur located?',
                'option_a' => 'West Java',
                'option_b' => 'East Java',
                'option_c' => 'Central Java',
                'option_d' => 'Jakarta',
                'option_e' => 'Bali',
                'correct_answer' => 'c',
                'order' => 46
            ],
            [
                'topic' => 'Narrative Text',
                'question_text' => 'What is the main purpose of a narrative text?',
                'option_a' => 'To describe something.',
                'option_b' => 'To entertain the reader with a story.',
                'option_c' => 'To tell how to do something.',
                'option_d' => 'To announce an event.',
                'option_e' => 'To persuade someone.',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Procedure Text',
                'question_text' => 'In a procedure text, we usually use words like "First", "Second", "Then", which are called...',
                'option_a' => 'Adjectives',
                'option_b' => 'Temporal conjunctions',
                'option_c' => 'Pronouns',
                'option_d' => 'Prepositions',
                'option_e' => 'Nouns',
                'correct_answer' => 'b',
                'order' => 48
            ],
            [
                'topic' => 'Descriptive Text',
                'question_text' => 'Which tense is mostly used in a descriptive text?',
                'option_a' => 'Simple Past Tense',
                'option_b' => 'Simple Present Tense',
                'option_c' => 'Simple Future Tense',
                'option_d' => 'Present Continuous Tense',
                'option_e' => 'Past Continuous Tense',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Recount Text',
                'question_text' => 'What is the purpose of a recount text?',
                'option_a' => 'To describe a person.',
                'option_b' => 'To retell past events or experiences.',
                'option_c' => 'To give instructions.',
                'option_d' => 'To invite someone.',
                'option_e' => 'To forbid something.',
                'correct_answer' => 'b',
                'order' => 50
            ],
        ];

        foreach ($questions as $q) {
            $tryout->questions()->create($q);
        }

        $tryout->update(['question_count' => count($questions)]);
    }
}
