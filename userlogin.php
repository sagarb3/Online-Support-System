<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>userpage</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="styles/3_column.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html">Complaint Monitoring System</a></h1>
      <p style="font-size:8px;">Computer Centre,Banaras Hindu University</p>
    </div>
    <div class="fl_right">
      <p><a href="forgot.html">Reset Password</a> | <a href="logout1.php">LOGOUT</a> | <a href="#"><?php if(isset($_COOKIE["user"])) echo $_COOKIE["user"];else header("Refresh:0;url=index.html");?></a>
    </div>
    <div id="topnav">
      <ul>
             <li><a href="userlogin.php">Back</a></li>
              </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="container" class="clear">
    <iframe src="userc.php" height="600" width="100%" frameborder="0"></iframe>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="footbox">
      <h2>Contact Us</h2>
      <p>In case of any problems please contact Computer Centre ,BHU</p>
    </div>
    <div class="footbox">
      <h2>How To Find Us</h2>
      <address>
        Banaras Hindu University <br />
        Lanka<br />
        Varanasi<br />
        221005<br />
        <br />
        Email:mail.bhu.ac.in
      </address>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p align="justify" class="fl_left"><strong>Copyright &copy;Banaras Hindu University </strong></p>
    <p class="fl_right">&nbsp;</p>
  </div>
</div>
</body>
</html>