<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"=>$this->faker->lastName,
            "prenom" => $this->faker->firstName,
            "sexe" => array_rand(["F", "H"]),
            "dateNaissance" => $this->faker->dateTimeBetween("1980-01-01", "2001-12-31"),
            "lieuNaissance" => $this->faker->city(),
            "nationalite" => $this->faker->country(),
            "pays" => $this->faker->country(),
            "ville" => $this->faker->city(),
            "adresse" => $this->faker->address(),
            "telephone1" => $this->faker->phoneNumber(),
            "telephone2" => $this->faker->phoneNumber(),
            "pieceIdentite" => array_rand(["CNI", "PASSPORT", "PERMIS DE CONDUIRE"]),
            "numeroPieceIdentite" => $this->faker->creditCardNumber(),
        ];
    }
}
