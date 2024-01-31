<?php

namespace Database\Seeders;

use App\Models\LeadDeveloper;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateLeadDeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $LeadDevelopers = [
            [
                'name'=>'Zafri',
                'email'=>'Zafri@uniten.edu.my',
                'password'=> bcrypt('1234zafri'),
            ],
            [
                'name'=>'Adam',
                'email'=>'adam@uniten.edu.my',
                'password'=> bcrypt('1234adam'),
            ],
            [
                'name'=>'Izhan',
                'email'=>'izhan@uniten.edu.my',
                'password'=> bcrypt('1234izhan'),
            ],
            [
                'name'=>'Naufal',
                'email'=>'naufal@uniten.edu.my',
                'password'=> bcrypt('1234naufal'),
            ],
        ];

        // foreach item in the $users array (above), create user
        foreach ($LeadDevelopers as $key => $user) {
            LeadDeveloper::create($user);
        }
    }
}
