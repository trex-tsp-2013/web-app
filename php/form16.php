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
              <li class="active"><a href="#">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์ </a></li>
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
              <li><a href="#">คำขอล่าสุด</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>ใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ พพ.16</h2><br><br>

            <?
              // check post if it is null value
              if(isset($_POST['fname'])) 
                $fname = $_POST['fname'];
              else 
                $fname = '';
              if(isset($_POST['fbd'])) 
                $fbd = $_POST['fbd'];
              else 
                $fbd = '';
              if(isset($_POST['fnation'])) 
                $fnation = $_POST['fnation'];
              else 
                $fnation = '';
              if(isset($_POST['fpassport'])) 
                $fpassport = $_POST['fpassport'];
              else 
                $fpassport = '';
              if(isset($_POST['fissue'])) 
                $fissue = $_POST['fissue'];
              else 
                $fissue = '';
              if(isset($_POST['faddress'])) 
                $faddress = $_POST['faddress'];
              else 
                $faddress = '';
              if(isset($_POST['fstreet'])) 
                $fstreet = $_POST['fstreet'];
              else 
                $fstreet = '';
              if(isset($_POST['fprovince'])) 
                $fprovince = $_POST['fprovince'];
              else 
                $fprovince = '';
              if(isset($_POST['fzipcode'])) 
                $fzipcode = $_POST['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($_POST['ftel'])) 
                $ftel = $_POST['ftel'];
              else 
                $ftel = '';
              if(isset($_POST['fphone'])) 
                $fphone = $_POST['fphone'];
              else 
                $fphone = '';
              if(isset($_POST['ffax'])) 
                $ffax = $_POST['ffax'];
              else 
                $ffax = '';
              if(isset($_POST['fmail'])) 
                $fmail = $_POST['fmail'];
              else 
                $fmail = '';
              if(isset($_POST['fname2'])) 
                $fname2 = $_POST['fname2'];
              else 
                $fname2 = '';
              if(isset($_POST['fowner'])) 
                $fowner = $_POST['fowner'];
              else 
                $fowner = '';
              if(isset($_POST['faddress2'])) 
                $faddress2 = $_POST['faddress2'];
              else 
                $faddress2 = '';
              if(isset($_POST['fstreet2'])) 
                $fstreet2 = $_POST['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($_POST['fprovince2'])) 
                $fprovince2 = $_POST['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($_POST['fzipcode2'])) 
                $fzipcode2 = $_POST['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($_POST['ftel2'])) 
                $ftel2 = $_POST['ftel2'];
              else 
                $ftel2 = '';
              if(isset($_POST['fphone2'])) 
                $fphone2 = $_POST['fphone2'];
              else 
                $fphone2 = '';
              if(isset($_POST['ffax2'])) 
                $ffax2 = $_POST['ffax2'];
              else 
                $ffax2 = '';
              if(isset($_POST['flocation'])) 
                $flocation = $_POST['flocation'];
              else 
                $flocation = '';
              if(isset($_POST['faddress3'])) 
                $faddress3 = $_POST['faddress3'];
              else 
                $faddress3 = '';
              if(isset($_POST['fstreet3'])) 
                $fstreet3 = $_POST['fstreet3'];
              else 
                $fstreet3 = '';
              if(isset($_POST['fprovince3'])) 
                $fprovince3 = $_POST['fprovince3'];
              else 
                $fprovince3 = '';
              if(isset($_POST['fzipcode3'])) 
                $fzipcode3 = $_POST['fzipcode3'];
              else 
                $fzipcode3 = '';
              if(isset($_POST['ftel3'])) 
                $ftel3 = $_POST['ftel3'];
              else 
                $ftel3 = '';
              if(isset($_POST['fphone3'])) 
                $fphone3 = $_POST['fphone3'];
              else 
                $fphone3 = '';
              if(isset($_POST['ffax3'])) 
                $ffax3 = $_POST['ffax3'];
              else 
                $ffax3 = '';
              if(isset($_POST['plantname'])) 
                $plantname = $_POST['plantname'];
              else 
                $plantname = '';
              if(isset($_POST['sname'])) 
                $sname = $_POST['sname'];
              else 
                $sname = '';
              if(isset($_POST['numberbreed'])) 
                $numberbreed = $_POST['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($_POST['numbercom'])) 
                $numbercom = $_POST['numbercom'];
              else 
                $numbercom = '';
              if(isset($_POST['source'])) 
                $source = $_POST['source'];
              else 
                $source = '';
              if(isset($_POST['ab'])) 
                $ab = $_POST['ab'];
              else 
                $ab = '';
              if(isset($_POST['fdates'])) 
                $fdates = $_POST['fdates'];
              else 
                $fdates = '';
              if(isset($_POST['fdatee'])) 
                $fdatee = $_POST['fdatee'];
              else 
                $fdatee = '';
              // if(isset($_POST['comment'])) 
              //   $comment = $_POST['comment'];
              // else 
              //   $comment = '';
              ?>
            <h3><b>เลขที่คำขอ: </b><span style="color:blue"><?echo $_POST["_POST_Id"];?></span></h3><br>
            <b>ข้าพเจ้า: </b><span style="color:blue"><?echo $_POST["fname"];?></span><br>
            <b>วันเดือนปีเกิด: </b><span style="color:blue"><?echo $_POST["fbd"];?></span><br>
            <b>สัญชาติ: </b><span style="color:blue"><?echo $_POST["fnation"];?></span><br>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b>
            <span style="color:blue"><?echo $_POST["fpassport"];?></span><br>
            <b>ออกให้ ณ: </b><span style="color:blue"><?echo $_POST["fissue"];?></span><br>

            <b>ที่อยู่: </b><span style="color:blue"><?echo $_POST["faddress"];?></span><br>

            <b>ถนน: </b><span style="color:blue"><?echo $_POST["fstreet"];?></span><br>

            <b>จังหวัด: </b><span style="color:blue"><?echo $_POST["fprovince"];?></span><br>

            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $_POST["fzipcode"];?></span><br>

            <b>โทรศัพท์: </b><span style="color:blue"><?echo $_POST["ftel"];?></span><br>
            
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $_POST["fphone"];?></span><br>

            <b>โทรสาร: </b><span style="color:blue"><?echo $_POST["ffax"];?></span><br>

            <b>อีเลคทรอนิคเมล์ Email: </b><span style="color:blue"><?echo $_POST["fmail"];?></span><br>

            <br>
            <b>มีความประสงค์จะขอขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</b>
            <br>
            <br>
            <? $fname2 = $_POST['fname2']; ?>
            <b>ในนามของ(กรณีเป็นนิติบุคคล): </b><span style="color:blue"><?echo $_POST["fname2"];?></span><br>

            <? $fowner = $_POST['fowner']; ?>
            <b>โดยมี: </b><span style="color:blue"><?echo $_POST["fowner"];?></span><br>

            <? $faddress2 = $_POST['faddress2']; ?>
            <b>ที่อยู่: </b><span style="color:blue"><?echo $_POST["faddress2"];?></span><br>

            <? $fstreet2 = $_POST['fstreet2']; ?>
            <b>ถนน: </b><span style="color:blue"><?echo $_POST["fstreet2"];?></span><br>

            <? $fprovince2 = $_POST['fprovince2']; ?>
            <b>จังหวัด: </b><span style="color:blue"><?echo $_POST["fprovince2"];?></span><br>

            <? $fzipcode2 = $_POST['fzipcode2']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $_POST["fzipcode2"];?></span><br>

            <? $ftel2 = $_POST['ftel2']; ?>
            <b>โทรศัพท์: </b><span style="color:blue"><?echo $_POST["ftel2"];?></span><br>

            <? $fphone2 = $_POST['fphone2']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $_POST["fphone2"];?></span><br>

            <? $ffax2 = $_POST['ffax2']; ?>
            <b>โทรสาร: </b><span style="color:blue"><?echo $_POST["ffax2"];?></span><br>

            <br>
            
            <? $flocation = $_POST['flocation']; ?>
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><span style="color:blue"><?echo $_POST["flocation"];?></span><br>

            <br>

            <? $faddress3 = $_POST['faddress3']; ?>
            <b>ที่อยู่: </b><span style="color:blue"><?echo $_POST["faddress3"];?></span><br>

            <? $fstreet3 = $_POST['fstreet3']; ?>
            <b>ถนน: </b><span style="color:blue"><?echo $_POST["fstreet3"];?></span><br>

            <? $fprovince3 = $_POST['fprovince3']; ?>
            <b>จังหวัด: </b><span style="color:blue"><?echo $_POST["fprovince3"];?></span><br>

            <? $fzipcode3 = $_POST['fzipcode3']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $_POST["fzipcode3"];?></span><br>

            
            <? $ftel3 = $_POST['ftel3']; ?>
            <b>โทรศัพท์: </b><span style="color:blue"><?echo $_POST["ftel3"];?></span><br>

            <? $fphone3 = $_POST['fphone3']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $_POST["fphone3"];?></span><br>

            <? $ffax3 = $_POST['ffax3']; ?>
            <b>โทรสาร: </b><span style="color:blue"><?echo $_POST["ffax3"];?></span><br>

            <br>
            <br>

            <? $plantname = $_POST['plantname']; ?>
            <b>ชื่อพืช: </b><span style="color:blue"><?echo $_POST["plantname"];?></span><br>

            <? $sname = $_POST['sname']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:blue"><?echo $_POST["sname"];?></span><br>

            <? $numberbreed = $_POST['numberbreed']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:blue"><?echo $_POST["numberbreed"];?></span><br>

            <? $numbercom = $_POST['numbercom']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:blue"><?echo $_POST["numbercom"];?></span><br>

            <? $source = $_POST['source']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:blue"><?echo $_POST["source"];?></span><br>

            <? $ab = $_POST['ab']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:blue"><?echo $_POST["ab"];?></span><br>

            <br>
            <br>
            <? $fdates = $_POST['fdates']; ?>
            <b>ใบสำคัญฉบับนี้ออกให้เมื่อวันที่: </b><span style="color:blue"><?echo $_POST["fdates"];?></span><br>
            <? $fdatee = $_POST['fdatee']; ?>
            <b>โดยให้ใช้ถึงวันที่: </b><span style="color:blue"><?echo $_POST["fdatee"];?></span><br>
            <b>และให้ใช้ได้เฉพาะสถานที่ซึ่งระบุไว้ในใบสำคัญนี้เท่านั้น</b>


            <br>
            <br>
            <br>
            <!-- <b>รูปภาพสถานประกอบการ: </b> <input type="file" name="file" id="file"><br>
            <b>รูปภาพพันธุ์พืชอนุรักษ์: </b> <input type="file" name="file2" id="file">
            <br>
            <br>
            <br> -->
            <!-- <b>หมายเหตุ</b>
            <br>
            <br>
            <?php echo form_open("officers/view/update");?>
            <textarea rows="5" name="comment"><?php echo $_POST['comment']; ?></textarea>
            <br>
            <br> -->
            <button type="cancel" class="btn btn-large">Go Back</button>
          </div>
          
      </div><!--/row-->
    </div>
      <hr>
            <!-- <form action="" method="post">
            <b>ใบสำคัญฉบับนี้ออกให้แก่: </b><input class="input-xlarge" type="text" name="fname"><br>
            <b>ในนามของ/ซึ่งมี: </b><input type="text" name="fbd"><B>เป็นผู้ดำเนินการ</B><br>
            
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" name="faddress"><br>
            <b>ถนน: </b><input type="text" name="fstreet"><br>
            <b>หมู่ที่: </b><input type="text" name="fmoo"><br>
            <b>ตำบล/แขวง: </b><input type="text" name="ftumbon"><br>
            <b>อำเภอ/เขต: </b><input type="text" name="famphur"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince"><br>
            <br>
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><input class="input-xlarge" type="text" name="fname2"><br>
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" Name="faddress2"><br>
            <b>ถนน: </b><input type="text" name="fstreet2"><br>
            <b>หมู่ที่: </b><input type="text" name="fmoo2"><br>
            <b>ตำบล/แขวง: </b><input type="text" name="ftumbon2"><br>
            <b>อำเภอ: </b><input type="text" name="famphur2"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince2"><br>
            <br>
            <b>ออกเมื่อวันที่่: </b><input type="text" name="fstart"><br>
            <b>พ.ศ.: </b><input type="text" name="fyear1"><br>
            <b>ใช้ได้จนถึงวันที่: </b><input type="text" name="fend"><br>
            <b>พ.ศ.: </b><input type="text" name="fyear2"><br>
            <br>

            <B>บัญชีพืชอนุรักษ์แนบท้ายใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</B><br>
            <b>ดาวน์โหลดเอกสาร: </b> <button type="cancel" class="btn btn-small">Download</button><br>
            <b>ส่งใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์: </b> <input type="file" name="file" id="file"><br>
            <br>
            <button type="submit" class="btn btn-large btn-primary">Submit</button>
            <button type="cancel" class="btn btn-large">Cancel</button>
            </form> -->
          </div>
          
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