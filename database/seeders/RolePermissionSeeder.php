<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Super admin: ALL permissions
        $super = Role::firstOrCreate(['name' => 'super_admin']);
        $super->givePermissionTo(\Spatie\Permission\Models\Permission::all());

        // Sub admin: limited
        $sub = Role::firstOrCreate(['name' => 'sub_admin']);
        $sub->syncPermissions([
            'users.view','users.create','users.edit',
            'leads.view','leads.create','leads.edit','leads.assign',
            'institutes.view',
        ]);

        // Lead Manager
        $leadManager = Role::firstOrCreate(['name' => 'lead_manager']);
        $leadManager->syncPermissions([
            'leads.view','leads.create','leads.edit','leads.assign',
        ]);

        // Lead Partner
        $leadPartner = Role::firstOrCreate(['name' => 'lead_partner']);
        $leadPartner->syncPermissions([
            'leads.view','leads.create',
        ]);

        // Institute
        $institute = Role::firstOrCreate(['name' => 'institute']);
        $institute->syncPermissions([
            'teachers.view','teachers.create',
            'students.view','students.create',
            'leads.view',
        ]);

        // Teacher
        $teacher = Role::firstOrCreate(['name' => 'teacher']);
        $teacher->syncPermissions([
            'students.view',
            'leads.view',
        ]);

        // Student
        $student = Role::firstOrCreate(['name' => 'student']);
        $student->syncPermissions([
            // keep minimal
        ]);
    }
}
