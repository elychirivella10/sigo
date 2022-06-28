<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
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
   
        $this->call([
            BranchSeeder::class,
            DepartamentSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            LocationsSeeder::class,
            PositionsSeeder::class,
            EmployeesSeeder::class,
            RoleHasPermissionSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}