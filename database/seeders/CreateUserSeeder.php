<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1: Manager 2: LeadDeveloper 3:Developer
        $users = [
            [
                'name'=>'Hazli',
                'email'=>'hazli@uniten.edu.my',
                'password'=> bcrypt('1234hazli'),
                'role' => 1
            ],
            [
                'name'=>'Ahmad',
                'email'=>'Ahmad@uniten.edu.my',
                'password'=> bcrypt('1234ahmad'),
                'role' => 3
            ],
            [
                'name'=>'Ali',
                'email'=>'Ali@uniten.edu.my',
                'password'=> bcrypt('1234ali'),
                'role' => 3
            ],
            [
                'name'=>'Abu',
                'email'=>'Abu@uniten.edu.my',
                'password'=> bcrypt('1234abu'),
                'role' => 3
            ],
            [
                'name'=>'Nadzri',
                'email'=>'Nazdri@uniten.edu.my',
                'password'=> bcrypt('1234nadz'),
                'role' => 3
            ],
            [
                'name'=>'Zafri',
                'email'=>'Zafri@uniten.edu.my',
                'password'=> bcrypt('1234zafri'),
                'role' => 2
            ],
            [
                'name'=>'Adam',
                'email'=>'adam@uniten.edu.my',
                'password'=> bcrypt('1234adam'),
                'role' => 2
            ],
            [
                'name'=>'Izhan',
                'email'=>'izhan@uniten.edu.my',
                'password'=> bcrypt('1234izhan'),
                'role' => 2
            ],
            [
                'name'=>'Naufal',
                'email'=>'naufal@uniten.edu.my',
                'password'=> bcrypt('1234naufal'),
                'role' => 2
            ],
        ];
        // foreach item in the $users array (above), create user
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
