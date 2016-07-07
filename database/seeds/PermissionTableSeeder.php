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
        $permissions = [
            [

                'name' => 'role-list',

                'display_name' => 'Display Role Listing',

                'description' => 'See only Listing Of Role'

            ],

            [

                'name' => 'role-create',

                'display_name' => 'Create Role',

                'description' => 'Create New Role'

            ],

            [

                'name' => 'role-edit',

                'display_name' => 'Edit Role',

                'description' => 'Edit Role'

            ],

            [

                'name' => 'role-delete',

                'display_name' => 'Delete Role',

                'description' => 'Delete Role'

            ],

            [

                'name' => 'item-list',

                'display_name' => 'Display Item Listing',

                'description' => 'See only Listing Of Item'

            ],

            [

                'name' => 'item-create',

                'display_name' => 'Create Item',

                'description' => 'Create New Item'

            ],

            [

                'name' => 'item-edit',

                'display_name' => 'Edit Item',

                'description' => 'Edit Item'

            ],

            [

                'name' => 'item-delete',

                'display_name' => 'Delete Item',

                'description' => 'Delete Item'

            ],

            [
                "name" => "menus-list",
                "display_name" => "Display menus listing",
                "description" => "Listing Menus"
            ],

            [
                "name" => "menus-create",
                "display_name" => "Create new menus",
                "description" => "Create menus"
            ],

            [
                "name" => "menus-edit",
                "display_name" => "Edit Menu",
                "description" => "Edit Menu"
            ],

            [
                "name" => "menus-delete",
                "display_name" => "Delete Menus",
                "description" => "Delete menus"
            ],

            [
                "name" => "permissions-list",
                "display_name" => "Listing Permissions",
                "description" => "Listing Permissions"
            ],

            [
                "name" => "permission-create",
                "display_name" => "Create new Permission",
                "description" => "Create Permission"
            ],

            [
                "name" => "permission-edit",
                "display_name" => "Edit Permission",
                "description" => "Edit Permission"
            ],

            [
                "name" => "permission-delete",
                "display_name" => "Delete permission",
                "description" => "Delete permission"
            ]
        ];

        foreach($permissions as $key => $value) {
            \App\Permission::create($value);
        }

    }
}
