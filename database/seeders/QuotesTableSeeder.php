<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuotesTableSeeder extends Seeder
{
    public function run()
    {
        Quote::create(['text' => 'Be yourself; everyone else is already taken.', 'author' => 'Oscar Wilde']);
        Quote::create(['text' => 'Two things are infinite: the universe and human stupidity; and I\'m not sure about the universe.', 'author' => 'Albert Einstein']);
        // Add more quotes as needed
    }
}
php artisan db:seed --class=QuotesTableSeeder

