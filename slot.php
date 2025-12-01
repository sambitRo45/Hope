<?php

  if($_SERVER["REQUEST_METHOD"]=="POST"){
     require_once 'dbcon.php';
     $name = $_POST['name'];
     $email = $_POST['email'];
     $date = $_POST['date'];

     $qry = "INSERT INTO user_temp (name, email, date) VALUES (?, ?, ?)";
     $stmt = $conn->prepare($qry);
     $stmt->bind_param("sss",$name, $email, $date);
     $res=$stmt->execute();
     if($res){
        ?>
        <script>
            alert("Your request has been submmited Successfully for approval")
            window.location = "home.php";
        </script>
        <?php
     }
    
  }
?>