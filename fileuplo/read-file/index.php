<?php
require __DIR__.'/../vendor/autoload.php';

use League\Csv\Reader;
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

$targetFile = __DIR__ . '../../file/csv/transcript.csv';

$csv = Reader::createFromPath($targetFile1, 'r');
$csv->setHeaderOffset(0);

$header = $csv->getHeader(); //returns the CSV header record
$records = $csv->getRecords(); //returns all the CSV records as an Iterator object

foreach ($records as $record) {
    DB::insert(
        'insert into Fraction (F_CrId, F_CrN, F_SId, F_SN, F_Fraction, F_Subject) values (?, ?, ?, ?, ?, ?)',
        [$record['F_CrId'], $record['F_CrN'], $record['F_SId'], $record['F_SN'], $record['F_Fraction'], $record['F_Subject']]
    );
}
