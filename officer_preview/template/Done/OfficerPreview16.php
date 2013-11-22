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
      textarea{
          width:50%;
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
              <li class="active"><a href="<? echo site_url("pages/trans1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans4") ?>">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans5") ?>">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans6") ?>">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
        </div>
        <div class="span9">
          <div class="well">
            <h2>ใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ พพ.16</h2><br><br>


              <?
              // check post if it is null value
              if(isset($form16['fname'])) 
                $fname = $form16['fname'];
              else 
                $fname = '';
              if(isset($form16['fbd'])) 
                $fbd = $form16['fbd'];
              else 
                $fbd = '';
              if(isset($form16['fnation'])) 
                $fnation = $form16['fnation'];
              else 
                $fnation = '';
              if(isset($form16['fpassport'])) 
                $fpassport = $form16['fpassport'];
              else 
                $fpassport = '';
              if(isset($form16['fissue'])) 
                $fissue = $form16['fissue'];
              else 
                $fissue = '';
              if(isset($form16['faddress'])) 
                $faddress = $form16['faddress'];
              else 
                $faddress = '';
              if(isset($form16['fstreet'])) 
                $fstreet = $form16['fstreet'];
              else 
                $fstreet = '';
              if(isset($form16['fprovince'])) 
                $fprovince = $form16['fprovince'];
              else 
                $fprovince = '';
              if(isset($form16['fzipcode'])) 
                $fzipcode = $form16['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($form16['ftel'])) 
                $ftel = $form16['ftel'];
              else 
                $ftel = '';
              if(isset($form16['fphone'])) 
                $fphone = $form16['fphone'];
              else 
                $fphone = '';
              if(isset($form16['ffax'])) 
                $ffax = $form16['ffax'];
              else 
                $ffax = '';
              if(isset($form16['fmail'])) 
                $fmail = $form16['fmail'];
              else 
                $fmail = '';
              if(isset($form16['fname2'])) 
                $fname2 = $form16['fname2'];
              else 
                $fname2 = '';
              if(isset($form16['fowner'])) 
                $fowner = $form16['fowner'];
              else 
                $fowner = '';
              if(isset($form16['faddress2'])) 
                $faddress2 = $form16['faddress2'];
              else 
                $faddress2 = '';
              if(isset($form16['fstreet2'])) 
                $fstreet2 = $form16['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($form16['fprovince2'])) 
                $fprovince2 = $form16['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($form16['fzipcode2'])) 
                $fzipcode2 = $form16['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($form16['ftel2'])) 
                $ftel2 = $form16['ftel2'];
              else 
                $ftel2 = '';
              if(isset($form16['fphone2'])) 
                $fphone2 = $form16['fphone2'];
              else 
                $fphone2 = '';
              if(isset($form16['ffax2'])) 
                $ffax2 = $form16['ffax2'];
              else 
                $ffax2 = '';
              if(isset($form16['flocation'])) 
                $flocation = $form16['flocation'];
              else 
                $flocation = '';
              if(isset($form16['faddress3'])) 
                $faddress3 = $form16['faddress3'];
              else 
                $faddress3 = '';
              if(isset($form16['fstreet3'])) 
                $fstreet3 = $form16['fstreet3'];
              else 
                $fstreet3 = '';
              if(isset($form16['fprovince3'])) 
                $fprovince3 = $form16['fprovince3'];
              else 
                $fprovince3 = '';
              if(isset($form16['fzipcode3'])) 
                $fzipcode3 = $form16['fzipcode3'];
              else 
                $fzipcode3 = '';
              if(isset($form16['ftel3'])) 
                $ftel3 = $form16['ftel3'];
              else 
                $ftel3 = '';
              if(isset($form16['fphone3'])) 
                $fphone3 = $form16['fphone3'];
              else 
                $fphone3 = '';
              if(isset($form16['ffax3'])) 
                $ffax3 = $form16['ffax3'];
              else 
                $ffax3 = '';
              if(isset($form16['plantname'])) 
                $plantname = $form16['plantname'];
              else 
                $plantname = '';
              if(isset($form16['sname'])) 
                $sname = $form16['sname'];
              else 
                $sname = '';
              if(isset($form16['numberbreed'])) 
                $numberbreed = $form16['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($form16['numbercom'])) 
                $numbercom = $form16['numbercom'];
              else 
                $numbercom = '';
              if(isset($form16['source'])) 
                $source = $form16['source'];
              else 
                $source = '';
              if(isset($form16['ab'])) 
                $ab = $form16['ab'];
              else 
                $ab = '';
              if(isset($form16['fdates'])) 
                $ab = $form16['fdates'];
              else 
                $ab = '';
              if(isset($form16['fdatee'])) 
                $ab = $form16['fdatee'];
              else 
                $ab = '';
              // if(isset($form16['comment'])) 
              //   $comment = $form16['comment'];
              // else 
              //   $comment = '';
              ?>

               <h3><b>เลขที่คำขอ: </b><span style="color:blue"><?echo $form16["req_Id"];?></span></h3><br>
            <b>ข้าพเจ้า: </b><span style="color:blue"><?echo $form16["fname"];?></span><br>
            <b>วันเดือนปีเกิด: </b><span style="color:blue"><?echo $form16["fbd"];?></span><br>
            <b>สัญชาติ: </b><span style="color:blue"><?echo $form16["fnation"];?></span><br>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b>
            <span style="color:blue"><?echo $form16["fpassport"];?></span><br>
            <b>ออกให้ ณ: </b><span style="color:blue"><?echo $form16["fissue"];?></span><br>

            <b>ที่อยู่: </b><span style="color:blue"><?echo $form16["faddress"];?></span><br>

            <b>ถนน: </b><span style="color:blue"><?echo $form16["fstreet"];?></span><br>

            <b>จังหวัด: </b><span style="color:blue"><?echo $form16["fprovince"];?></span><br>

            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form16["fzipcode"];?></span><br>

            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form16["ftel"];?></span><br>
            
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form16["fphone"];?></span><br>

            <b>โทรสาร: </b><span style="color:blue"><?echo $form16["ffax"];?></span><br>

            <b>อีเลคทรอนิคเมล์ Email: </b><span style="color:blue"><?echo $form16["fmail"];?></span><br>

            <br>
            <b>มีความประสงค์จะขอขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</b>
            <br>
            <br>
            <b>ในนามของ(กรณีเป็นนิติบุคคล): </b><span style="color:blue"><?echo $form16["fname2"];?></span><br>

            <b>โดยมี: </b><span style="color:blue"><?echo $form16["fowner"];?></span><br>

            <b>ที่อยู่: </b><span style="color:blue"><?echo $form16["faddress2"];?></span><br>

            <b>ถนน: </b><span style="color:blue"><?echo $form16["fstreet2"];?></span><br>

            <b>จังหวัด: </b><span style="color:blue"><?echo $form16["fprovince2"];?></span><br>

            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form16["fzipcode2"];?></span><br>

            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form16["ftel2"];?></span><br>

            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form16["fphone2"];?></span><br>

            <b>โทรสาร: </b><span style="color:blue"><?echo $form16["ffax2"];?></span><br>

            <br>
            
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><span style="color:blue"><?echo $form16["flocation"];?></span><br>

            <br>

            <b>ที่อยู่: </b><span style="color:blue"><?echo $form16["faddress3"];?></span><br>

            <b>ถนน: </b><span style="color:blue"><?echo $form16["fstreet3"];?></span><br>

            <b>จังหวัด: </b><span style="color:blue"><?echo $form16["fprovince3"];?></span><br>

            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form16["fzipcode3"];?></span><br>

            
            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form16["ftel3"];?></span><br>

            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form16["fphone3"];?></span><br>

            <b>โทรสาร: </b><span style="color:blue"><?echo $form16["ffax3"];?></span><br>

            <br>
            <br>

            <b>ชื่อพืช: </b><span style="color:blue"><?echo $form16["plantname"];?></span><br>

            <b>ชื่อวิทยาศาสตร์: </b><span style="color:blue"><?echo $form16["sname"];?></span><br>

            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:blue"><?echo $form16["numberbreed"];?></span><br>

            <b>จำนวนเพื่อการค้า: </b><span style="color:blue"><?echo $form16["numbercom"];?></span><br>

            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:blue"><?echo $form16["source"];?></span><br>

            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:blue"><?echo $form16["ab"];?></span><br>

            <br>
            <br>
            <b>ใบสำคัญฉบับนี้ออกให้เมื่อวันที่: </b><span style="color:blue"><?echo $form16["fdates"];?></span><br>
            <b>โดยให้ใช้ถึงวันที่: </b><span style="color:blue"><?echo $form16["fdatee"];?></span><br>
            <b>และให้ใช้ได้เฉพาะสถานที่ซึ่งระบุไว้ในใบสำคัญนี้เท่านั้น</b>


            <br>
            <br>
            <br>

             <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($form16['status']!='Verified'){?>
            <?php echo form_open("form16/update11");?>
            <textarea rows="5" name="comment"><?php echo $form13['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="form16_Id" value="<?echo $form13["form16_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/status/11"); ?>" class="btn btn-large " >Go Back</a>
          </td>
          </tr>
          </table>
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