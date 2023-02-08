<?php

namespace Database\Factories;

use App\Models\Prestamo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestamo>
 */
class PrestamoFactory extends Factory
{

    protected $model= Prestamo::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_prestamo'=>$this->faker->numberBetween(),
            'fecha_prestamo'=>$this->faker->date(),
            'hora_prestamo'=>$this->faker->time(),
            'fecha_entrega'=>$this->faker->date(),
            'hora_entrega'=>$this->faker->time(),
            'observaciones'=>$this->faker->sentence(),
            'id_numero_ambiente'=>$this->faker->numberBetween(),
            'numero_documento'=>$this->faker->numberBetween()
        ];
    }
}
