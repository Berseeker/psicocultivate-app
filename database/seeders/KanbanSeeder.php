<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kanban;

class KanbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kanban::create([
            'titulo' => 'Kanban 1',
            'fecha_vencimiento' => '2021-04-17',
            'archivos' => null,
            'user_id' => 4,
            'psicologo_id' => 2,
            'kanban_status_id' => 1,
        ]);

        Kanban::create([
            'titulo' => 'Kanban 1.1',
            'fecha_vencimiento' => '2021-04-18',
            'archivos' => null,
            'user_id' => 4,
            'psicologo_id' => 2,
            'kanban_status_id' => 2,
        ]);

        Kanban::create([
            'titulo' => 'Kanban 2',
            'fecha_vencimiento' => '2021-04-18',
            'archivos' => null,
            'user_id' => 5,
            'psicologo_id' => 2,
            'kanban_status_id' => 1,
        ]);

        Kanban::create([
            'titulo' => 'Kanban 2.2',
            'fecha_vencimiento' => '2021-04-18',
            'archivos' => null,
            'user_id' => 5,
            'psicologo_id' => 2,
            'kanban_status_id' => 3,
        ]);
    }
}
