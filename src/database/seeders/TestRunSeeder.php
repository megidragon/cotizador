<?php

use Illuminate\Database\Seeder;
use Module\Account\ValueObjects\Permissions;
use Module\Account\ValueObjects\Roles;
use Spatie\Permission\Models\Permission as SpatiePermission;
use Spatie\Permission\Models\Role;


class TestRunSeeder extends Seeder
{
    public function run()
    {
        $permissionsAdmin = [
            Permissions::ADDRESS_LIST,
            Permissions::ADDRESS_CREATE,
            Permissions::ADDRESS_UPDATE,
            Permissions::ADDRESS_DELETE,
        ];

        $permissionsClient = [
            Permissions::ADDRESS_LIST_SELF,
            Permissions::ADDRESS_CREATE_SELF,
            Permissions::ADDRESS_UPDATE_SELF,
            Permissions::ADDRESS_DELETE_SELF,
            Permissions::ADDRESS_SET_DEFAULT,
        ];

        foreach(array_merge($permissionsAdmin, $permissionsClient) as $key => $perm)
        {
            SpatiePermission::create(['name' => $perm]);
        }

        $role = Role::where(['name' => Roles::ADMIN])->first();
        $role->syncPermissions($permissionsAdmin);

        $role = Role::where(['name' => Roles::CLIENT])->first();
        $role->syncPermissions($permissionsClient);
    }
}
