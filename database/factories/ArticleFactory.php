<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);

        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);

        return [
            'title'=> $title,
            'slug'=>$slug,
            'body' => $this->faker->paragraph(100),
            'img'=>'https://icdn.lenta.ru/images/2021/01/29/18/20210129181350549/pic_06c858039d25a4177810dc819fffc89d.jpg   ',
            'created_at'=>$this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
