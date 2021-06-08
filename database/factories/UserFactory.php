<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'username' => $this->faker->username(30),
            'email' => $this->faker->email(30),
            'password' => $this->faker->password(50),
            'avatar' => $this->faker->text(100)
        ];
    }
}
