<?php

function all_sub_category_list(){
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







}




function all_category_list(){

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





}
?>
