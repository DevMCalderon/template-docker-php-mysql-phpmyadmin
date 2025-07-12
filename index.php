<?php 

  $dotenv = parse_ini_file('.env', true);

  $connect = mysqli_connect(
    $dotenv['DB_HOST'], # service name
    $dotenv['DB_USER'], # username
    $dotenv['DB_PASSWORD'], # password
    $dotenv['DB_NAME'] # db name
  );
  
  $table_name = "php_docker_table";
  
  $query = "SELECT * FROM $table_name";
  
  $response = mysqli_query($connect, $query);
  
  echo "<strong>$table_name: </strong>";
  
  while($i = mysqli_fetch_assoc($response))
  {
    echo "<p>".$i['a']."</p>";
    echo "<p>".$i['b']."</p>";
    echo "<hr>";
  }

?>