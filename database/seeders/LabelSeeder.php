<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Label;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Label::create([
            'nombre' => 'Terapia',
            'label_class' => 'primary',
            'sku' => Str::of('Terapia')->slug('_'),
            'icon' => null
        ]);

        Label::create([
            'nombre' => 'Taller Infancias',
            'label_class' => 'warning',
            'sku' => Str::of('Taller Infancias')->slug('_'),
            'icon' => null
        ]);

        Label::create([
            'nombre' => 'Taller Juventudes',
            'label_class' => 'success',
            'sku' => Str::of('Taller Juventudes')->slug('_'),
            'icon' => null
        ]);
    }
}
