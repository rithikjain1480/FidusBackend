<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
      echo "test1";

      DEFINE('DB_USER', 'master');
      DEFINE('DB_PASSWORD', 'POSITIVITY!youlooklessfatthanyesterday');
      DEFINE('DB_HOST', 'watsondb.cmml2onxaroy.us-west-1.rds.amazonaws.com');
      DEFINE('DB_NAME', 'myWatsonDB');
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 3306) OR die('Could not connect to MySQL ' . mysqli_connect_error());
    ?>
  </body>
</html>
