<?php
$servername = "localhost";    
$username = "root";
$password = "123456";
$database = "lua";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Connection Failed:" . mysqli_connect_error());
     }

     echo "Connected successully";

     $query = "SELECT * from sol";
     $result = mysqli_query($conn, $query);
     if(mysqli_num_rows($result) > 0)
     echo "<table border='1'>";
     echo "<tr>";
     echo "<th>id</th>";
     echo "<th>nome</th>";
     echo "</tr>";

     while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "</tr>";
     }

?>    
</body>
</html>

