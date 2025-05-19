<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Buat permission untuk role user (registration)
        $registrationPermissions = Permission::whereIn('name', [
            'view_registration', 'view_any_registration', 'create_registration', 'update_registration', 
            'view_verification', 'view_any_verification',
        ])->get();

        // Ambil role 'user' (registration)
        $userRole = Role::where('name', 'user')->first();

        if ($userRole) {
            $userRole->syncPermissions($registrationPermissions);
        }
    }
}