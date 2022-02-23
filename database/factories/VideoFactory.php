<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    protected $model = Video::class ;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //بدون خط پایین ، پیش فرض انگلیسی هست.اگر میخای زبان برای فیکرت اضافه کنی باید خط پایین کد بزنی.
       // $persianFaker = \Faker\Factory::create('fa_IR');
        return [

           // 'name' => $persianFaker->name() ,
            'name' => $this->faker->name() ,
            'director' => $this->faker->name() ,
            'url' => $this->faker->imageUrl(446, 240, 'animals', true),
            'lenght' => $this->faker->randomNumber(8, false),
            'slug' => $this->faker->slug() ,
            'description' => $this->faker->realText()
        ];
    }
}
