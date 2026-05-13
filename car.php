<?php
require_once "settings.php"; 
$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);
if ($dbconn) {
   $query = "SELECT * FROM cars";
    $result = @mysqli_query($dbconn, $query);
    if ($result){ 
        echo "<p>Successful query.</p>";
    }
    else {
        echo "<p>Unable to execute the query.</p>";
    }
    mysqli_close($dbconn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Car Table</title>
</head>
<body>

<?php
if ($result) {
    echo "
    <table>
    <tr>
            <th>Car ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Year of Manufacture</th>
          </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['car_id'] . "</td>";
    echo "<td>" . $row['make'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['yom'] . "</td>";
    echo "</tr>";
}
  echo "</table>";

}
?>
</body>
</html>

