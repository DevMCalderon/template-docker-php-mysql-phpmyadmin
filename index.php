<?php 

  $connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db name
  );
  
  $table_name = "php_docker_table";
  
  $query = "SELECT * FROM $table_name";
  
  $response = mysqli_query($connect, $query);
  
  echo "<strong>$table_name: </strong>";
  
  while($i = mysqli_fetch_assoc($response))
  {
    echo "<p>".$i['a']."</p>";
    echo "<p>".$i['b']."</p>";
    echo "<p>".$i['c']."</p>";
    echo "<hr>";
  }


?>