<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>WEBCAMP || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Test Your Skill</span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>webcamp</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
		<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li></ul>
            <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter tag ">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<?php
echo '<h3>Question  1 ::
A multimedia file 
<br/>
a)  is same as any other regular file
<br/>
b) must be accessed at specific rate
<br/>
c) stored on remote server can not be delivered to its client
<br/>
d) none of the mentioned
<h3/>
<br/>
<h4><b>Answer</b> b) must be accessed at specific rate</h4>
<br/>
<h3>Question  2 ::
In which type of streaming multimedia file is delivered to the client, but not shared?
<br/>
a) real-time streaming
<br/>
b) progressive download
<br/>
c) compression
<br/>
d) none of the mentioned
<br/>
<h3/>
<br/>
<h4><b>Answer</b> a) real-time streaming</h4>
<br/>
<h3>Question  3 ::
Which one of the following is the characteristic of a multimedia system?
<br/>
a) high storage
<br/>
b) high data rates
<br/>
c) both high storage and high data rates
<br/>
d) none of the mentioned
<br/>
<h3/>
<br/>
<h4><b>Answer</b> c) both high storage and high data rates</h4>
<br/>
<h3>Question  4 ::
The delay that occur during the playback of a stream is called
<br/>
a) stream delay
<br/>
b) Playback delay
<br/>
c) Jitter
<br/>
d) event delay
<br/>
<h3/>
<br/>
<h4><b>Answer</b> c) Jitter</h4>
<br/>
<h3>Question  5 ::
Real time streaming protocol is used
<br/>
a) to control streaming media servers
<br/>
b)  for establishing and controlling media sessions between endpoints
<br/>
c) to provide real time control of playback of media files from the server
<br/>
d) all of the mentioned
<br/>
<h3/>
<br/>
<h4><b>Answer</b> d) all of the mentioned </h4>
<br/>
<br/>
';


echo'<br /><button type="submit" <button class="btn btn-primary" onclick=location.href="account.php?q=1s">Attempt More Quizes</button> &nbsp;</button><hr/>';

?>



<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<!--<a href="" target="_blank">About us</a>-->
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
      <p>
  <div class="row">
  <div class="col-md-4">
   <img src="image/dev.jpg" width=100 height=100 alt="Jasmeet Singh" class="img-rounded">
   </div>
   <div class="col-md-5">
  <a href="https://www.facebook.com/jsmitsng143" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Jasmeet Singh</a>
  <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+918826186100</h4>
  <h4 style="font-family:'typo' ">jsmitsng143@gmail.com</h4>
  <h4 style="font-family:'typo' ">Vivekananda Institute of Professional Studies</h4></div></div>
  </p>
    </div>
    <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/dev2.jpg" width=100 height=100 alt="Girik Dewan" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Girik Dewan</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+919953015203</h4>
		<h4 style="font-family:'typo' ">girik015@gmail.com</h4>
		<h4 style="font-family:'typo' ">Vivekananda Institute of Professional Studies</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>