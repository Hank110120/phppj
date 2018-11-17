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

$classes = DB::table('Classroom')->get();

?>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <div id="app">
            <select v-model="selectedClass">
                <option disabled selected value> -- select an option -- </option>
                <option v-for="clas in classes">{{ clas }}</option>
            </select>
            <select v-model="selectedStudent">
                <option disabled selected value> -- select an option -- </option>
                <option v-for="student in students" :value="student['SC_SI']">{{ student['SC_SN'] }}</option>
            </select>
            <table v-if="fractions">
                <tr>
                    <th>班級</th>
                    <th>學生姓名</th>
                    <th>分數</th>
                    <th>日期</th>
                </tr>
                <tr v-for="fraction in fractions">
                    <td>{{ fraction['F_CrN'] }}</td>
                    <td>{{ fraction['F_SN'] }}</td>
                    <td>{{ fraction['F_Fraction'] }}</td>
                    <td>{{ fraction['F_RD'] }}</td>
                </tr>
            </table>
        </div>
    </body>
    <script>
var app = new Vue({
    el: '#app',
    data: {
        classes: <?php echo json_encode($classes->pluck('Cr_Name')->toArray()); ?>,
        selectedClass: null,
        students: null,
        selectedStudent: null,
        fractions: null
    },
    watch: {
        selectedClass (value) {
            axios.get(`../../tutor-demo-master/api/students.php?SC_CN=${this.selectedClass}`)
                 .then(response => {
                     this.students = response.data
                 })
        },
        selectedStudent (value) {
            axios.get(`../../tutor-demo-master/api/fractions.php?F_SId=${this.selectedStudent}`)
                 .then(response => {
                     this.fractions = response.data
                 })
        }
    }
})
    </script>
</html>
