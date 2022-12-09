<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'              => 'B  J  O  R  K  A',
                'email'             => 'anantamohammad2003@gmail.com',
                'type'              => 1, // 
                'password'          => bcrypt('sekretarisjoss100'),
            ]
            ];
        
        
            foreach ($users as $key => $user) {
                User::create($user);
         }
    }
}
