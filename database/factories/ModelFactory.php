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



$factory->define(App\Usuario_fotografia::class, function (Faker\Generator $faker)
{

    return [
        'fotografia' =>$faker->randomElement(['000000000.jpg', '123456789.jpg', '564789321.jpg']),
        'fecha_subida' =>$faker->date,
        'valida' =>$faker->randomElement(['SI']),
        'observacion' =>$faker->randomElement(['NINGUNA']),
        'id_usuario' =>$faker->numberBetween($min = 1, $max = 7),
    ];
});


$factory->define(App\Bitacora::class, function (Faker\Generator $faker)
{

    return [
    
        'ip' =>$faker->ipv4,
        'desc_operacion'=>$faker->randomElement(['INGRESO AL SISTEMA ADMINISION FCE', 'INGRESO A LA ADMISION ESTUDIANTIL FCE', 'INGRESO AL SISTEMA ACADEMICO FCE', 'FINALIZO SU TRABAJO DENTRO DEL SISTEMA ACADEMICO FCE']),
        'fecha_bitacora'=>$faker->date,
        'id_usuario'=>$faker->numberBetween($min = 1, $max = 7),
        'id_tipo_op_bitacora'=>$faker->numberBetween($min = 1, $max = 5),
    ];
});