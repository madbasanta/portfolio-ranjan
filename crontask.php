<?php

use Intervention\Image\Image;

require __DIR__ . '/vendor/autoload.php';

$posters = glob(__DIR__ . '/public/assets/commercials/posters/*');

$manager = new Intervention\Image\ImageManager(
    new Intervention\Image\Drivers\Gd\Driver()
);

foreach ($posters as $poster) {
    $optimizedPoster = str_replace('.jpg', '_optimized.jpg', $poster);
    if (file_exists($optimizedPoster)) {
        continue;
    }

    $image = $manager->read($poster);
    $image->toJpeg(20);

    $image->save($optimizedPoster);
}