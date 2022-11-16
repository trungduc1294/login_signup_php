<?php
session_start();

if (empty($_SESSION['id'])) {
  header('location:login.php?error=You must sign in');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  .product {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
    gap: 10px;
  }

  .card {
    width: 100%;
  }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['name']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signout.php">Sign out</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="product">
    <div class="card" style="width: 18rem;">
      <img src="https://kenhz.net/wp-content/uploads/2021/03/giay-adidas-ha-noi.jpg" class="card-img-top"
        alt="adidas shoes">
      <div class="card-body">
        <h5 class="card-title">Adidas AS4A</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Buy $</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img
        src="https://product.hstatic.net/1000282067/product/fv1326.png_2cfef82fd8f94c41ada03e4190cae0ee_1024x1024.png"
        class="card-img-top" alt="adidas shoes">
      <div class="card-body">
        <h5 class="card-title">Adidas Nitte Jogger</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Buy $</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img
        src="https://product.hstatic.net/1000282067/product/adidas-fw4256-2-removebg-preview_0df18926c4b64b60b27cac684b0177a0_1024x1024.png"
        class="card-img-top" alt="adidas shoes">
      <div class="card-body">
        <h5 class="card-title">Adidas EQT Bask</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Buy $</a>
      </div>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>