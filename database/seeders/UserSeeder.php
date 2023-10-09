<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

// User Seeder von Luis erstellt.

class UserSeeder extends Seeder
{
    public $users = [
        [
            'name' => 'Baris K.',
            'email' => 'barisk@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Francisco W.',
            'email' => 'franciscow@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Luis G.',
            'email' => 'luisg@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Cyrill G.',
            'email' => 'cyrillg@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Binyam T.',
            'email' => 'binyamt@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Alex G.',
            'email' => 'alexg@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Alex I.',
            'email' => 'alexi@example.ch',
            'password' => 'password123',
        ],
    ]; 





    public function run(): void
    {
        foreach($this->users as $user){
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
    
    
}
