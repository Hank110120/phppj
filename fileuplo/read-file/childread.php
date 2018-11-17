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

$targetFile = __DIR__ . '../../file/csv/child.csv';

$csv = Reader::createFromPath($targetFile1, 'r');
$csv->setHeaderOffset(0);

$header = $csv->getHeader(); //returns the CSV header record
$records = $csv->getRecords(); //returns all the CSV records as an Iterator object

foreach ($records as $record) {
    DB::insert(
        'Insert Into UserAccount (UA_PL, UA_Acu, UA_Psw, UA_Name, UA_Phone, UA_VC, UA_CVC) Values (?, ?, ?, ?, ?, ?, ?)',
        [$record['UA_PL'], $record['UA_Acu'], $record['UA_Psw'], $record['UA_Name'], $record['UA_Phone'], $record['UA_VC'], $record['UA_CVC']]
        // 'Insert Into Student (S_Name,S_Phone) Values (?, ?)',
        // [$record['S_Name'], $record['S_Phone']],
        // 'Insert Into StudentClass (SC_CI, SC_CN, SC_SI, SC_SN) Values (?, ?, ?, ?)',
        // [$record['SC_CI'], $record['SC_CN'], $record['SC_SI'], $record['SC_SN']]
    );
}
