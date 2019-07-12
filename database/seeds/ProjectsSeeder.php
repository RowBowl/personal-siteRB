<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
          'title'=> 'Schedular App Frontend',
          'description' => 'I made a simple UI for a schedular web
          app. I used this personal project to introduce myself to
          react. I was able to learn about react\'s component tree model.
          This was also my first exposure to nodejs.',
          'type' => 'Personal Project',
          'link' => 'https://github.com/RowBowl/schedule-app-redesign'
        ]);

        DB::table('projects')->insert([
          'title'=> 'Personal Website with Laravel',
          'description' => 'I made my own personal website using laravel.
          Laravel is an open source PHP framework that follows a model-view-controller
          pattern. I deployed the website through DigitalOcean web hosting in a
          linux ubuntu environment. I was able to use my knowledge in PHP, Mysql,
          CSS (bulma).',
          'type' => 'Personal Project',
          'link' => 'https://github.com/RowBowl/personal-siteRB'
        ]);
    }
}
