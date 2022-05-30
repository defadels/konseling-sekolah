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

$factory->define(User::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'nis' => $faker->unique()->randomNumber(8, false),
        'nip' => $faker->unique()->randomNumber(8, false),
        'email' => $faker->unique()->safeEmail,
        'mapel' => $faker->jobtitle,
        'email_verified_at' => now(),
        'password' => Hash::make('janganlupa'),
        'jenis' => $faker->randomElement(['siswa','guru','master']),
        'nomor_hp' => $faker->phoneNumber(),
        'status' => $faker->randomElement(['aktif','nonaktif']),
        'jenis_kelamin' => $faker->randomElement(['laki-laki','perempuan']),
        'agama' => $faker->randomElement(['islam','kristen','protestan','hindu','buddha','khonghucu']),
        'alamat' => $faker->address,
        'tempat_lahir' => $faker->city,
        'tanggal_lahir' => $faker->date,
        'remember_token' => Str::random(10),
        'kelas_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9]),
    ];
});
