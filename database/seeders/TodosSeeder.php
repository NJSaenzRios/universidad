<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class TodosSeeder extends Seeder
{

    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin johana',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'codigo' => 'joha1',
            
        ]);
        $user1=User::create([
            'name' => 'usuario nelson',
            'email' => 'nelson@gmail.com',
            'password' => Hash::make('nelson'),
            'fullacces' => 'no',
            'codigo' => 'nel1',
            
        ]);
      
    }
}