<?php

require '../vendor/autoload.php';

require '../lib/TimeAgo.php';

require '../config.php';

date_default_timezone_set('PRC');

// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => '../templates',
));

$app->setName('Hei');

// Prepare view
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('../templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);

$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

//register 'ago' filter
$app->view->getInstance()->addFilter(new Twig_SimpleFilter('ago', 'timeAgo'));

$app->view->appendData(array(
    'SITE_URL' => SITE_URL,
));

/**
 * Home Page
 */
$app->get('/', function () use ($app) {
	$topics = json_decode(file_get_contents("../topics/meta.json"));
    $app->render('index.html', array('topics' => $topics));
})->name('/');

/**
 * Topic Page
 */
$app->get('/topics/:name', function($name) use($app) {
	$file = "../topics/{$name}.md";
	if(!file_exists($file)) $app->halt(404, "Topic Not Found");
	$content = file_get_contents($file);
    $content = Parsedown::instance()->setBreaksEnabled(true)->text($content); 
	$app->render('topic.html', array('content' => $content));
})->name('topic');

// Run app
$app->run();

?>
