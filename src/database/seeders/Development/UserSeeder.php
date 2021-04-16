<?php
namespace Database\seeds\Development;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Module\Account\Models\Address;
use Module\Account\Models\User;
use Module\Account\ValueObjects\Permissions;
use Module\Account\ValueObjects\Roles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission as SpatiePermission;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::beginTransaction();
        try {
            $this->createClient();

            DB::commit();
        } catch (\Exception $e)
        {
            DB::rollBack();
            throw $e;
        }
    }

    private function createClient()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
