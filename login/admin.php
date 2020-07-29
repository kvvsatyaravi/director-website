<?php
session_start();
if($_SESSION['username'])
{

    echo '<html>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/popper.min.js" ></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <body>
    <center>
    <div class="modal" tabindex="-1" role="dialog" id="mymodak">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">writing Tips </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="modal-body">
            <h4>&lth1&gt large size &lt/h1&gt<br>
            &lth2&gt medium size &lt/h2&gt<br>
            &lth3&gt small size &lt/h3&gt<br>
            &ltbr&gt break (next line) <br>
            &ltu&gt underline &lt/u&gt<br>
            &ltb&gt bold text &lt/b&gt<br>
            &lti&gt italic text &lt/i&gt<br>
            &ltp&gt paragraph &lt/p&gt
            Default h5 tag for content </h4>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row p-3">
      <h2 class="col-7 offset-2 ">welcome admin</h2><br>
        <input type="button" class=" btn btn-warning offset-sm-4 offset-md-7 " onclick="feedback();" value="Feedback">
        <input type="button" class=" btn btn-info offset-md-2 offset-5 " onclick="logout();" value="logout">
    </div>
  </div>
            
    <form action="admindata.php" method="POST">
      <div class="container">
        <div class="row">
            <h3 class="offset-md-2 offset-1 pt-3">enter your content</h3>
        </div>
        <div class="row-2">      
                <div class="form-group row offset-md-2">
                    <label for="name" class="col-xs-2 offset-xs-1 col-form-label"><h5>script name:</h5></label>
                    <div class="col-xs-9">
                      <input type="text"  class="form-control border-dark offset-md-2 " placeholder="enter your script name" name="script" id="staticEmail" >
                    </div>
                </div>
                <div class="form-group row offset-md-2">
                    <label for="story" class="col-xs-2 offset-xs-1 col-form-label"><h5>genre:</h5></label>
                    <div class="col-xs-9">
                      <input type="text"  class="form-control border-dark offset-md-5" placeholder="genre " id="staticEmail" name="genre">
                    </div>
                </div>
                
                <div class="form-group row offset-md-2">
                    <label for="mistakes" class="col-xs-2 offset-xs-1 col-form-label"><h5>content:</h5></label>
                    <div class="">
                        <textarea rows="15" cols="62" placeholder="write your content" name="content" class="border-dark form-control offset-md-2"></textarea>
                    </div>
                </div>
                
                <div class="form-group row offset-md-2">
                    
                    <input type="submit" class=" btn btn-lg btn-primary offset-md-1 " value="submit">
                    
                </div>
                
              
        </form>
    </center>
    </body>
    <script>
        function logout()
       {
     location.href = "../index.html";
        } 

        function feedback()
        {
      location.href = "../php/feedbackview.php";
        }
     
    </script>
    <script>
    $(document).ready(function() {
    setTimeout(function() {
        $("#mymodak").modal("show");
        }, 1000);
    });
    </script>
</html>';
	
}
?>
