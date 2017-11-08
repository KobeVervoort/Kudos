<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Compliment::class, function (Faker $faker) {
    $senderIDs = User::all()->pluck('id')->toArray();
    $senderID = $faker->randomElement($senderIDs);

    $receiverIDs = User::where('id', '!=', $senderID)->pluck('id')->toArray();
    $receiverID = $faker->randomElement($receiverIDs);

    return [
        'sender' => $senderID,
        'receiver' => $receiverID,
        'body' => $faker->text($maxNbChars = 140),
    ];
});
