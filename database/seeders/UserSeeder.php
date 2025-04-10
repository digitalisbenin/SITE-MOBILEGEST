<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!count(User::all())) {
            
            
                User::create(
                [
                    'name' => 'Super',
                    'email' => 'administrateurs@gmail.com',
                    'password' => bcrypt('password2025@'),
                   
                        
                ],
                
            );
        }
    }
}
