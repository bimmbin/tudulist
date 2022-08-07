<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'task' => fake()->sentence(20)
        ];
    }



    // * For PHP ARTISAN TINKER/ make a dummy data
    // App\Models\Post::factory()->times(200)->create(['user_id' => 3, 'task_name' => sampleName]);


    
}
