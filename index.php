<?php
include 'inc.php';
$sql = "SELECT * FROM category";
$result = $conn->query($sql);





if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $ar_name = $row["ar_name"];
     $id = $row["id"];





          echo "<a href='$id'>". $ar_name ."</a><br>";
          $sqll = "SELECT * FROM sub_category where category_ID = $id";
          $resultt = $conn->query($sqll);
          if ($resultt->num_rows > 0) {
              // output data of each row
              while($roww = $resultt->fetch_assoc()) {
               $sub_ar_name = $roww["ar_name"];
               $sub_id = $roww["id"];

          echo "------<a>". $sub_ar_name ."</a><br>";
        }
      }

        }



}else{
         echo "we have not any category ...";
}







 ?>
