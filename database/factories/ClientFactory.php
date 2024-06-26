<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{


    private function get_dni():string
    {
        $number=fake ( ) ->numberBetween (16000000 , 99999999) ;
        $caracteres ="TRWAGMYFPDXBNJZSQVHLCKE" ;
        $caracter = $caracteres[$number %23];

        return "$number-$caracter"; 
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre"=>fake()->name(),
            "DNI"=>$this->get_dni(),
            "edad"=>fake()->numberBetween(15,100),
            "email"=>fake()->email()
            
            
        ];
    }
}
