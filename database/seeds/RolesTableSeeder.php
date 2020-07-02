<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
            'name' => 'Admin'
      ]);
      
      App\Role::create([
            'name' => 'Wali Kelas'
      ]);
      
      App\Role::create([
            'name' => 'Guru'
      ]);

      App\Role::create([
        'name' => 'Siswa'
  ]);
    }
}
