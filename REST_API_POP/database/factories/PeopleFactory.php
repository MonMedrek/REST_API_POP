<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{

    public function definition()
    {

        return [
            'name'=>$this->faker->name(),
            'surname'=>$this->faker->lastName(),
            'phone_number' =>$this->faker->phoneNumber(),
            'street'=>$this->faker->streetName(),
            'city'=>$this->faker->city(),
            'country'=>$this->faker->country()
        ];
    }
}
