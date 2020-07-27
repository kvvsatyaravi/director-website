<?php 
include 'config.php';
$script=mysqli_real_escape_string($con,$_POST['script']);
$genre=mysqli_real_escape_string($con,$_POST['genre']);
$content=mysqli_real_escape_string($con,$_POST['content']);

$query = "INSERT INTO script (script,genre,content)  VALUES ('$script','$genre','$content')";
if(mysqli_query($con, $query)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>
