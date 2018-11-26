<?php
// use for psysh
// if (is_file(getcwd() . '/vendor/autoload.php')) {
//     require_once getcwd() . '/vendor/autoload.php';
// }
require __DIR__.'/../vendor/autoload.php';
// session_start();

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

$user = DB::table('UserAccount')->where('UA_Acu', $_SESSION["name"])->pluck('UA_Phone');
// $parents = DB::table('UserAccount')->where('UA_PC', $user->UA_id)->get();
// $studentClass = DB::table('Student')->whereIn('phone', $parents->pluck('phone')->toArray())->get();
$student = DB::table('Student')->where('S_Phone',$user)->pluck('S_Name');
$studentClass = DB::table('StudentClass')->where('SC_SN',$student)->get();

