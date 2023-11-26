<?php
    require_once("includes/database.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$sql = "SELECT * FROM users where id = 1";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo $row['username']." ".$row["password"]."<br>";
    }
}
else
{
    echo "NO data selected";
}
?>
</body>
</html>