<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\LeadDeveloper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateDeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Developer=[
            [
                'name'=>'Ahmad',
                'email'=>'Ahmad@uniten.edu.my',
                'password'=> bcrypt('1234ahmad'),
            ],
            [
                'name'=>'Ali',
                'email'=>'Ali@uniten.edu.my',
                'password'=> bcrypt('1234ali'),
            ],
            [
                'name'=>'Abu',
                'email'=>'Abu@uniten.edu.my',
                'password'=> bcrypt('1234abu'),
            ],
            [
                'name'=>'Nadzri',
                'email'=>'Nazdri@uniten.edu.my',
                'password'=> bcrypt('1234nadz'),
            ],
        ];
        // foreach item in the $users array (above), create user
        foreach ($Developer as $key => $user) {
            Developer::create($user);
        }
    }
}
