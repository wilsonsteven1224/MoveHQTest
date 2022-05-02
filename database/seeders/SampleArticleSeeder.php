<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class SampleArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'About laravel',
            'content' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.
            
            The source code of Laravel is hosted on GitHub and licensed under the terms of MIT License.',
        ]);

        Article::create([
            'title' => 'About Vue.js',
            'content' => 'Vue.js (commonly referred to as Vue; pronounced "view") is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications.
            
            It was created by Evan You, and is maintained by him and the rest of the active core team members.',
        ]);
    }
}
