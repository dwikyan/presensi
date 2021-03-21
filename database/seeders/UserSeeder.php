<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Models\UserProject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@yahoo.com',
            'role' => 'admin',
            'password' => Hash::make('admin123')
        ]);

        User::create([
            'name' => 'user1',
            'email' => 'user1@yahoo.com',
            'password' => Hash::make('user123')
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@yahoo.com',
            'password' => Hash::make('user123')
        ]);

        $projek = Project::create([
            'nama' => 'Front End Web',
            'bobot' => 200,
            'keterangan' => 'Re design website landing page',
            'deadline' => '2021/03/25'
        ]);
        $projek1 = Project::create([
            'nama' => 'Back End Web',
            'bobot' => 200,
            'keterangan' => 'Re design website landing page',
            'deadline' => '2021/03/25'
        ]);

        UserProject::create([
            'project_id' => $projek1->id,
            'user_id' => 2
        ]);

        UserProject::create([
            'project_id' => $projek->id,
            'user_id' => 3
        ]);

        Task::create([
            'project_id' => $projek->id,
            'name' => 'landing page'
        ]);

        Task::create([
            'project_id' => $projek1->id,
            'name' => 'dashboard page'
        ]);
    }
}
