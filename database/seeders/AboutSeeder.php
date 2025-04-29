<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use function Ramsey\Uuid\v1;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert(
            [
                [
                    'name' => "Joe doe",
                    'home_image' => "no-image.png",
                    'banner_image' => "no-image.png",
                    'phone' => "4444-4444-4444",
                    'email' => "joedoe@gmail.com",
                    'address' => "Munich",
                    'description' => 'Fullstack Web Developer with Extencive knowledge',
                    'summary' => "High Level experience in web",
                    'tagline' => "Fullstack Web Developer",
                    'cv' => "joedoe.pdf",
                ] 
            ]
                );
        
    }
}
