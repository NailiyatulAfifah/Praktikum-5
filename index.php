<?php
    session_start();
    if(isset($_SESSION["user"]))
    {
        header("location:beranda.php");
    }
    include("function.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Primeval</title>
        <link rel="stylesheet" href="index.css">
        <style media="screen">
          h3 {
            font-family: Blikfang DEMO;
            color: white;
            text-align: center;
          }
        </style>
    </head>
    <body>
      <div class="box">
        <div class="box-judul">
          <p><img src="judul1.png"></p>
        </div>
        <div class="box-form">
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <p>
              <input type="text" name="username" class="form-input" placeholder="Username" required>
            </p>
            <p>
              <input type="password" name="password" class="form-input" placeholder="password" required><br>
            </p>
            <p>
              <input type="submit" name="submit" class="submit" value="S I G N  I N">
            </p>
          </form>
        </div>
        <?php
            if(isset($_GET["error"]))
            {
                if($_GET["error"] == "wrong")
                {
                    echo "<h3>Username dan Password salah!</h3>";
                }
            }
            else if(isset($_GET["notif"]))
            {
                if($_GET["notif"] == "logout")
                {
                    echo '<h3>Berhasil logout!</h3>';
                }
            }
            else if(isset($_POST['submit']))
            {
                echo do_login($_POST['username'], $_POST['password']);
            }
        ?>
      </div>
    </body>
</html>
