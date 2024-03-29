<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Company::class, function(Faker $faker){
	return [
		'user_id'=>App\User::all()->random()->id,
		'name'=>$faker->sentence,
		'description'=>$faker->paragraph(random_int(3, 5))
	];

});

$factory->define(App\Project::class, function(Faker $faker){
	return [
		'name'=>$faker->sentence,
		'description'=>$faker->paragraph(random_int(3, 5)),
		'company_id'=>App\Company::all()->random()->id,
		'user_id'=>App\User::all()->random()->id,
		'days'=>$faker->biasedNumberBetween($min = 1, $max = 20, $function='sqrt')
	];
});


$factory->define(App\Role::class, function(Faker $faker){
	return [
		'name'=>$faker->word
	];
});


$factory->define(App\Task::class, function(Faker $faker){
	return [
		'name'=>$faker->word,
		'user_id'=>App\User::all()->random()->id,
		'project_id'=>App\Project::all()->random()->id,
		'company_id'=>App\Company::all()->random()->id,
		'days'=>$faker->biasedNumberBetween($min = 1, $max = 20, $function='sqrt')
	];
});


$factory->define(App\Profile::class, function(Faker $faker){
	return [
		'user_id'=>App\User::all()->random()->id,
		'city'=>$faker->city,
		'about'=>$faker->paragraph(random_int(3, 5))
	];
});

$factory->define(App\Country::class, function(Faker $faker){
	return [
		'name'=>$faker->country
	];
});

 
$factory->define(App\Comment::class, function(Faker $faker){
	return [
		'user_id'=>$faker->biasedNumberBetween($min = 1, $max = 20, $function='sqrt'),
		'body'=>$faker->paragraph(random_int(3, 5)),
		'commentable_id'=>$faker->randomDigit,

		'commentable_type'=>function(){
			$input = ['App\Task', 'App\Profile', 'App\Article'];
			$model = $input[mt_rand(0, count($input)-1)];

			return $model;
		}
	];
});


$factory->define(App\Article::class, function(Faker $faker){
	return [
		'user_id'=>App\User::all()->random()->id,
		'title'=>$faker->sentence,
		'body'=>$faker->paragraph(random_int(3, 5))
	];
});


$factory->define(App\Tag::class, function(Faker $faker){
	return [
		'tag'=>$faker->word
	];
});