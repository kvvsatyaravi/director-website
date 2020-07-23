<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
.back{
		border-width: 2px; 
	}
</style>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
<body>
<nav class="navbar navbar-light bg-info justify-content-between p-4">
        <img src="../img/title3.PNG"  class="pl-md-5" height="40" width="150">                
        <form class="form-inline pr-md-5">
          <a class="navbar-brand  nav-link" onclick="home()"><b>home</b></a>
        </form>
    </nav>
    
    <div class="container p-4">
    	<div class="row">
    		<div class="card p-4 col-12 text-dark border border-dark">
    		
 <?php
$seldata=$_POST['foo'];

include '../config.php';
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$agriculture = "SELECT topic,answer,author FROM agriculture where topic = '$seldata'";
$agri = $con->query($agriculture);
if ($agri->num_rows > 0){
  while ($row = $agri->fetch_assoc() ) {
    echo "<h2><b><center>" . $row["topic"]."</center></b></h2></div>";
    echo "<div class='p-3'></div>";
    echo "<div class='card border border-dark col-12 p-2'><h4>" . $row["answer"]."</h4></div><br>";
    echo "<h5 class='offset-11 pt-2'>- ".$row["author"]."</h6>";
      }
}
?>
</div></div></div>

</body>
<script>
       function home() {
        location.href = '../index.html';
       }
       </script>
</html>