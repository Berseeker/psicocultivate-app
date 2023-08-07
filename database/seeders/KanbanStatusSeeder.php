<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\KanbanStatus;

class KanbanStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KanbanStatus::create([
            'nombre' => 'En Progreso',
            'sku' => Str::slug('En Progreso', '-'),
            'order' => 1,
        ]);

        KanbanStatus::create([
            'nombre' => 'En Revisión',
            'sku' => Str::slug('En Revisión', '-'),
            'order' => 2,
        ]);

        KanbanStatus::create([
            'nombre' => 'Terminado',
            'sku' => Str::slug('Terminado', '-'),
            'order' => 3,
        ]);
    }
}
