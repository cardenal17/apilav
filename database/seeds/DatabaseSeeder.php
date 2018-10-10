<?php

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
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SoldadurasSedeer::class);
        $this->call(PerforadoSeeder::class);
        $this->call(EnsamblajesSeeder::class);
        $this->call(His_enSeeder::class);
        $this->call(His_perSeeder::class);
        $this->call(His_solSeeder::class);
    }
}
