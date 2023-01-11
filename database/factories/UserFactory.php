<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'nom' => $this->faker->name,
            'prenom' => $this->faker->firstName,
            'sexe' => $this->faker->randomElement(array('male', 'female', 'mixed')),
            'telephone1' => $this->faker->phoneNumber,
            'telephone2' => $this->faker->phoneNumber,
            'pieceIdentite' =>$this->faker->randomElement(array('Passport', 'CNI', 'Permis de Conduire')),
            'numeroPieceIdentite' => $this->faker->swiftBicNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'photo' => $this->faker->swiftBicNumber,
        ];
    }
}
