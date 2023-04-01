<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Status;
use App\Models\Category;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'role_id' => 0,
            'fullname' => 'user',
            'dob' => '2023-03-31',
            'phone_number' => '123456789999',
            'gender' => 'Male',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345'),
            'address' => 'User Street, No.ABC123'
        ]);
        User::create([
            'role_id' => 1,
            'fullname' => 'admin',
            'dob' => '2023-03-01',
            'phone_number' => '000000000000',
            'gender' => 'Male',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'address' => 'Admin Street, No.XYZ'
        ]);

        Status::create([
            'id' => 1,
            'status_name' => 'Ongoing'
        ]);
        Status::create([
            'id' => 2,
            'status_name' => 'Delivered'
        ]);
        Status::create([
            'id' => 3,
            'status_name' => 'Finished'
        ]);

        Category::create([
            'id' => 1,
            'category_name' => 'Cheese'
        ]);
        Category::create([
            'id' => 2,
            'category_name' => 'Strawberry'
        ]);
        Category::create([
            'id' => 3,
            'category_name' => 'Chocolate'
        ]);

        Role::create([
            'id' => 0,
            'role_name' => 'user'
        ]);
        Role::create([
            'id' => 1,
            'role_name' => 'admin'
        ]);
    }
}
