<?php
include "../login/config.php";
$name = mysqli_real_escape_string($con,$_POST['name']);
$script = mysqli_real_escape_string($con,$_POST['script']);
$rating = mysqli_real_escape_string($con,$_POST['rating']);
$narration = mysqli_real_escape_string($con,$_POST['narration']);
$story = mysqli_real_escape_string($con,$_POST['storyrating']);
$mistakes = mysqli_real_escape_string($con,$_POST['mistakes']);
$suggestions = mysqli_real_escape_string($con,$_POST['suggestions']);

$feedback = "SELECT * FROM  feedback";

$query = "INSERT INTO feedback (name,script,rating,narration,story,mistakes,suggestions)  VALUES ('$name','$script','$rating','$narration','$story','$mistakes','$suggestions')";
if(mysqli_query($con, $query)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>