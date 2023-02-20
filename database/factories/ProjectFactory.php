<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->unique()->company() . ' ' . fake()->companySuffix();
        $bodyArray = fake()->paragraphs(3);
        $body = '<p>' . join('</p></p>', $bodyArray ) . '</p>';
        $excerpt = fake()->catchPhrase();
        $slug = Str::slug($title, '-');

        return [        
            'title' => $title,        
            'excerpt' => $excerpt,        
            'body' => $body,        
            'slug' => $slug,    
        ];
    }
}


// public function definition()
// {
//     $bodyArray = fake()->paragraphs(3);
//     $body = join('', array_map(function($paragraph) {
//         return '<p>' . $paragraph . '</p>';
//     }, $bodyArray));
//     return [
//         'title' => fake()->company() . ' ' . fake()->companySuffix(),
//         'excerpt' => fake()->catchPhrase(),
//         'body' => $body
//     ];
// }