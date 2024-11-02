<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [];
        $users[] = [
            'name' => 'Admin',
            'email' => 'admin@kanye.com',
            'password' => bcrypt('12345'),
        ];
        foreach ($users as $user) {
            $check = [
                'email' => $user['email']
            ];
            User::updateOrCreate($user, $check);
        }
    }
}
