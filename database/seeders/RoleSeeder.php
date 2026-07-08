<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            'super_admin',
            'sub_admin',
            'institute',
            'teacher',
            'student',
            'lead_manager',
            'lead_partner',
        ] as $role) {
            Role::firstOrCreate(['name' => $role]);
        }
    }
}
