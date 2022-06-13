<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaseStudyFactory extends Factory
{
    protected $model = Model::class;

    public function definition(): array
    {
    	return [
    	    'image_links'=>$this->faker->imageUrl(),
            'titles'=>$this->faker->text(20),
            'descriptions'=>$this->faker->text(50),

    	];
    }
}
