<?php

include '../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule = new DB;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '220.135.97.54',
    'port'      => '3307',
    'database'  => 'team3',
    'username'  => 'root',
    'password'  => 'jacky110120',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this DB instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

echo json_encode(
    DB::table('StudentClass')->where('SC_CN', $_GET['SC_CN'])->get()->toArray()
);
