<?php

use Database\seeds\Common\CitiesSeeder;
use Database\seeds\Common\CountriesSeeder;
use Database\seeds\Development\EstablishmentSeeder;
use Database\seeds\Development\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (config('app.env') == 'production') {
            return $this->seedProduction();
        }

        $this->seedDevelopment();
    }

    private function basicSetup()
    {
        //TODO: Implement
    }

    private function seedDevelopment()
    {
        $this->basicSetup();
        $this->call(UserSeeder::class);
    }

    private function seedProduction()
    {
        $this->basicSetup();
    }
}
