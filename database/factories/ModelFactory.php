<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'age' => 30,
        'mobile' => $faker->e164PhoneNumber,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),

    ];
});

$factory->define(App\Doctor::class, function (Faker\Generator $faker) {

    return [
        'user_id' =>factory(App\User::class)->create()->id,
    ];
});

$factory->define(App\Report::class, function (Faker\Generator $faker) {

    return [
      'title' => $faker->realText(30,1),
      'body' => $faker->realText(200,2),

    ];
});
$factory->define(App\Prescription::class, function (Faker\Generator $faker) {

    return [

    ];

});


$factory->define(App\Portfolio::class, function (Faker\Generator $faker) {

    return [
      'user_id' => rand(1,3),
      'doctor_id' => rand(1,2),
      'report_id' => rand(1,20),
      'prescription_id' => rand(1,20),
    ];

});


$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
      'report_id' => rand(1,20),
      'body'=> $faker->realText(100,1),
    ];

});

$factory->define(App\Drug::class, function (Faker\Generator $faker) {

    return [
      'name' => $faker->word,
      'description'=> $faker->realText(100,1),
    ];

});


$factory->define(App\Schedule::class, function (Faker\Generator $faker) {
    $typeId  = rand(1,2);
    $type = "";
    $title =" ";
    if ($typeId == 1) {
      $type = "appointment";
      $title = $faker->realText(30,1);
    }else {
      $type = "drug";
      $title = $faker->word;

    }

    return [
      'user_id' => rand(1,10),
      'type' => $type,
      'title' => $title,
      'date' => $faker->date()
    ];

});


$factory->define(App\Place::class, function (Faker\Generator $faker) {

    return [
      'location' => $faker->url,
      'address' => $faker->streetAddress,
      'name' => $faker->company,
      'mobile' => $faker->e164PhoneNumber,
      'email' => $faker->email,
      'website' => $faker->domainName,
      'rate' => mt_rand (0*10, 10*10) / 10,

    ];

});


$factory->define(App\Hospital::class, function (Faker\Generator $faker) {

    return [
      'place_id' => rand(1,10)
    ];

});
