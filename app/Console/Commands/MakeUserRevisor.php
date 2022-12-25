<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    
    protected $signature = 'fast:makeUserRevisor {email}';
    // con email entre llaves hacemos llamada a un parametro de artisan
    protected $description = 'Asigna el rol de revisor a un usuario';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        // $email=$this->ask("Introducir el correo del usuario");
        // $user=User::where('email',$email)->first();  --- hay que llamarlo asi : php artisan fast:makeUserRevisor
        $user = User::where('email',$this->argument('email'))->first();
        // php artisan fast:makeUserRevisor claudia.iacob@hotmail.com --- hay que llamarlo asi ahora
        if (!$user) {
            $this->error("Usuario no encontrado");
            return;
        }
        $user->is_revisor=true;
        $user->save();
        $this->info("El usuario $user->name ya es revisor");
       
    }
}
