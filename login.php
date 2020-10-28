<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>React To Reactions | Doctor Login</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row mt-md-5">
        <div class="col-md-6">
            <img src="images/doc2.jpg">
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-9 box">
                <form method="post">
                    <h1>Doctor Login</h1><br>
                    <input type="text" name="Name" placeholder="Name" required="">
                    <input type="password" name="Password" placeholder="Password" required="">
                    <input type="submit" name="login" value="Login"><br>
                    <?php
                    if(isset($_REQUEST['login']))
                    {
                        echo "<script>alert('Details sent to Pharma Company.')</script>";
                    }
                    ?>
                </form>
                    <a href="index.php"><- Go Back</a> 
                </div>
            </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
