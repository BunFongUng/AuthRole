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
//                'name' => 'role-list',
//
//                'display_name' => 'Display Role Listing',
//
//                'description' => 'See only Listing Of Role'
//
//            ],
//
//            [
//
//                'name' => 'role-create',
//
//                'display_name' => 'Create Role',
//
//                'description' => 'Create New Role'
//
//            ],
//
//            [
//
//                'name' => 'role-edit',
//
//                'display_name' => 'Edit Role',
//
//                'description' => 'Edit Role'
//
//            ],
//
//            [
//
//                'name' => 'role-delete',
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
//                "name" => "permission-create",
//                "display_name" => "Create new Permission",
//                "description" => "Create Permission"
//            ],
//
//            [
//                "name" => "permission-edit",
//                "display_name" => "Edit Permission",
//                "description" => "Edit Permission"
//            ],
//
//            [
//                "name" => "permission-delete",
//                "display_name" => "Delete permission",
//                "description" => "Delete permission"
//            ]
            [
                "name" => "user-list",
                "display_name" => "Listing Users",
                "description" => "Listing Users"
            ],

            [
                "name" => "user-create",
                "display_name" => "Create new user",
                "description" => "Create user"
            ],

            [
                "name" => "user-edit",
                "display_name" => "Edit user",
                "description" => "Edit user"
            ],

            [
                "name" => "user-delete",
                "display_name" => "Delete user",
                "description" => "Delete user"
            ],

            [
                "name" => "role-list",
                "display_name" => "Listing roles",
                "description" => "Listing roles"
            ],

            [
                "name" => "role-create",
                "display_name" => "Create new role",
                "description" => "Create role"
            ],

            [
                "name" => "role-edit",
                "display_name" => "Edit role",
                "description" => "Edit role"
            ],

            [
                "name" => "role-delete",
                "display_name" => "Delete role",
                "description" => "Delete role"
            ]
        ];

        foreach($permissions as $key => $value) {
            \App\Permission::create($value);
        }

//        $adminRole->attachPermissions($permissions);
    }
}
