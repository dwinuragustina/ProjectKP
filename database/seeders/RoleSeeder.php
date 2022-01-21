<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'AM',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'backroom',
            'guard_name' => 'web'
        ]);
    }
}
