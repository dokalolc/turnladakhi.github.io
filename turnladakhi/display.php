<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "word_meaning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT word,meaning FROM ladakhi";
$result = $conn->query($sql);

?>
  <table border = 1>
    <tr>
        <th>Word</th>
        <th>Translate</th>
    </tr>    
<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>
      <tr>
          <td> <?php echo $row["word"];?></td>
          <td> <?php echo $row["meaning"];?></td>
      </tr> 

      <?php
  }
} else {
  echo "0 results";
}

?>
</Table>

<?php
$conn->close();
?>