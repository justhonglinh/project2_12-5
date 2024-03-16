<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'Admin 1' ,
            'email' => 'admin1@gmail.com',
            'phone' => '0328942388' ,
            'address' => 'A17' ,
            'password' => Hash::make('admin1'),
            'role' => 'admin'
        ]) ;
        DB::table('users')->insert([
            'name' => 'Customer 1' ,
            'email' => 'customer1@gmail.com',
            'phone' => '0328942388' ,
            'address' => 'A17' ,
            'password' => Hash::make('customer1'),
            'role' => 'customer'
        ]) ;
        DB::table('users')->insert([
            'name' => 'Super Admin 1' ,
            'email' => 'superadmin1@gmail.com',
            'phone' => '0328942388' ,
            'address' => 'A17' ,
            'password' => Hash::make('superadmin'),
            'role' => 'super_admin'
        ]) ;

    }
}
