<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder {
    public function run() {
        $this->roles();
        $this->rolePermissions();
        // $this->roleUsers();
    }
    public function roles() {
        $roles = ['Admin', 'Advisor', 'Viewer', 'Super User'];
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
                'slug' => Str::slug($role),
            ]);
        }
    }
    public function rolePermissions() {
        $role_permissions = [
            1 => ['assignRoles', 'canBeGivenAccess', 'manageRoles', 'manageUsers', 'viewNova', 'viewRoles', 'viewUsers', 'viewCompany', 'manageCompany', 'switchUsers'],
            2 => ['assignRoles', 'canBeGivenAccess', 'viewNova', 'viewRoles', 'viewUsers', 'viewCompany', 'manageCompany', 'switchUsers'],
            3 => ['viewUsers'],
            4 => ['viewUsers'],
        ];
        foreach ($role_permissions as $role_id => $access_items) {
            foreach ($access_items as $access_item) {
                DB::table('role_permission')->insert([
                    'role_id' => $role_id,
                    'permission_slug' => $access_item,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);
            }
        }
    }
    public function roleUsers() {
        $phase3Users = [1 => 1, 2 => 1, 3 => 2, 4 => 3, 5 => 1];
        $advisors = [6 => 2, 7 => 2, 8 => 2, 9 => 2];
        $viewers = [];

        $role_users = $phase3Users + $advisors + $viewers;
        foreach ($role_users as $user_id => $role_id) {
            DB::table('role_user')->insert([
                'role_id' => (int) $role_id,
                'user_id' => (int) $user_id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
