<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder{
    public function run(): void{
        Task::query()->delete();
        User::query()->delete();
        $yesterday = today()->subDay()->toDateString();
        $today = today()->toDateString();
        $tomorrow = today()->addDay()->toDateString();
        User::create([
            'username' => 'admin01',
            'full_name' => 'Alex Rivera',
            'email' => 'alex.rivera@example.com',
            'password' => Hash::make('Tsa4Demo-ChangeThis123!'),
        ]);
        Task::create([
            'title' => 'Review Laravel requirements',
            'status' => 'pending',
            'task_date' => $today,
        ]);
        Task::create([
            'title' => 'Create the tasks migration',
            'status' => 'done',
            'task_date' => $today,
        ]);
        Task::create([
            'title' => 'Prepare the task list page',
            'status' => 'pending',
            'task_date' => $today,
        ]);
        Task::create([
            'title' => 'Organize project files',
            'status' => 'pending',
            'task_date' => $yesterday,
        ]);
        Task::create([
            'title' => 'Review the project outline',
            'status' => 'done',
            'task_date' => $yesterday,
        ]);
        Task::create([
            'title' => 'Build the profile page',
            'status' => 'pending',
            'task_date' => $tomorrow,
        ]);
        Task::create([
            'title' => 'Add the today filter',
            'status' => 'pending',
            'task_date' => $tomorrow,
        ]);
        Task::create([
            'title' => 'Update the project README',
            'status' => 'pending',
            'task_date' => $tomorrow,
        ]);
    }
}