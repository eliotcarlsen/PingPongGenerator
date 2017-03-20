<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/PingPongGenerator.php';

    session_start();

    if (empty($_SESSION['ping_pong_array'])) {
        $_SESSION['ping_pong_array'] = array ();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array (
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app){
        return $app['twig']->render('index.html.twig');
    });

    $app->post("/pingpong", function() use($app){
        $result = $_POST['number'];
        $number_array = new PingPongGenerator;
        return $app['twig']->render('pingPong.html.twig', array("numbers" => $number_array->generatePingPongArray($result)));
    });

    return $app;



?>
