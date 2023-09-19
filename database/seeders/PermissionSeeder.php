<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
      /**
      * Run the database seeds.
      *
      * @return void
      */
      public function run()
      {
            $permissions = [
                  'roles-list', 
                  'roles-view', 
                  'roles-create', 
                  'roles-edit', 
                  'roles-delete',

                  'users-list', 
                  'users-view', 
                  'users-create', 
                  'users-edit', 
                  'users-delete',

                  'strings-list', 
                  'strings-view', 
                  'strings-create', 
                  'strings-edit', 
                  'strings-delete',

                  'audit-list', 
                  'audit-view', 
                  'audit-create', 
                  'audit-edit', 
                  'audit-delete',

                  'log-list', 
                  'log-view', 
                  'log-create', 
                  'log-edit', 
                  'log-delete',

                  'settings-list',
                  'settings-create',
            ];
        
            foreach ($permissions as $permission) {
                  Permission::create(['name' => $permission]);
            }
      }
}