<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            // Users
            'users.view',
            'users.create',
            'users.edit',
            'users.delete',

            // Leads
            'leads.view',
            'leads.create',
            'leads.edit',
            'leads.assign',

            // Institutes
            'institutes.view',
            'institutes.create',
            'institutes.edit',

            // Teacher/Student
            'teachers.view',
            'teachers.create',
            'students.view',
            'students.create',

            // Settings
            'settings.manage',
        ];

        foreach ($permissions as $p) {
            Permission::firstOrCreate(['name' => $p]);
        }
    }
}
