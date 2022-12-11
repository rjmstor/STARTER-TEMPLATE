<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'User',
                'id' => 2

            ],
            [
                'name' => 'Admin',
                'id' => 1

            ]
            ];
            foreach ($roles as $key => $value) {
                Role::create($value);
            }
    }
}
