<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link rel="icon" type="image/png" href="logo.png" sizes="16x16">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="assets/navbar.css">
</head>
<?php
include 'navigation.php'
?>
<body onload="load()">
<div id="loading"></div>
<div class="container-fluid">
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>STATE BANK OF INDIA</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid">
                    <br>
                    <a href="newuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="moneytransfer.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transectionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2022. Made by <b>KHAN IMRAN</b> <br> The Sparks Foundation</p>
      </footer>
      <script>
        var preloader = document.getElementById('loading');
        function load() {
            setTimeout(loaded, 1000);   
        }
        function loaded() {
            preloader.style.display = 'none';
        }
    </script>
</body>
</html>
