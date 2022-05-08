<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


  <title>Basic Banking System</title>
</head>
<style>
  .bg {

    height: 100%;


  }

  .bg::before {
    content: "";
    background: url(images/logo.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    z-index: -1;
    opacity: 0.7;

    position: absolute;
    height: inherit;
    width: 100%;
  }

  h3 {
    color: rgb(0, 255, 157);
  }

  h1 {
    text-shadow: 3px 3px 3px rgb(217, 183, 183);
  }

  .title h1 {
    text-shadow: 3px 3px 3px rgb(103, 0, 141);
  }

  .btn {
    margin-left: 35%;
    width:200px;
    font-weight: bold;
    margin-bottom: 20px;
  }
  @media  screen and (max-width:500px) {
    .btn{
      margin-left:0;
    }
    
  }
  .section {
    width: 100%;

    border-radius: 10px;
    min-height: 75vh;
    margin-top: 5px;
    margin-bottom: 130px;
    background-color: rgb(239, 221, 182);
  }

  .container {
    width: 80%;

    padding-top: 80px;
  }

  .content-section {
    float: left;
    width: 55%;
  }

  .image-section {
    float: right;
    width: 40%;
  }

  .image-section img {

    width: 80%;

    height: auto;
  }

  .image-section img:hover {
    transform: scale(1.1);
    transition: 0.6s;
  }

  .fab {
    margin-right: 10px;
  }

  .fab:hover {
    transform: scale(1.5);
  }
</style>

<body>

  <?php
  include 'navbar.php';
  ?>
  <div class="bg">

    <marquee behavior="right" direction=""><em>
        <h3>Welcome to the</h3><em>
          <h1>TSF BANK</h1>
    </marquee>
    <div class="container-fluid">
      <!-- Introduction section -->

      <!-- Activity section -->
      <div class="row activity text-center">

      </div>
    </div>

    <div class="section" id="1">
      <div class="container">
        <div class="content-section">
          <div class="title">
            <h1>About Us</h1>
          </div>
          <div class="content1">

            <p>A TSF Bank also known as a The Spark Foundation Bank.
              TSF bank is one of India's premier bank. TSF Bank is headquartered in Pune.
              And giving services all over the world. You can access Net banking and many more options.
              Feel free to contact Us.</p>

          </div>


        </div>
        <div class="image-section">
          <img src="images/logo.jpg">
        </div>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
    <div class="col-md act">

      <a href="createuser.php"><button class="btn btn-primary"> Add New User</button></a>
    </div>
    <div class="col-md act">

      <a href="transfermoney.php"><button class="btn btn-primary">Make a Transaction</button></a>
    </div>
    <div class="col-md act">

      <a href="transactionhistory.php"><button class="btn btn-primary"> Transaction History</button></a>
    </div>
  </div>

  <footer class="text-center mt-5 py-2">
    <b> Contact Us</b>
    <div class="social">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>

    <p>&copy 2022 <br>TSF Bank</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>

</html>