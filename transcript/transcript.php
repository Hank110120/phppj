<?php
include '../vendor/autoload.php';
session_start();
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
        <link rel="stylesheet" type="text/css" href="../CSS/transcript.css">
        <link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
        <link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
</head>
<body>
  <div class="bg" >
    <img src="../file/background/transcript.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
  </div>
  <form method="POST"  action="transcriptselect.php" class="wow bounceIn" style="position: relative;top: 60px;">
    <div class="font" align="center">Transcript</div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">
          <img src="../file/logo/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
          <?php include '../SQL/datause.php';?>
          <?php 
          echo $result["C_CN"];
          ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav burger-center">

            <?php include '../config.php';?>
            <?php
            if ($result) {
              $UA_PL = $result['UA_PL'];
              if ($UA_PL == '0') {
                  echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
                  echo '<a class="nav-item nav-link navpage" href="../addaccount/teachercontact.php">聯絡簿</a>';
                  // echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
                  echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
                } elseif ($UA_PL == '1') {
                  echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
                  echo '<a class="nav-item nav-link navpage" href="../addaccount/teachercontact.php">聯絡簿</a>';
                  // echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
                  echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
                } else {
                  echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
                  echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
                  echo '<a class="nav-item nav-link navpage" href="./addaccount/parentPw.php">密碼修改</a>';
                  // echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
                  // echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
                }
              }
            ?>
            <a class="nav-item nav-link navpage" href="#"><span class="glyphicon glyphicon-user"></span>

              <?php
              // echo"<center><font color='blue';font size='8'>";
              echo $result["UA_Name"] . "\n你好";
              // echo "</font>";
              ?>
            </a>
            <a class="nav-item nav-link navpage" href="../logout.php"><span class="glyphicon glyphicon-log-in"></span>
              Logout</a>

          </div>
        </div>
    </nav>
    <div id="app">
      <div class=" flexbox">
        <div class=" item">
            <div class="form-group">
                <label for="SC_CN">Class</label>
                <select class="form-control" name="SC_CN" id="SC_CN" style="font-size:24px;height:50px;" v-model="selectedClass">
                    <option disabled selected value> -- select an option -- </option>
                    <option v-for="clas in classes">{{ clas }}</option>
                </select>
            </div>
        </div>
        <div class=" item">
            <div class="form-group">
                <label for="SC_SN">Student Name</label>
                <select class="form-control" name="SC_SN" id="SC_SN" style="font-size:24px;height:50px;" v-model="selectedStudent">
                    <option disabled selected value> -- select an option -- </option>
                    <option v-for="student in students" :value="student['SC_SI']">{{ student['SC_SN'] }}</option>
                </select>
            </div>
        </div>
        
        <!-- <div class=" item">
          <div class="form-group">
              <label for="datestart">Date Start</label>
              <input class="form-control" type="date" name="datestart" id="datestart" style="font-size:24px;height:50px;">

          </div>
        </div> -->
        <!-- <div class=" item">
          <div class="form-group">
              <label for="dateend">Date End</label>
              <input class="form-control" type="date" name="dateend" id="dateend" style="font-size:24px;height:50px;">
          </div>
        </div> -->
        <!-- <div class=" item">
          <div class="cen" >
              <div class="submitBtn">
                <button id="btn" type="submit" class="btn btn-default cen" style="font-family: 'Hi Melody', cursive;background: rgba(170, 175, 175, 0.4);width:300px;font-size:32px;color:white;">Submit</button>
              </div>
          </div>
        </div> -->
      </div>
      <div style="border-bottom:5px red solid"></div>
      <div style="border-radius:50px;">
      <table v-if="fractions" border="1" style="margin:10px auto 10px auto;border:5px blue solid;">
            <tr  align="center" valign="center">
                <!-- <th><font size="5">班級</th> -->
                <th><font size="5">科目</th>
                <th><font size="5">學生姓名</th>
                <th><font size="5">分數</th>
                <th><font size="5">日期</th>
            </tr>
            <tr v-for="fraction in fractions" align="center" valign="center">
                <!-- <td><font size="5">{{ fraction['F_CrN'] }}</td> -->
                
                <td><font size="5">{{ fraction['F_Subject'] }}</td>
                <td><font size="5">{{ fraction['F_SN'] }}</td>
                <td><font size="5">{{ fraction['F_Fraction'] }}</td>
                <td><font size="5">{{ fraction['F_RD'] }}</td>
            </tr>
        </table>
        </div>
    </div>
    
  </form>
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
              axios.get(`../tutor-demo-master/api/students.php?SC_CN=${this.selectedClass}`)
                  .then(response => {
                      this.students = response.data
                  })
          },
          selectedStudent (value) {
              axios.get(`../tutor-demo-master/api/fractions.php?F_SId=${this.selectedStudent}`)
                  .then(response => {
                      this.fractions = response.data
                  })
          }
      }
  })
</script>
<script src="../JS/jquery-3.3.1.min.js"></script>
<script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
<!-- <script src="../JS/allbutton.js"></script> -->
<script src="../JS/transcript.js"></script>
</html>
