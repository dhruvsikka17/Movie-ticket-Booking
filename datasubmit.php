<?php
$con = mysqli_connect('localhost', 'root', 'dhruvroot','database');

// get the post records
$showname = $_POST['show'];
$showcity = $_POST['showcity'];
$showprice = $_POST['showprice'];
$showdate = $_POST['showdate'];
$showtime = $_POST['showtime'];
$showseats = $_POST['showseats'];

$sql = "INSERT INTO `showdata` (`showname`, `showcity`, `showprice`, `showdate`, `showtime`, `seats`) VALUES ('$showname', '$showcity', '$showprice', '$showdate', '$showtime','$showseats')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<!DOCTYPE html>
	<html lang='en' dir='ltr'>
	  <head>
	    <meta charset='utf-8'>
	    <link rel='preconnect' href='https://fonts.gstatic.com'>
	    <link href='https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap' rel='stylesheet'>
	    <style media='screen'>
	    body {
	      position: relative;
	      width: 1440px;
	      height: 740px;
	      background: #393E46;
	    }
	    .title{
	      position: absolute;
	      width: 500px;
	      height: 23px;
	      left: 460px;
	      top: 124px;
	      font-family: Quicksand;
	      font-style: normal;
	      font-weight: normal;
	      font-size: 36px;
	      line-height: 45px;
	      text-align: right;
	      text-decoration-line: underline;
	      color: #EEEEEE;
	    }

	    .imgmask{
	      position: absolute;
	      width: 140px;
	      height: 135px;
	      left: 1275px;
	      top: 332px;
	      border-radius: 117.5px;
	    }

	    .lights{
	      position: absolute;
	      width: 137px;
	      height: 135px;
	      left: 175px;
	      top: 56px;
	    }

	    .back_button{
	      position: absolute;
	      width: 80px;
	      height: 80px;
	      left: 27px;
	      top: 84px;
	    }

	    .backrec{
	      position: absolute;
	      width: 90px;
	      height: 90px;
	      left: 22px;
	      top: 79px;
	      background:#EEEEEE;
	    }

	    .rec1{
	      position: absolute;
	      width: 1510px;
	      height: 225px;
	      left: calc(50% - 1440px/2);
	      top: calc(50% - 225px/2 + 287.5px);
	      background: #FFD369;
	    }

	    .rec2{
	      position: absolute;
	      width: 1510px;
	      height: 150px;
	      left: calc(50% - 1440px/2);
	      top: calc(50% - 150px/2 + 325px);
	      background: #EEEEEE;
	    }

	    .rec3{
	      position: absolute;
	      width: 1510px;
	      height: 75px;
	      left: calc(50% - 1440px/2);
	      top: calc(50% - 75px/2 + 362.5px);
	      background: #222831;
	    }

			.btn1{
	      position: absolute;
	      width: 250px;
	      height: 35px;
	      left: 450px;
	      top: 300px;
	      border: none;
	      color: black;
	      padding: 15px 32px;
	      font-family: Quicksand;
	      font-style: normal;
	      font-weight: normal;
	      font-size: 24px;
	      line-height: 30px;
	      text-align: center;
	      background-color:#FFFFFF
	    }

	    .btn2{
	      position: absolute;
	      width: 250px;
	      height: 35px;
	      left: 790px;
	      top: 300px;
	      border: none;
	      color: black;
	      padding: 15px 32px;
	      font-family: Quicksand;
	      font-style: normal;
	      font-weight: normal;
	      font-size: 24px;
	      line-height: 30px;
	      text-align: center;
	      background-color:#FFFFFF
	    }
	    </style>
	    <title></title>
	  </head>
	  <body>
	    <p class='title'>SHOW DATA SUBMITTED</p>
	    <span>
	      <a class='btn1' href='data.html'>Add more records<a>
	      <a class='btn2' href='main.html'>Return to Home</a>
	    </span>
	    <img class='imgmask' src='theatre-mask.png'>
	    <div class='backrec'></div>
	    <a href='main.html'>
	      <img class='back_button' src='button.png'>
	    </a>
	    <img class='lights' src='spotlights.png'>
	    <div class='rec1'></div>
	    <div class='rec2'></div>
	    <div class='rec3'></div>

	  </body>
	</html>
	";
}
?>
