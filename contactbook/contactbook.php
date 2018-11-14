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

  <title>聯絡簿</title>

  <link rel="stylesheet" href="../CSS/contactbook.css">
<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">



  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

  <link rel="stylesheet" href="../CSS/style123.css">



</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand mb-0 h1" href="#">
      <img src="../IMAGES/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
              // echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
              // echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
            } elseif ($UA_PL == '1') {
              echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
              // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              // echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
              // echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
            } else {
              echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
              // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              // echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
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

  <div class="container">
    <div id="accordion" style="position: relative;top: 60px;">
      <div class="">
        <div class="card-header" id="headingOne" style="border-bottom:1px white;">
          <h5 class="mb-0">
            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              今日作業 & 明日準備
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <div class="flexbox">
              <div class="item">
                <div class="data1">
                  <h2>今日作業</h2>
                  <?php include 'contactbookselect.php';?>
                  <?php
                  
                      echo $result['CB_CIT'];
                  
                  ?>
                </div>
              </div>
              <div class="item">
                <div class="data1">
                  <h2>明日準備</h2>
                  <?php include 'contactbookselect.php';?>
                  <?php
                  
                      echo $result['CB_SIT'];
                  
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="card-header" id="headingTwo" style="border-bottom:1px white;">
          <h5 class="mb-0">
            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              親師交流
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <div class="flexbox">
              <div class="item">
                <section class="avenue-messenger">
                  <div class="menu">
                    <div class="items"><span>
                        <a href="#" title="Minimize">&mdash;</a><br>
                        <a href="#" title="End Chat">&#10005;</a>

                      </span></div>
                  </div>
                  <div class="agent-face">
                    <div class="half">
                      <!-- <img class="agent circle" src="" alt="Jesse Tino" style="position: relative;top: 250px;left: 15px;"> -->
                      <!-- <div class="agent circle" style="position: relative;top: 232px;left: 150px;"></div> -->
                    </div>
                  </div>
                  <div class="chat">
                    <div class="chat-title">
                      <h1>Jesse Tino</h1>
                    </div>
                    <div class="messages" style="height: 300px;">
                      <div class="messages-content"></div>
                    </div>
                    <div class="message-box">
                      <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
                      <button type="submit" class="message-submit">Send</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="card-header" id="headingThree" style="border-bottom:1px white;">
          <h5 class="mb-0">
            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              檔案傳輸
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <div class="form-group">
              <!-- <label for="UA_Avatar">Head shot</label> -->
              <label class="btn btn-info btn-block" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
              <input id="UA_Avatar" style="display:none;" type="file" name="UA_Avatar">
              Choice File
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>
  <script src="../JS/index123.js"></script>
  <script src="../JS/jquery-3.3.1.min.js"></script>
  <script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
  <script src="../resource/WOW-master/dist/wow.min.js"></script>

</body>

</html>