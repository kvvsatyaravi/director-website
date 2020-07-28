<?php
include 'config.php';
$dat=$_SERVER['REQUEST_URI'];
$number = str_replace(['+', '-'], '', filter_var($dat, FILTER_SANITIZE_NUMBER_INT));

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$script = "SELECT * FROM script where id = '$number'";
$title = $con->query($script);
if ($title->num_rows > 0){
    while ($row = $title->fetch_assoc() ) {
        $id = $row['id'];
        $script = $row['script'];
        $genre = $row['genre'];
        $content = $row['content'];
    


echo '<html>
    <title>
        RC visuals
    </title>
    <link rel="icon" href="../images/rc.jpg" type="image/icon type">
    
    <meta charset="utf-8">
   
    <style>
    div.content{
        text-align: justify;
    }
    
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/popper.min.js" ></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="../css/style.css" > 
<body>
    <header>
    <nav class="navbar navbar-dark  navbar-expand-sm ">
    <div class="container">
        <a href="../index.html">
            <img src="../images/rc visual.png" href="index.html" class="img-fluid float-left row-3" height="120px" width="100px">
        </a>             
    
    <a class="nav-link text-white" href="../html files/Feedback.html"><span class="fa fa-list fa-lg"></span> Feedback</a>
    </div>
    </nav>                
    </header>

    <div class="container">
        <div class="row-2  m-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../index.php"><span class="fa fa-home fa-lg">Home</span></a></li>
                  <li class="breadcrumb-item"><a href="../html files/Storys.php"><span class="fa fa-book fa-lg">Scripts </span></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><span class="fa fa-file-text fa-lg">'. $script  .'</span></li>
                </ol>
            </nav>
        </div>';
        echo '<div class="card border border-dark col-12 p-2 content p-4"><h5>' . $content.'</h5></div><br>';
    '</div>
</body>
</html>';
  }
}

?>