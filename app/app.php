<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/place.php';
    session_start();
    if (empty($_SESSION['place_list'])) {
        $_SESSION['place_list'] = [];
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app) {
        return $app['twig']->render('places.php', array('places' => Place::getAll()));
    });

    $app->post("/results", function() use($app) {
        $place = new Place($_POST['placeName']);
        $place->save();

        return $app['twig']->render('results.php', array('place' => $place));
    });

    $app->post("/delete", function() use($app) {
        Place::deleteAll();
        return $app['twig']->render('delete.php');
    });

    return $app;


 ?>
