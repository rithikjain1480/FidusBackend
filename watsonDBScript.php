<?php include "mysqliConnect.php" ?>
<html>
  <head>
    <title>My Watson Script</title>
  </head>
  <body>
    <?php
      $userID = $_POST['userID'];
      $phoneNumber = $_POST['phoneNumber'];

      $query = "INSERT INTO `user` VALUES ($userID, '$phoneNumber', NOW());";
      $response = mysqli_query($dbc, $query);

      if($response){
         echo 'Success';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
      }

      // while ($row = mysqli_fetch_assoc($response)) {
      //    echo "test ".$row['email'];
      // }
    ?>
  </body>
</html>
