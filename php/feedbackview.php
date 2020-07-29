<html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/popper.js/dist/popper.min.js" ></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/style.css" >
<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
<body>
<nav class="navbar navbar-dark  navbar-expand-sm ">
    <div class="container">
        <a href="../index.php">
            <img src="../images/rc visual.png" href="index.php" class="img-fluid float-left row-3" height="120px" width="100px">
        </a>            
    <button class="btn btn-warning btn-lg" onclick="logout()">Logout</button>
    </div>
</nav>
<div class="m-4"></div>
<div class="container">    
    <div class="card border-Dark" >
        <div class="card-body ">
  <?php
        include "../login/config.php";
        $update = "SELECT * FROM feedback ";
        $agri = $con->query($update);
        if ($agri->num_rows > 0){
        while ($row = $agri->fetch_assoc() ) {
    echo '<h5 class="card-title">Name:-'.$row["name"].'</h5>
    <h5 class="card-subtitle mb-2 ">Script name:-'.$row["script"].'</h5>
    <h5 class="card-text">Rating:-'.$row["rating"].'</h5>
    <h5 class="card-text">Narration:-'.$row["narration"].'</h5>
    <h5 class="card-text">Story:-'.$row["story"].'</h5>
    <h5 class="card-text">mistakes:-'.$row["mistakes"].'</h5>
    <h5 class="card-text">Suggestiond:-'.$row["suggestions"].'</h5>';
        }
    }
    ?>
        </div>
    </div>
</div>
<script>
    function logout(){
        location.href="../index.php";
    }
</script>

</body>
</html>