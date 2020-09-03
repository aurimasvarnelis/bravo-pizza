<!DOCTYPE html>
<html lang="en">

<head>
  <title>Meniu</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="custom.css?v=<?=time();?>" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="fluid-container my-4">
    <nav class="navbar navbar-expand-sm ">
      <div class="container d-flex mx-auto">
        <a class="navbar-brand pr-4" href="#">
          <img src="./images/logo 4.png" width="128" alt="" />
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php"> Pagrindinis </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="menu.php"> Meniu </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contacts.php"> Kontaktai </a>
            </li>
          </ul>
        </div>

        <div class="navbar-telefone">
          <img src="./images/smartphone.png" width="64" alt="" />
          <a href="tel:+865559989" class="telephone">8 684 74503</a>

        </div>
      </div>

    </nav>
  </div>
  <div class="container menu-caption d-flex justify-content-center">
    <h1> MENIU </h1>
  </div>


  <div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Picos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Naujienos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#gerimai">Gerimai</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane container active" id="home">

        <div class="row">

          <div
            class="product-layout border border d-flex flex-column text-center justify-content-around col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
            <div class="image">
              <img class="item-image img-fluid rounded" src="./images/merga rita.jpg" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Merga Rita</a></h2>
              <div class="description">
                <p>Suris</p>
              </div>
            </div>
            <div class="price mt-auto">
              <div class="">32cm - 4.00€</div>
              <div class="">42cm - 5.20€</div>
            </div>
          </div>

          <div class="product-layout border d-flex flex-column text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
            <div class="image">
              <img class="img-fluid rounded" src="./images/vesuvio.jpg" width="256" height="256" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Vesuvio</a></h2>
              <div class="description">
                <p>Suris, kumpis</p>
              </div>
            </div>
            <div class="price mt-auto">
              <div class="">32cm - 4.00€</div>
              <div class="">42cm - 5.20€</div>
            </div>
          </div>

          <div class="product-layout border d-flex flex-column text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
            <div class="image">
              <img class="img-fluid rounded" src="./images/bravo.jpg" width="256" height="256" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Capricciosa</a></h2>
              <div class="description">
                <p>Suris</p>
              </div>
            </div>
            <div class="price mt-auto">
              <div class="">32cm - 4.00€</div>
              <div class="">42cm - 5.20€</div>
            </div>
          </div>


          <div class="product-layout text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2 bg-dark">

            <div class="image">
              <img class="img-fluid rounded" src="./images/bravo.jpg" width="256" height="256" alt="Vesuvio">
            </div>
            <div class="caption bg-success">
              <h2><a>Vesuvio</a></h2>
              <div class="description justify-content-center align-items-center">
                <p>Sūris, saliamis, kumpis, malta kiauliena, pievagrybiai, svogunai, barbekiu padazas</p>
              </div>
              <div class="price mt-auto">
                <div class="bg-danger">32cm - 4.90€</div>
                <div class="bg-warning">42cm - 6.20€</div>
              </div>

            </div>

          </div>



          <div class="product-layout border d-flex flex-column text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
            <div class="image">
              <img class="img-fluid rounded" src="./images/vesuvio.jpg" width="256" height="256" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Vesuvio</a></h2>
              <div class="description">
                <p>Suris, kumpis</p>
              </div>
            </div>
            <div class="price mt-auto">
              <div class="">32cm - 4.00€</div>
              <div class="">42cm - 5.20€</div>
            </div>
          </div>



        </div>
      </div>
      <div class="tab-pane container fade" id="menu1">...</div>
      <div class="tab-pane container fade" id="gerimai">
        <div class="row">

          <div
            class="product-layout border border d-flex flex-column text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
            <div class="image">
              <img class="item-image img-fluid rounded" src="./images/colaregular05.png" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Coca cola</a></h2>
            </div>
            <div class="price mt-auto">
              <div class="">0.3l - 1.10€</div>
              <div class="">0.5l - 1.30€</div>
            </div>
          </div>


          <div
            class="product-layout border border d-flex flex-column text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
            <div class="image">
              <img class="item-image img-fluid rounded" src="./images/colaregular05.png" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Coca cola</a></h2>
            </div>
            <div class="price mt-auto">
              <div class="">0.3l - 1.10€</div>
              <div class="">0.5l - 1.30€</div>
            </div>
          </div>

          <div
            class="product-layout border border d-flex flex-column text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
            <div class="image">
              <img class="item-image img-fluid rounded" src="./images/colaregular05.png" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Coca cola</a></h2>
            </div>
            <div class="price mt-auto">
              <div class="">0.3l - 1.10€</div>
              <div class="">0.5l - 1.30€</div>
            </div>
          </div>

          <div
            class="product-layout border border d-flex flex-column text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
            <div class="image">
              <img class="item-image img-fluid rounded" src="./images/colaregular05.png" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Coca cola</a></h2>
            </div>
            <div class="price mt-auto">
              <div class="">0.3l - 1.10€</div>
              <div class="">0.5l - 1.30€</div>
            </div>
          </div>


          <div
            class="product-layout border border d-flex flex-column text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
            <div class="image">
              <img class="item-image img-fluid rounded" src="./images/colaregular05.png" alt="Merga rita">
            </div>
            <div class="caption h-100">
              <h2><a>Coca cola</a></h2>
            </div>
            <div class="price mt-auto">
              <div class="">0.3l - 1.10€</div>
              <div class="">0.5l - 1.30€</div>
            </div>
          </div>
        </div>
      </div>










    </div>



  </div>

  </div>


  </div>
  </div>






  </div>
  <div class="fluid-container my-5" style="font-size: 1.5rem;">
    <?php include("includes/footer.php"); ?>
  </div>
  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="main.js"></script>
</body>

</html>