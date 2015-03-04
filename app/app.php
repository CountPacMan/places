<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/place.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app) {
        return $app['twig']->render('places.php');
    });

    $app->post("/results", function() use($app) {
        $place = new Place($_POST['placeName']);

        return $app['twig']->render('results.php', array('place' => $place));
    });

    return $app;


 ?>
