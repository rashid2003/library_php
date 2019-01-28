

<?php
include 'inc.php';


    if ( isset($_POST['bookid'])){
      $bookid = $_POST['bookid'];




              $sql = "DELETE FROM books WHERE id = $bookid";


              if ($conn->query($sql) === TRUE) {
                  echo "record Deleted successfully";
                  echo "<script>window.location.href=\"new.php\";</script>";
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }



    }else {
      echo "Input your Book is .....";
    }




$conn = null;
?>
