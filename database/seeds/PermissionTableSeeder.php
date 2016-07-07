<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $adminRole = \App\Role::where("name", "admin")->first();
        $permissions = [
//            [
//
//                'name' => 'roles-list',
//
//                'display_name' => 'Display Role Listing',
//
//                'description' => 'See only Listing Of Role'
//
//            ],
//
//            [
//
//                'name' => 'roles-create',
//
//                'display_name' => 'Create Role',
//
//                'description' => 'Create New Role'
//
//            ],
//
//            [
//
//                'name' => 'roles-edit',
//
//                'display_name' => 'Edit Role',
//
//                'description' => 'Edit Role'
//
//            ],
//
//            [
//
//                'name' => 'roles-delete',
//
//                'display_name' => 'Delete Role',
//
//                'description' => 'Delete Role'
//
//            ],
//
//            [
//
//                'name' => 'item-list',
//
//                'display_name' => 'Display Item Listing',
//
//                'description' => 'See only Listing Of Item'
//
//            ],
//
//            [
//
//                'name' => 'item-create',
//
//                'display_name' => 'Create Item',
//
//                'description' => 'Create New Item'
//
//            ],
//
//            [
//
//                'name' => 'item-edit',
//
//                'display_name' => 'Edit Item',
//
//                'description' => 'Edit Item'
//
//            ],
//
//            [
//
//                'name' => 'item-delete',
//
//                'display_name' => 'Delete Item',
//
//                'description' => 'Delete Item'
//
//            ],
//
//            [
//                "name" => "menus-list",
//                "display_name" => "Display menus listing",
//                "description" => "Listing Menus"
//            ],
//
//            [
//                "name" => "menus-create",
//                "display_name" => "Create new menus",
//                "description" => "Create menus"
//            ],
//
//            [
//                "name" => "menus-edit",
//                "display_name" => "Edit Menu",
//                "description" => "Edit Menu"
//            ],
//
//            [
//                "name" => "menus-delete",
//                "display_name" => "Delete Menus",
//                "description" => "Delete menus"
//            ],
//
//            [
//                "name" => "permissions-list",
//                "display_name" => "Listing Permissions",
//                "description" => "Listing Permissions"
//            ],
//
//            [
//                "name" => "permissions-create",
//                "display_name" => "Create new Permission",
//                "description" => "Create Permission"
//            ],
//
//            [
//                "name" => "permissions-edit",
//                "display_name" => "Edit Permission",
//                "description" => "Edit Permission"
//            ],
//
//            [
//                "name" => "permissions-delete",
//                "display_name" => "Delete permissions",
//                "description" => "Delete permissions"
//            ]
//            [
//                "name" => "user-list",
//                "display_name" => "Listing Users",
//                "description" => "Listing Users"
//            ],
//
//            [
//                "name" => "user-create",
//                "display_name" => "Create new user",
//                "description" => "Create user"
//            ],
//
//            [
//                "name" => "user-edit",
//                "display_name" => "Edit user",
//                "description" => "Edit user"
//            ],
//
//            [
//                "name" => "user-delete",
//                "display_name" => "Delete user",
//                "description" => "Delete user"
//            ],

            [
                "name" => "roles-list",
                "display_name" => "Listing roles",
                "description" => "Listing roles"
            ],

            [
                "name" => "roles-create",
                "display_name" => "Create new roles",
                "description" => "Create roles"
            ],

            [
                "name" => "roles-edit",
                "display_name" => "Edit roles",
                "description" => "Edit roles"
            ],

            [
                "name" => "roles-delete",
                "display_name" => "Delete roles",
                "description" => "Delete roles"
            ]
        ];

        foreach($permissions as $key => $value) {
            \App\Permission::create($value);
        }

    }
}
