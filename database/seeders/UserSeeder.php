<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator As Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    for($i=0; $i<20; $i++){
        $email=$faker->word.'@gmail.com';
        $users_count=User::where('email',$email)->count();
        if($users_count==0){
            DB::table('users')->insert([
                'name'=>$faker->sentence(2),
                'email'=>$email,
                'password'=>Hash::make('password'),
                'profile_photo_path'=>'profile_photo/No-Image.png'
            ]);
        }
    }
    }
}
