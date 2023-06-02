<?php

namespace Database\Seeders;
use App\Models\Contacto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $contacto = new Contacto();
        $contacto->nombre = ('Angel');
        $contacto->telefono = ('9614378598');
        $contacto->correo = ('gamer@gmail.com');
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = ('Omar');
        $contacto->telefono = ('9611163059');
        $contacto->correo = ('gamer11@gmail.com');
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = ('Daniel');
        $contacto->telefono = ('9614379090');
        $contacto->correo = ('gamer22@gmail.com');
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = ('Manuel');
        $contacto->telefono = ('9614378080');
        $contacto->correo = ('gamer33@gmail.com');
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = ('Alejandro');
        $contacto->telefono = ('9614377070');
        $contacto->correo = ('gamer44@gmail.com');
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = ('Paola');
        $contacto->telefono = ('9614376060');
        $contacto->correo = ('gamer55@gmail.com');
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = ('Karen');
        $contacto->telefono = ('9614375555');
        $contacto->correo = ('gamer66@gmail.com');
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = ('Valeria');
        $contacto->telefono = ('9614374444');
        $contacto->correo = ('gamer77@gmail.com');
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = ('Monserrath');
        $contacto->telefono = ('9615678988');
        $contacto->correo = ('monse@gmail.com');
        $contacto->save();
    }
}
