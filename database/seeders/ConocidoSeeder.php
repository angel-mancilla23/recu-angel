<?php

namespace Database\Seeders;
use App\Models\Conocido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConocidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conocido = new Conocido();
        $conocido->name = 'Alexis';
        $conocido->usuario = 'Alexis98';
        $conocido->clave = 'admin';
        $conocido->save();

        $conocido = new Conocido();
        $conocido->name = 'Elena';
        $conocido->usuario = 'Elena98';
        $conocido->clave = '1234';
        $conocido->save();
    }
}
