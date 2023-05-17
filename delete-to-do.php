<?php
function deleteTaskById()
{
  global $conn; 
  
if (isset($_POST['update']) && isset($_GET['delete-task']) && !empty($_GET['delete-task'])) {
      
  $id = $_GET['delete-task'];
     /* validation */


     /* sql query*/
    $query  = "DELETE todo SET ";
    $query .= "WHERE id =$id";

    $result = $conn->query($query);

    if ($result) {

      echo "<script>window.location='index.php'</script>";

    } 
    /*sql query*/
      
    }
}

  
