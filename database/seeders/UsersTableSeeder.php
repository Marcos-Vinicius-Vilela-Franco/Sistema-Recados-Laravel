<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Email;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert(
        // [
        //     'name' => 'Marcos Vinicius V Franco',
         //     'email' =>'mvmarcos74@gmail.com',
        //      'email_verified_at' => now(),
        //      'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //      'remember_token' => 'este e teste ta bom ',
        // ]
        // );
       // \App\Models\User::factory()->count(30)->create()->each(function($user){
        // $user->recado()->save(factory(\App\Models\Recado::class)->make());
        //});
        \App\Models\User::factory()->count(30)->create()->each(function($user){
            $user->recado()->save(\App\Models\Recado::factory()->make());
           });
       
    }
}
