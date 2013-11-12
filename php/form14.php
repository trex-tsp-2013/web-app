<html lang="en"><head>
    <meta charset="utf-8">
    <title>TREX Corp.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
   <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<? echo base_url() ?>">TREX Corp.</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link"><?echo $username;?></a>
              <!-- <button onclick="location.href='http://localhost/trex_cites/index.php/auth/logout'" class="btn btn-small btn-danger">Sign Out</button> -->
              <button onclick="location.href='<? echo site_url("auth/logout")?>'" class="btn btn-small btn-danger">Sign Out</button>
            </p>

            <ul class="nav">
              <li><a href="<? echo base_url() ?>">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h2>Form & Request</h2></li>
              <li class="active"><a href="#">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li><a href="#">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h2>Form Status</h2></li>
              <li><a href="<? echo site_url("pages/status") ?>">คำขอล่าสุด</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">




            <?
              // check post if it is null value
              if(isset($_POST['fname'])) 
                $fname = $_POST['fname'];
              else 
                $fname = '';
              if(isset($_POST['faddress'])) 
                $faddress = $_POST['faddress'];
              else 
                $faddress = '';
              if(isset($_POST['fcountry'])) 
                $fcountry = $_POST['fcountry'];
              else 
                $ffcountry = '';
              if(isset($_POST['fname2'])) 
                $fname2 = $_POST['fname2'];
              else 
                $fname2 = '';
              if(isset($_POST['faddress2'])) 
                $faddress2 = $_POST['faddress2'];
              else 
                $faddress2 = '';
              if(isset($_POST['fcountry2'])) 
                $fcountry2 = $_POST['fcountry2'];
              else 
                $fcountry2= '';

              if(isset($_POST['fcon'])) 
                $fcon = $_POST['fcon'];
              else 
                $fcon = '';
              if(isset($_POST['ftran'])) 
                $ftran = $_POST['ftran'];
              else 
                $ftran = '';
              if(isset($_POST['fau'])) 
                $fau = $_POST['fau'];
              else 
                $fau = '';
              
              // if(isset($form15['comment'])) 
              //   $comment = $form15['comment'];
              // else 
              //   $comment = '';
              ?>


            <h2>แบบ พ.พ.14</h2><br><br>
            <form action="" method="post">
            <p>
              <label>
                <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" >
                IMPORT PERMIT</label>
              <br>
              <label>
                <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1">
                EXPORT PERMIT</label>
              <br>
              <label>
                <input type="radio" name="RadioGroup1" value="3" id="RadioGroup1_2">
                RE-EXPORT PERMIT</label>
              <br>
              <label>
                <input type="radio" name="RadioGroup1" value="4" id="RadioGroup1_3">
                OTHER CERTIFICATE</label>
            </p>
            <hr>
            <h2><em>Consignee Information            </em></h2>
            <p><b>Name: </b>
              <input class="input-xlarge" type="text" name="fname" value="<?echo $fname;?>">
              <b>Address: </b>
              <input class="input-xxlarge" type="text" name="faddress" value="<?echo $faddress;?>"><br>

              <b>Country: </b>
              <input type="text" name="fcountry" value="<?echo $fcountry;?>">
              
            </p>
            <hr>
            <h2><em>Permittee Information</em></h2>
            <p><b>Name: </b>
              <input class="input-xlarge" type="text" name="fname2" value="<?echo $fname2;?>">
              <br>
              <b>Address: </b> 
              <input class="input-xxlarge" type="text" name="faddress2" value="<?echo $faddress2;?>">
              <br>
              <b>Country: </b>
              <input type="text" name="fcountry2" value="<?echo $fcountry2;?>">
            </p>
            <hr>
            <br>
            <b>Special conditions: </b>
            <input class="input-xxlarge" type="text" name="fcon" value="<?echo $fcon;?>">
            <br>
            <b>Purpose of the transaction: </b>
            <input class="input-xxlarge" type="text" name="ftran" value="<?echo $ftran;?>">
            <br>
            <b>Management Authority: </b>
            <input class="input-xxlarge" type="text" name="fau" value="<?echo $fau;?>">
            * according to database 7-12 is to be discuss later hot to implement<br>
            ** Note that according to the standard form number 13+14 should be fill by the officer<br>
            <br>

             <table>
            <tr>
              <td>
            <button type="submit" class="btn btn-large btn-primary" >Submit</button>
            <?php echo form_close(); ?>
              </td>
              <td>
            <?php echo form_open("pages");?><br>
            <button type="cancel" class="btn btn-large">Cancel</button>
            <?php echo form_close(); ?>
              </td>
            </tr>
            <table>


          
      </div><!--/row-->
    </div>
      <hr>

      <footer>
        <p>© TREX Corp. 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  

</body></html>