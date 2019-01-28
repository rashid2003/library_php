<?php
include 'inc.php';

if (isset( $_GET['book_id'] )) {
$book_ID = $_GET['book_id'];
}else{
  $book_ID= "1";
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Library</title>
<link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" >
<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css"  crossorigin="anonymous">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color : lightblue;font-family: 'Markazi Text', serif;" >
<!--
########################################################
                        HEADER
########################################################
-->
<nav class="navbar navbar-default" >
  <div class="container-fluid bg-info">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" ><i class="fa fa-book" ></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" style="font-family: 'Reem Kufi', sans-serif;"><a>مکتبه عبید <span class="sr-only">(current)</span></a></li>

      <div style="display : inline-block; float : right; ">
        <div style="float : right;">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown btn-success">
            <span style="display : inline-block; color : white;" class="caret"></span><a href="#" style="display : inline-block; color: white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color : white;">ترتیب علی حسب </a>
            <ul class="dropdown-menu" style="text-align : center;" >
              <li><a href="#">التاریخ </a></li>
              <li><a href="#">فتح اکثر</a></li>
              <li><a href="#">الحروف</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">عشوایی</a></li>
            </ul>
          </div>
          <div style="display : inline-block; color : transparent;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div>
      <form class="navbar-form navbar-right">
        <button type="submit" class="btn btn-default" style="display : inline-block;">ابحث</button>
        <div class="form-group">
          <input type="text" style="text-align : right;" styke="display : inline-block;" class="form-control" placeholder= "... البحث عن ">
        </div>
        <div style="display : inline-block; color : transparent;">XXXXXX</div>
      </div>

      </form>

          <li style="position : absolute; left : 100%; top : 50%; transform: translate(-100% , -50%); " ><button class="btn btn-primary" onclick="home();" ><i class="fa fa-home" ></i></button></li>
          <li style="color : transparent">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX </li>
          <li><button onclick="memory();" class="btn btn-success" style="position : sticky; top : 25%; transform : translate(0 , 25%);" >افتح الذاکره </button></li>
          <li style="color : transparent">XXXX </li>
          <li style="position : absolute; right : 85%; top : 50%; transform : translate(85% , -50%);">
          <button onclick="add();" class="btn btn-success btn-sm" style="display : inline-block;" ><i class="fa fa-plus"></i></button>
          <button onclick="take();" class="btn btn-danger btn-sm" style="display : inline-block;"><i class="fa fa-minus"></i></button>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>






<!--
###########################################################
THE LISTS ARE STARTING FROM HERE DOWN OF HERER ALL 3 LISTS
###########################################################
-->




<div class="well" style="width : 120px; height : auto; float: right;" >

  <?php

  $sql = "SELECT * FROM category";
  $result = $conn->query($sql);



  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
     	 $ar_name = $row["ar_name"];
       $id = $row["id"];





            echo "<a href='?cat_id=$id&book_id=$book_ID' onclick=\"select();\" ><center><button id=\"selectable\" class=\"btn btn-default\">". $ar_name ."<div style=\"color : transparent; display: inline-block;\">X</div></button></a></center><br>";
          }



  }else{
           echo "<div style=\"width : 500px; position : absolute; left : 50% ; top : 98%; transform : translate(-50% ,-98%); \" class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\"><strong>ERORR ! </strong> We Have No Label For This Choose Now <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span>&times;</span></button></div>";
  }







   ?>
</div>
<!--
###############################################################
          SECOND LIST STARTS FROM HERE (DOWN OF HERE)
###############################################################
 -->
 <?php
 if (isset( $_GET['cat_id'] )) {
?>

<div class="well" style="width : 160px; height : auto; float: right;" >

  <?php
  $getid = $_GET['cat_id'];
  $sqll = "SELECT * FROM sub_category where category_ID = $getid";
  $resultt = $conn->query($sqll);



  if ($result->num_rows > 0) {
      // output data of each row
      while($roww = $resultt->fetch_assoc()) {
     	 $sub_ar_name = $roww["ar_name"];
       $su_bid = $roww["id"];





            echo "<a href='?cat_id=$getid&cat_book_id=$su_bid&book_id=$book_ID'><center><button id=\"selectable\" class=\"btn btn-warning\">". $sub_ar_name ."<div style=\"color : transparent; display: inline-block;\">X</div></button></a></center><br>";
          }



  }else{
           echo "<div style=\"width : 500px; position : absolute; left : 50% ; top : 98%; transform : translate(-50% ,-98%); \" class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\"><strong>ERORR ! </strong> We Have No Label For This Choose Now <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span>&times;</span></button></div>";
  }







   ?>
</div>
<?php  } ?>
<!--
###############################################################
          THIRD LIST STARTS FROM HERE (DOWN OF HERE)
###############################################################
 -->
 <?php
 if (isset( $_GET['cat_book_id'] )) {
?>
<div class="well" style="width : 100px; height : auto; float: right;" >

  <?php
  $cat_book_id = $_GET['cat_book_id'];
  $sqlll = "SELECT * FROM books where sub_category_ID = $cat_book_id";
  $resulttt = $conn->query($sqlll);



  if ($resulttt->num_rows > 0) {
      // output data of each row
      while($rowww = $resulttt->fetch_assoc()) {
     	 $sub_book_ar_name = $rowww["ar_name"];
       $sub_book_id = $rowww["id"];
       $cat_book_id_now = $_GET['cat_book_id'];
       $cat_id_now = $_GET['cat_id'];






            echo "<a href='http://localhost/library/new.php?cat_id=$cat_id_now&cat_book_id=$cat_book_id_now&book_id=$sub_book_id'><center><button id=\"selectable\" class=\"btn btn-primary\">". $sub_book_ar_name ."<div style=\"color : transparent; display: inline-block;\">x</div></button></a></center><br>";
          }



  }else{
           echo "<div style=\"width : 500px; position : absolute; left : 50% ; top : 98%; transform : translate(-50% ,-98%); \" class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\"><strong>ERORR ! </strong> We Have No Label For This Choose Now <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span>&times;</span></button></div>";
  }







   ?>
</div>
<?php  } ?>
<?php
if (isset( $_GET['book_id'] )) {
?>
<div class="embed-responsive embed-responsive-16by9" style="border : 1px solid green" >
<iframe src="" class="embed-responsive-item" allowfullscreen></iframe>
<h1 style="font-family : sans-serif;" >THIS WAS MY WORK THIS PART WILL COME SOON BY <i style="color : lightgreen;">RASHID OBAIDE </i>BACKEND STAFF<br> BOOK   <?php echo $book_ID; ?></h1>
</div>
<?php  } ?>
<php

<h1>
  <div class="embed-responsive embed-responsive-16by9" style="border : 1px solid green" >
  <iframe src="" style="background: url(book.jpg); background-size : cover;" class="embed-responsive-item" allowfullscreen></iframe>
</div>
</h1>
<!--
##################################################################
          Adding And Removing Books From Library
##################################################################
-->
<!-- Adding -->

<div class="well" id="addB" style="display: none; position : fixed; top : 50%; left: 50%; transform : translate(-50% , -50%); width : 500px;" >
  <button class="btn btn-danger btn-sm" onclick="Cadd();"><i class="fa fa-times"></i></button>

  <div class="well container-fluid" id="divder">
    <center>
    <button class="btn btn-primary disabled" style="width : 125px;">جلد الکتاب </button>
    <button class="btn btn-primary" style="width : 125px;" onclick="addS();">کتاب </button>
    <button class="btn btn-primary" style="width : 125px;" onclick="addP();">قسم  </button>
  </center>
  </div>
  <h1 class="page-header" align="right" >اضافه جلد للکتاب </h1>
  <form action="add-book.php" method="POST">
  <div class="input-group">
    <select class="form-control" name="sub_category_id">




        <?php

        $sqllll = "SELECT * FROM sub_category";
        $resultttt = $conn->query($sqllll);



        if ($resultttt->num_rows > 0) {
            // output data of each row
            while($rowwww = $resultttt->fetch_assoc()) {
           	 $sub_category_ar_name = $rowwww["ar_name"];
             $sub_category_id = $rowwww["id"];





                  echo "<option value=\"$sub_category_id\">". $sub_category_ar_name ."</option>";
                }



        }else{
                 echo "<div style=\"width : 500px; position : absolute; left : 50% ; top : 98%; transform : translate(-50% ,-98%); \" class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\"><strong>ERORR ! </strong> We Have No Label For This Choose Now <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"><span>&times;</span></button></div>";
        }
?>

    </select>

    <span class="input-group-addon"><i class="fas fa-folder"></i></span>

    <input id="bookname" type="text" class="form-control" name="en_name" placeholder="Book Number ... " style="text-align : right;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>

    <input id="bookname" type="text" class="form-control" name="ar_name" placeholder="رقم جلد  " style="text-align : right;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>





  </div><br><br>
  <center><div class="input-group well">

  <input type="file" accept="application/pdf" class="btn btn-primary" style="display : inline-block;" name="file">
  اختر الکتاب
</div></center><br>
<center><div class="well input-group" style="width : 300px">
<button type="submit" class="btn btn-success btn-block">اضافه </button>
</div></center>
</form>
<center><div class="well" style="width : 300px;">
<button onclick="Cadd();" class="btn btn-danger btn-block">لغو  </button>
</div><center>
</div>

<!-- NEXT ADD -->


<div class="well" id="addS" style="display: none; position : fixed; top : 50%; left: 50%; transform : translate(-50% , -50%); width : 500px;" >
  <button class="btn btn-danger btn-sm" onclick="CaddS();"><i class="fa fa-times"></i></button>

  <div class="well container-fluid" id="divder">
    <center>
    <button class="btn btn-primary" style="width : 125px;" onclick="addBt();">جلد الکتاب </button>
    <button class="btn btn-primary disabled " style="width : 125px;" onclick="addS();">کتاب </button>
    <button class="btn btn-primary" style="width : 125px;" onclick="addP();">قسم  </button>
  </center>
  </div>
  <h1 class="page-header" align="right" >اضافه الکتاب  </h1>
  <form action="add-book.php" method="POST">
  <div class="input-group">


    <span class="input-group-addon"><i class="fa fa-folder"></i></span>
    <input id="bookname" type="text" class="form-control" name="en_name" placeholder="Book Name ..... " style="text-align : left;">

    <input id="bookname" type="text" class="form-control" name="ar_name" placeholder="... اسم الکتاب " style="text-align : right;">
    <span class="input-group-addon"><i class="fa fa-folder"></i></span>
  </div>
  <select class="form-control" style="border : none; background-color : transparent; border-bottom: 1px solid blue;" name="sub_category_id">
      <option>Test</option>
      <option>Test</option>
      <option>Test</option>
      <option>Test</option>
  </select>
  <br><br>
<center><div class="well input-group" style="width : 300px">
<button type="submit" class="btn btn-success btn-block">اضافه </button>
</div></center>
</form>
<center><div class="well" style="width : 300px;">
<button onclick="CaddS();" class="btn btn-danger btn-block">لغو  </button>
</div><center>
</div>


<!-- NEXT ADD -->



<div class="well" id="addP" style="display: none; position : fixed; top : 50%; left: 50%; transform : translate(-50% , -50%); width : 500px;" >
<button class="btn btn-danger btn-sm" onclick="CaddP();"><i class="fa fa-times"></i></button>
  <div class="well container-fluid" id="divder">
    <center>
    <button class="btn btn-primary" style="width : 125px;" onclick="add();">جلد الکتاب </button>
    <button class="btn btn-primary" style="width : 125px;" onclick="addS();">کتاب </button>
    <button class="btn btn-primary disabled" style="width : 125px;" onclick="addP();">قسم  </button>
  </center>
  </div>
  <h1 class="page-header" align="right" >اضافه القسم  </h1>
  <form action="add-book.php" method="POST">
  <div class="input-group">

    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
    <input id="bookname" type="text" class="form-control" name="en_name" placeholder="Part Name ... " style="text-align : left;">
    <input id="bookname" type="text" class="form-control" name="ar_name" placeholder="... اسم القسم" style="text-align : right;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>

  </div><br><br>
<center><div class="well input-group" style="width : 300px">
<button type="submit" class="btn btn-success btn-block">اضافه </button>
</div></center>
</form>
<center><div class="well" style="width : 300px;">
<button onclick="CaddP();" class="btn btn-danger btn-block">لغو  </button>
</div><center>
</div>

<!-- Removing -->

<div class="well" id="takeB" style="display: none; position : fixed; top : 50%; left: 50%; transform : translate(-50% , -50%); width : 500px;" >
  <button class="btn btn-sm btn-danger" onclick="Ctake();" style="float : left;"><i class="fa fa-times" ></i></button>
  <br><br><center>
  <div class="well">
  <button class="btn btn-primary disabled" style="width : 125px;">جلد الکتاب </button>
  <button class="btn btn-primary" style="width : 125px;" onclick="takeS();">کتاب </button>
  <button class="btn btn-primary" style="width : 125px;" onclick="takeP();">قسم  </button>
</div>
</center>
  <h1 class="page-header" align="right" >ازاله جلد الکتاب </h1>
  <form action="delete-book.php" method="POST">
  <div class="input-group">
    <input id="bookname" type="number" autofocus class="form-control" name="bookid" placeholder="..... رقم الکتاب" style="text-align : right;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>


  </div><br><br>

<center><div class="well input-group" style="width : 300px">
<button type="submit" class="btn btn-success btn-block">ازاله </button>
</div></center>
</form>
<center><div class="well" style="width : 300px;">
<button onclick="Ctake();" class="btn btn-danger btn-block">لغو  </button>
</div>
</div>
<!-- Next Remove -->



<div class="well" id="takeP" style="display: none; position : fixed; top : 50%; left: 50%; transform : translate(-50% , -50%); width : 500px;" >
  <button class="btn btn-sm btn-danger" onclick="CtakeP();" style="float : left;"><i class="fa fa-times" ></i></button>
  <br><br><center>
  <div class="well">
  <button class="btn btn-primary" style="width : 125px;" onclick="takeB();">جلد الکتاب </button>
  <button class="btn btn-primary" style="width : 125px;" onclick="takeS();">کتاب </button>
  <button class="btn btn-primary disabled" style="width : 125px;">قسم  </button>
</div>
</center>
  <h1 class="page-header" align="right" >ازاله القسم </h1>
  <form action="delete-book.php" method="POST">
  <div class="input-group">
    <input id="bookname" type="number" autofocus class="form-control" name="bookid" placeholder="..... رقم الکتاب" style="text-align : right;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>


  </div><br><br>

<center><div class="well input-group" style="width : 300px">
<button type="submit" class="btn btn-success btn-block">ازاله </button>
</div></center>
</form>
<center><div class="well" style="width : 300px;">
<button onclick="CtakeP();" class="btn btn-danger btn-block">لغو  </button>
</div>
</div>


<!-- Next Remove -->



<div class="well" id="takeS" style="display: none; position : fixed; top : 50%; left: 50%; transform : translate(-50% , -50%); width : 500px;" >
  <button class="btn btn-sm btn-danger" onclick="CtakeS();" style="float : left;"><i class="fa fa-times" ></i></button>
  <br><br><center>
  <div class="well">
  <button class="btn btn-primary" style="width : 125px;" onclick="takeB();">جلد الکتاب </button>
  <button class="btn btn-primary disabled " style="width : 125px;">کتاب </button>
  <button class="btn btn-primary" style="width : 125px;" onclick="takeP();">قسم  </button>
</div>
</center>
  <h1 class="page-header" align="right" >ازاله الکتاب  </h1>
  <form action="delete-book.php" method="POST">
  <div class="input-group">
    <input id="bookname" type="number" autofocus class="form-control" name="bookid" placeholder="..... رقم الکتاب" style="text-align : right;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>


  </div><br><br>

<center><div class="well input-group" style="width : 300px">
<button type="submit" class="btn btn-success btn-block">ازاله </button>
</div></center>
</form>
<center><div class="well" style="width : 300px;">
<button onclick="CtakeS();" class="btn btn-danger btn-block">لغو  </button>
</div>
</div>
<!--
##################################################################
          Drog Abel Window For Obaide Library TextEditor
##################################################################
-->


 <!-- Draggable DIV -->

  <!-- Draggable DIV -->

 <div class="well"  id="mydiv" style="overflow: auto; resize: both; display : none; position : absolute; top: 50%; left: 50%; transform : translate(-50% , -50%);" >
   <div class="page-header">
    <button class="btn btn-sm btn-danger" onclick="closeM();"><i class="fa fa-times" ></i></button>
    <button class="btn btn-sm btn-primary" onclick="saveM();"><i class="fa fa-save" ></i></button>
    <button class="btn btn-sm btn-success" onclick="loadM();"><i class="fa fa-upload" ></i></button>
    <button class="btn btn-sm btn-info" onclick="copyM();"><i class="fa fa-copy" ></i></button>
    <div id="mydivheader" style=" width :600px; display: inline-block; text-align : right; float: right;">
      <h4>الذاکره </h4>
    </div>
    </div>
    <div style="display : none;" id="loadL" >
      <div class="list-group" >
       <a href="#" class="list-group-item" style="display : inline-block;">First Save</a>
       <a href="#" class="list-group-item" style="display : inline-block;" >Second Save</a>
       <a href="#" class="list-group-item" style="display : inline-block;">Third Save</a>
       <a href="#" class="list-group-item" style="display : inline-block;">First Save</a>
       <a href="#" class="list-group-item" style="display : inline-block;" >Second Save</a>
       <a href="#" class="list-group-item" style="display : inline-block;">Third Save</a>
      </div>
    </div>
    <div class="md-form">
    <textarea type="text" id="text" class="md-textarea form-control" rows="15" style="resize : none; overflow : scroll; text-align : right; font-size : 15px; width: 800px;"></textarea>
  </div>
  </div>


 <Style>
 #mydivheader{
 cursor : move;
 }
 </style>
 <script>

 // Make the DIV element draggable:
 dragElement(document.getElementById("mydiv"));

 function dragElement(elmnt) {
   var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
   if (document.getElementById(elmnt.id + "header")) {
     // if present, the header is where you move the DIV from:
     document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
   } else {
     // otherwise, move the DIV from anywhere inside the DIV:
     elmnt.onmousedown = dragMouseDown;
   }

   function dragMouseDown(e) {
     e = e || window.event;
     e.preventDefault();
     // get the mouse cursor position at startup:
     pos3 = e.clientX;
     pos4 = e.clientY;
     document.onmouseup = closeDragElement;
     // call a function whenever the cursor moves:
     document.onmousemove = elementDrag;
   }

   function elementDrag(e) {
     e = e || window.event;
     e.preventDefault();
     // calculate the new cursor position:
     pos1 = pos3 - e.clientX;
     pos2 = pos4 - e.clientY;
     pos3 = e.clientX;
     pos4 = e.clientY;
     // set the element's new position:
     elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
     elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
   }

   function closeDragElement() {
     // stop moving when mouse button is released:
     document.onmouseup = null;
     document.onmousemove = null;
   }
 }

 </script>


<script type="text/javascript">
 function setBgColor(color){
 document.body.style.backgroundColor = color;
 }
 function randBg() {
 var bgColor, colors = new Array('red', 'green', 'blue', 'yellow', 'orange');
 bgColor=colors[(Math.floor(Math.random() * colors.length))];
 setBgColor(bgColor);
 }
 function select(){
   // change the color in hrere
 }
 function add(){
   CaddS();
   CaddP();
   document.getElementById('addB').style.display = "block";
 }

 function Cadd() {
   document.getElementById('addB').style.display = "none";
 }
 function take (){
   document.getElementById('takeB').style.display = "block";
 }
 function Ctake() {
   document.getElementById('takeB').style.display = "none";
 }
 function home(){
   window.location.href="new.php";
 }
 function memory(){
   document.getElementById('mydiv').style.display = "block";
 }
 function closeM(){
   document.getElementById('mydiv').style.display = "none";
 }
 function copyM(){

  /* Get the text field */
  var copyText = document.getElementById("text");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");
  // alert for text copied;
  document.getElementById('alert').style.display= "block";
 }
 function startM(){
   /* Get the text field */
   var copyText = document.getElementById("text");

   /* Select the text field */
   copyText.select();
 }
 function closeA() {
   document.getElementById('alert').style.display= "none";
 }
 function saveM(){
   // Put Save Function in here
 }
 function loadM(){
   // Put Load Function in here
   document.getElementById('loadL').style.display = "block";
 }
 function addBt(){
   document.getElementById('addS').style.display = "none";
   add();
 }
 function addS(){
   Cadd();
   CaddP();
   document.getElementById('addS').style.display = "block";
 }
 function CaddS(){
   document.getElementById('addS').style.display = "none";
 }
 function addP(){
   Cadd();
   CaddS();
   document.getElementById('addP').style.display = "block";
 }
 function CaddP(){
   document.getElementById('addP').style.display = "none";
 }
 function takeS(){
   document.getElementById('takeB').style.display = "none;";
   document.getElementById('takeS').style.display = "block";
 }
 function takeP(){
   document.getElementById('takeS').style.display = "none";
   document.getElementById('takeB').style.display = "none";
   document.getElementById('takeP').style.display = "block";
 }
 function takeB(){
   document.getElementById('takeP').style.display = "none";
   document.getElementById('takeB').style.display = "block";
   document.getElementById('takeS').style.display = "none";
 }
 function CtakeP(){
   document.getElementById('takeP').style.display = "none";
 }
 function CtakeS(){
   document.getElementById('takeP').style.display = "none";
   document.getElementById('takeS').style.display = "none";
   document.getElementById('takeB').style.display = "none";
 }
</script>
</body>
<!-- Alert display = none; for copied alert -->
<div id="alert" style="display : none; width : 500px; position : absolute; left : 50% ; top : 98%; transform : translate(-50% ,-98%); " class="alert alert-success"><strong>Copied ! </strong> The Text Succesfully copied <button type="button" onclick="closeA();" class="close" aria-label="close"><span>&times;</span></button><div>
<!-- Alert display = none; for copied alert -->
</html>
<style>
