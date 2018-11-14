<?php
session_start();
if($_SESSION["name"] == null){
  header("location:login.php"); 
}
  
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>起始頁</title>

  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./resource/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./resource/WOW-master/css/libs/animate.css">
  <link rel="stylesheet" href="./resource/bootstrap-4.1.1-dist/css/bootstrap.css">
</head>

<body>

  <!-- 導航欄 -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #f1db90;">
    <a class="navbar-brand mb-0 h1" href="#">
      <img src="./file/logo/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      <?php include 'SQL/datause.php';?>
      <?php 
      echo $result["C_CN"];
      ?>

      <!-- Dolphin Sync -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav burger-center">

        <?php include 'config.php';?>
        <?php
        if ($result) {
          $UA_PL = $result['UA_PL'];
          if ($UA_PL == '0') {
              // echo '<a class="nav-item nav-link navpage" href="#">首頁</a>';
              echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              echo '<a class="nav-item nav-link navpage" href="./contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="./transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="./addaccount/maintain.php">系統維護</a>';
              echo '<a class="nav-item nav-link navpage" href="#contextus">聯絡我們</a>';
            } elseif ($UA_PL == '1') {
              // echo '<a class="nav-item nav-link navpage" href="#">首頁</a>';
              echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              echo '<a class="nav-item nav-link navpage" href="./contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="./transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="./addaccount/maintain.php">系統維護</a>';
              echo '<a class="nav-item nav-link navpage" href="#contextus">聯絡我們</a>';
            } else {
              // echo '<a class="nav-item nav-link navpage" href="#">首頁</a>';
              echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              echo '<a class="nav-item nav-link navpage" href="./contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="./transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="#contextus">聯絡我們</a>';
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
        <a name="Logout" class="nav-item nav-link navpage" href="logout.php"><span class="glyphicon glyphicon-log-in"></span>
          Logout</a>
          <!-- <input type="submit" name="Logout" class="Logout" id="Logout"> -->
      </div>
    </div>
  </nav>





  <!-- 輪播欄 -->
  <!-- <div class="container"> -->
  <div class="bgcolor">
    <div id="carouselExampleControls" class="carousel slide bottom" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active phsize">
          <img class="d-block w-100" src="./file/slide/1.JPG" alt="First slide">
        </div>
        <div class="carousel-item phsize">
          <img class="d-block w-100" src="./file/slide/2.JPG" alt="Second slide">
        </div>
        <div class="carousel-item phsize">
          <img class="d-block w-100" src="./file/slide/3.JPG" alt="Third slide">
        </div>
        <div class="carousel-item phsize">
          <img class="d-block w-100" src="./file/slide/4.JPG" alt="Third slide">
        </div>
        <div class="carousel-item phsize">
          <img class="d-block w-100" src="./file/slide/5.JPG" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- 師資欄 -->
    <div>
      <img class="logo" src="./file/logo/logo.jpg" alt="">
      <h2 class="slogan">全心全意的照顧</h2>
      <h3 class="slogan">全心全意的照顧</h3>
      <h4 class="slogan">全心全意的照顧</h4>
    </div>
    <div class="panel-group" id="accordion" style="background:rgb(180, 255, 255, 0.4);">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title block">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="" style="color:rgb(116, 183, 45)">
              師資介紹
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse show">
          <div class="panel-body">
            <div class="flexbox">
              <div class="item">
                <div class="card" style="width: 12rem;">
                  <img class="card-img-top" src="./file/teacherhead/1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">一拳老師</h5>
                    <p class="card-text">孩要作底去見德高員，生布立千結與是三了人我？確水最部了因樂能物，年發價：上下風，進神可！待全件天空；個告車的活活影新朋據作覺直角、公萬絕死，究讀過質夫性！有樓何部內的多建運全。發今它出然作，原科也我能孩打吸自次：一目子明，數復以麼像在水象鄉在這創出覺實友你導……病站從？同觀這量先深分最投上水求子響眼增量家走、自行照排外成？一孩家營能上品！爭解在從是，電音講賽報我，了全市強市念？在越許會黨馬頭？洲工拉節通並布是父益庭就者進戲。速行
                      card's content.</p>
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                        收起
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 12rem;">
                  <img class="card-img-top" src="./file/teacherhead/2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">神眉老師</h5>
                    <p class="card-text">孩要作底去見德高員，生布立千結與是三了人我？確水最部了因樂能物，年發價：上下風，進神可！待全件天空；個告車的活活影新朋據作覺直角、公萬絕死，究讀過質夫性！有樓何部內的多建運全。發今它出然作，原科也我能孩打吸自次：一目子明，數復以麼像在水象鄉在這創出覺實友你導……病站從？同觀這量先深分最投上水求子響眼增量家走、自行照排外成？一孩家營能上品！爭解在從是，電音講賽報我，了全市強市念？在越許會黨馬頭？洲工拉節通並布是父益庭就者進戲。速行
                      card's content.</p>
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                        收起
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 12rem;">
                  <img class="card-img-top" src="./file/teacherhead/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">謝老師</h5>
                    <p class="card-text">孩要作底去見德高員，生布立千結與是三了人我？確水最部了因樂能物，年發價：上下風，進神可！待全件天空；個告車的活活影新朋據作覺直角、公萬絕死，究讀過質夫性！有樓何部內的多建運全。發今它出然作，原科也我能孩打吸自次：一目子明，數復以麼像在水象鄉在這創出覺實友你導……病站從？同觀這量先深分最投上水求子響眼增量家走、自行照排外成？一孩家營能上品！爭解在從是，電音講賽報我，了全市強市念？在越許會黨馬頭？洲工拉節通並布是父益庭就者進戲。速行
                      card's content.</p>
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                        收起
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 12rem;">
                  <img class="card-img-top" src="./file/teacherhead/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">大熊老師</h5>
                    <p class="card-text">孩要作底去見德高員，生布立千結與是三了人我？確水最部了因樂能物，年發價：上下風，進神可！待全件天空；個告車的活活影新朋據作覺直角、公萬絕死，究讀過質夫性！有樓何部內的多建運全。發今它出然作，原科也我能孩打吸自次：一目子明，數復以麼像在水象鄉在這創出覺實友你導……病站從？同觀這量先深分最投上水求子響眼增量家走、自行照排外成？一孩家營能上品！爭解在從是，電音講賽報我，了全市強市念？在越許會黨馬頭？洲工拉節通並布是父益庭就者進戲。速行
                      card's content.</p>
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                        收起
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 12rem;">
                  <img class="card-img-top" src="./file/teacherhead/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">鬼塚老師</h5>
                    <p class="card-text">孩要作底去見德高員，生布立千結與是三了人我？確水最部了因樂能物，年發價：上下風，進神可！待全件天空；個告車的活活影新朋據作覺直角、公萬絕死，究讀過質夫性！有樓何部內的多建運全。發今它出然作，原科也我能孩打吸自次：一目子明，數復以麼像在水象鄉在這創出覺實友你導……病站從？同觀這量先深分最投上水求子響眼增量家走、自行照排外成？一孩家營能上品！爭解在從是，電音講賽報我，了全市強市念？在越許會黨馬頭？洲工拉節通並布是父益庭就者進戲。速行
                      card's content.</p>
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                        收起
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-heading">
              <h4 class="panel-title block">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" class="">
                  更多師資介紹
                </a>
              </h4>
            </div>
            <div id="collapsetwo" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="flexbox">
                  <div class="item">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="./file/teacherhead/6.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">反町老師</h5>
                        <p class="card-text">孩要作底去見德高員，生布立千結與是三了人我？確水最部了因樂能物，年發價：上下風，進神可！待全件天空；個告車的活活影新朋據作覺直角、公萬絕死，究讀過質夫性！有樓何部內的多建運全。發今它出然作，原科也我能孩打吸自次：一目子明，數復以麼像在水象鄉在這創出覺實友你導……病站從？同觀這量先深分最投上水求子響眼增量家走、自行照排外成？一孩家營能上品！爭解在從是，電音講賽報我，了全市強市念？在越許會黨馬頭？洲工拉節通並布是父益庭就者進戲。速行
                          card's content.</p>
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                            收起
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="./file/teacherhead/7.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the
                          card's content.</p>
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                            收起
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="./file/teacherhead/8.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the
                          card's content.</p>
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                            收起
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="./file/teacherhead/9.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the
                          card's content.</p>
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                            收起
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card" style="width: 12rem;">
                      <img class="card-img-top" src="./file/teacherhead/10.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the
                          card's content.</p>
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                            收起
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- </div> -->



    <!-- 公佈欄 -->

      <nav>
        <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active"  id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
            aria-controls="nav-home" aria-selected="true" style="color:rgb(204, 144, 61)">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select BB_SN from BulletinBoard where BB_Id = '1'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_SN'];
            ?>
            公告</a>

          <a class="nav-item nav-link" id="nav-class1-tab" data-toggle="tab" href="#nav-class1" role="tab"
            aria-controls="nav-class1" aria-selected="true" style="color:rgb(204, 144, 61)">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select BB_SN from BulletinBoard where BB_Id = '2'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_SN'];
            ?>
            公告</a>

          <a class="nav-item nav-link" id="nav-class2-tab" data-toggle="tab" href="#nav-class2" role="tab"
            aria-controls="nav-class2" aria-selected="false" style="color:rgb(204, 144, 61)">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select BB_SN from BulletinBoard where BB_Id = '3'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_SN'];
            ?>
            公告</a>

          <a class="nav-item nav-link" id="nav-class3-tab" data-toggle="tab" href="#nav-class3" role="tab"
            aria-controls="nav-class3" aria-selected="false" style="color:rgb(204, 144, 61)">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select BB_SN from BulletinBoard where BB_Id = '4'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_SN'];
            ?>
            公告</a>

            <a class="nav-item nav-link" id="nav-class4-tab" data-toggle="tab" href="#nav-class4" role="tab"
            aria-controls="nav-class4" aria-selected="false" style="color:rgb(204, 144, 61)">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select BB_SN from BulletinBoard where BB_Id = '5'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_SN'];
            ?>
            公告</a>
        </div>
      </nav>

    <div class="tab-content boardline" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '1'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T1'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '1'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T2'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '1'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T3'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '1'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T4'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '1'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T5'];
            ?>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-class1" role="tabpanel" aria-labelledby="nav-class1-tab">
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '2'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T1'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '2'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T2'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '2'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T3'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '2'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T4'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '2'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T5'];
            ?>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-class2" role="tabpanel" aria-labelledby="nav-class2-tab">
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '3'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T1'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '3'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T2'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '3'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T3'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '3'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T4'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '3'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T5'];
            ?>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-class3" role="tabpanel" aria-labelledby="nav-class3-tab">
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '4'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T1'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '4'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T2'];
            ?>!
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '4'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T3'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '4'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T4'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '4'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T5'];
            ?>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-class4" role="tabpanel" aria-labelledby="nav-class4-tab">
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '5'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T1'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '5'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T2'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '5'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T3'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '5'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T4'];
            ?>
        </div>
        <div class="date1">
            <?php include '../rebuild/SQL/board.php';?>
            <?php 
              $sql = "select * from BulletinBoard where BB_Id = '5'";
              $rows = mysqli_query($bd, $sql);
              $result = mysqli_fetch_assoc($rows);
              echo $result['BB_T5'];
            ?>
        </div>
      </div>
    </div>

    <!-- 成績單 -->
    <!-- <div style="background-color: red;">成績單</div> -->
    <!-- 聯絡我們 -->
    <form class="bg" id="contextus">
      <div class="block3">
        <img src="file/illustration/1.jpg" class="image1">
        <h2>聯絡我們</h2>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationDefault01"><img src="file/illustration/2.jpg" width=35px;> Name</label>
          <input type="text" class="form-control" id="validationDefault01" placeholder="ex.王小明" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault02"><img src="file/illustration/3.jpg" width=35px;> Phone Number</label>
          <input type="text" class="form-control" id="validationDefault02" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefaultUsername"><img src="file/illustration/4.jpg" width=35px;> Email Address</label>

          <input type="text" class="form-control" id="validationDefaultUsername" placeholder="ex.example@gmail.com"
            aria-describedby="inputGroupPrepend2" required>

        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><img src="file/illustration/5.jpg" width=35px;> Message For Us</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
          </div>
        </div>
      </div>
      <div class="row justify-content-around">
        <button class="btn btn-primary btn-sm btnsize" type="submit">Submit</button>
      </div>
    </form>
  </div>
  </div>

  <script src="./JS/jquery-3.3.1.min.js"></script>
  <script src="./resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
  <script src="./resource/WOW-master/dist/wow.min.js"></script>
  <script>
    wow = new WOW(
      {
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true
      }
    )
    wow.init();
  </script>
</body>

</html>