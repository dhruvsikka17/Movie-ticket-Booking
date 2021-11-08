<?php
$user = 'root';
$password = 'dhruvroot';
$database = 'database';
$servername='localhost';
$mysqli = new mysqli($servername, $user,$password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
$sql = "SELECT * FROM showdata WHERE date(showdate)>=curdate() ORDER BY showdate ";
$result = $mysqli->query($sql);
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <style>
    body {
      position: relative;
      width: 1440px;
      height: 740px;
      background: #393E46;
    }
    .title{
      position: absolute;
      width: 513px;
      height: 23px;
      left: 380px;
      top: 90px;
      font-family: Quicksand;
      font-style: normal;
      font-weight: normal;
      font-size: 36px;
      line-height: 45px;
      text-align: right;
      color: #EEEEEE;
    }

    #myInput{
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 55.8%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
        font-family: Quicksand;
        font-weight: bold;
        position: absolute;
        top: 200px;
        left: 330px;
    }

    #tab{
      font-family: Quicksand;
      border-collapse: collapse;
      width: 60%;
      text-align: center;
      position: absolute;
      top: 250px;
      left: 330px;
    }

    td {
      border-bottom: 1px solid #FFD369;
      padding: 5px;
      color: white;
    }
    th{
      padding: 8px;
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      color: white;
      text-align: center;
    }

    tr:hover {
      background-color: #555a63;
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

    .modal {
      display: none;
      position: fixed;
      z-index: 8;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.6);
    }

    .modal-content {
      margin: 100px auto;
      width: 70%;
      font-family: Quicksand;
      color: white;
    }

    form {
      padding: 25px;
      margin: 25px;
      background: #393E46;
    }

    .contact-form button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9;
      font-size: 16px;
      font-weight: 400;
      color: #fff;
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close:hover,.close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    input{
      width: 80%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid black;
      outline: none;
      font-family: Quicksand;
      font-weight: bold;
    }

    .button {
      background: none;
      border-top: none;
      outline: none;
      border-right: none;
      border-left: none;
      border-bottom: #02274a 1px solid;
      padding: 0 0 3px 0;
      font-size: 16px;
      cursor: pointer;
    }
    .button:hover {
      border-bottom: #a99567 1px solid;
      color: #a99567;
    }
    </style>
    <title></title>
  </head>
  <body>
    <p class="title">LIST OF SHOWS</p>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter Your City..." >

    <section>
            <table id="tab">
                <tr>
                    <th>CITY</th>
                    <th>SHOW</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>PRICE</th>
                    <th>SEATS</th>
                </tr>

                <?php
                    while($rows=$result->fetch_assoc())
                    {
                 ?>

                <tr>
                    <td><?php echo $rows['showcity'] ;?></td>
                    <td><?php echo $rows['showname'];?></td>
                    <td><?php echo $rows['showdate'];?></td>
                    <td><?php echo $rows['showtime'];?></td>
                    <td><?php echo $rows['showprice'];?></td>
                    <td><?php echo $rows['seats'];?></td>
                    <td><button class="button" onclick="document.location='seatsbooked.html'" style="font-weight: bold;font-size: 15px;font-family: Quicksand;background-color: white;padding: 2px 12px;  text-align: center;  text-decoration: none; display: inline-block;">BOOK SEATS!</button></td>
                </tr>

                <?php
                    }
                 ?>
            </table>
        </section>

    <img class="imgmask" src="theatre-mask.png">
    <div class="backrec"></div>
    <a href="main.html">
      <img class="back_button" src="button.png">
    </a>
    <img class="lights" src="spotlights.png">

    <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("tab");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

  </body>
</html>
