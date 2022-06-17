<?php

namespace Database\Factories;

use App\Models\Coleta;
use App\Models\Entidade;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coleta>
 */
class ColetaFactory extends Factory
{

    protected $model = Coleta::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => Item::inRandomOrder()->first(),
            'entidade_id' => Entidade::inRandomOrder()->first(),
            'quantidade' => $this->faker->numerify('###'),
            'data' => '12/06/2022'
        ];
    }
}
