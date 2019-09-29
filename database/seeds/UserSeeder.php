<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // usuario con el rol profesor
         $profesor = User::create([
            'name' => 'Mauro',
            'username'=>'Profesor',
            'email' => 'profesor@gmail.com',
            'password' => bcrypt('123456')
          ]);
           $profesor->assignRole('Profesor');

           // usuario con el rol preceptor
          $preceptor = User::create([
            'name' => 'lucas',
            'username'=>'preceptor',
            'email' => 'preceptor@gmail.com',
            'password' => bcrypt('123456')
          ]);
           $preceptor->assignRole('Preceptor');


           // usuario con el rol directivos
          $directivos = User::create([
            'name' => 'marcos',
            'username'=>'directivos',
            'email' => 'directivos@gmail.com',
            'password' => bcrypt('123456')
          ]);
           $directivos->assignRole('Directivos');


           // usuario con el rol administrativos
          $administrativos = User::create([
            'name' => 'dario',
            'username'=>'administrativos',
            'email' => 'administrativos@gmail.com',
            'password' => bcrypt('123456')
          ]);
           $administrativos->assignRole('Administrativos');


           // usuario con el rol super-admin
          $admin = User::create([
            'name' => 'johnny',
            'username'=>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
          ]);
           $admin->assignRole('Super-admin');

        // factory(User::class, 7)->create([
        //     'password' => bcrypt('secret'),
        
    }
}
