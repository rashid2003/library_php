<!DOCTYPE html>
<html>
<title>Library</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" >
<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css"  crossorigin="anonymous">

<body>
<!--
########################################################
                        HEADER
########################################################
-->
<header>

  <div class="search">
  <input type="search"  placeholder="Search ..." class="searchb">
  <i class="fa fa-search "></i>

</div>






</header>
<!--
###########################################################
THE LISTS ARE STARTING FROM HERE DOWN OF HERER ALL 3 LISTS
###########################################################
-->

<div class="first-list">
  <button onclick="sec_open()"  class="item">
    التفسیر
    <i class="fa fa-folder"></i>
  </button><br>
  <button onclick="sec_open()" class="item">
    التفسیر
    <i class="fa fa-folder"></i>
  </button><br>
  <button onclick="sec_open()" class="item">
    التفسیر
    <i class="fa fa-folder"></i>
  </button><br>
  <button onclick="sec_open()" class="item">
    التفسیر
    <i class="fa fa-folder"></i>
  </button><br>
  <button onclick="sec_open()" class="item">
    التفسیر
    <i class="fa fa-folder"></i>
  </button><br>
  <button onclick="sec_open()" class="item">
    التفسیر
    <i class="fa fa-folder"></i>
  </button><br>
</div>
<!--
###############################################################
          SECOND LIST STARTS FROM HERE (DOWN OF HERE)
###############################################################
 -->
<div style="display:inline-block;" id="seclist" class="sec-list">
  <button class="sec-item" onclick="th_open()">
    تفسیر الرازی
    <i class="fa fa-folder"></i>
  </button><br>
  <button class="sec-item" onclick="th_open()">
    تفسیر الرازی
    <i class="fa fa-folder"></i>
  </button><br>
  <button class="sec-item" onclick="th_open()">
    تفسیر الرازی
    <i class="fa fa-folder"></i>
  </button><br>
  <button class="sec-item" onclick="th_open()" >
    تفسیر الرازی
    <i class="fa fa-folder"></i>
  </button><br>
  <button class="sec-item" onclick="th_open()">
    تفسیر الرازی
    <i class="fa fa-folder"></i>
  </button><br>
  <button class="sec-item" onclick="th_open()">
    تفسیر الرازی
    <i class="fa fa-folder"></i>
  </button><br>
</button><br>
<button class="sec-item" onclick="th_open()">
  تفسیر الرازی
  <i class="fa fa-folder"></i>
</button><br>
</button><br>
<button class="sec-item" onclick="th_open()">
  تفسیر الرازی
  <i class="fa fa-folder"></i>
</button><br>
</button><br>
<button class="sec-item" onclick="th_open()">
  تفسیر الرازی
  <i class="fa fa-folder"></i>
</button><br>
</button><br>
<button class="sec-item" onclick="th_open()">
  تفسیر الرازی
  <i class="fa fa-folder"></i>
</button><br>
</div>

<!--
###############################################################
          THIRD LIST STARTS FROM HERE (DOWN OF HERE)
###############################################################
 -->

<div style="display:inline-block;" id="thlist" class="th-list">
  <button class="th-item" onclick="show_pdf()">
      1
    <i class="fa fa-book"></i>
  </button><br><br>
  <button class="th-item" onclick="show_pdf()">
      2
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      3
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
    4
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
    5
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      6
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      17
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      8
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      9
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      10
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      11
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      12
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      13
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      14
    <i class="fa fa-book"></i>
  </button><br><br>

  <button class="th-item" onclick="show_pdf()">
      15
    <i class="fa fa-book"></i>
  </button><br><br>
</div>
<div id="pdf_show" style="display: none; width : 800px; height: 600px; border : 1px solid black;">
<!--
#########################################################
 PUT AN IFRAME FOR PDF BOOKS IN HRERE IF YOU CAN DO THAT
#########################################################
-->
<h1 style="font-family : sans-serif;" >THIS WAS MY WORK THIS PART WILL COME SOON BY <i style="color : lightgreen;">RASHID OBAIDE </i>BACKEND STAFF</h1>
</div>

</body>
</html>
