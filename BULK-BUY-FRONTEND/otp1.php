<?php
session_start();
$user_otp = $_SESSION['otp'];
var_dump($user_otp);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/styles/otp.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Verify</title>
  </head>
  <body>
    <nav class="nav navbar-expand-lg">
      <div class="container-fluid cont-fluid">
        <div class="nav-flex">
          <a class="brand" href="#">BULK-BUY</a>
          <span
            class="hambuger"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </span>
        </div>
        <div
          class="collapse navbar-collapse menu-cont"
          id="navbarTogglerDemo01"
        >
          <ul class="menu-item">
            <li class="nav_item">
              <a class="nav_link" href="signup.html">Sign up</a>
            </li>
            <li class="nav_item">
              <a class="nav_link" href="login.html">Sign in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="cont-main">
      <div class="form-wrapper">
        <h1 class="header">Verify Code</h1>
        <p class="text">A verification code has been sent to your email</p>
        <form id="form" action="../BULK-BUY-BACKEND/otp.php" method="post">
          <div class="otp-container">
            <input type="number" name="otp1" id="otp1" maxlength="1" />
            <input type="number" name="otp2" id="otp2" maxlength="1" />
            <input type="number" name="otp3" id="otp3" maxlength="1" />
            <input type="number" name="otp4" id="otp4" maxlength="1" />
          </div>
          <p class="text">Didn't recieve an OTP?</p>
          <p class="text"><a href="../BULK-BUY-BACKEND/email.php">Resend Code</a></p>
          <button name="submit" class="submit" type="submit">Verify</button>
        </form>
      </div>
      <div class="hero-image">
        <img
          src="assets/images/cyber-monday-retail-sales-removebg.png"
          alt=""
        />
      </div>
      <div class="circle"></div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
    <!-- <script src="assets/scripts/otp.js"></script> -->
  </body>
</html>