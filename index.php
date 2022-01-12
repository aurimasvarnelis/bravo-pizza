<!DOCTYPE html>
<html lang="lt">

<head>
  <title>Picos</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="custom.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
  <div class="fluid-container header">
    <div class="container d-none d-md-flex">
      <a class="navbar-brand" href="#">
        <img src="./images/misc/logo.png" width="180" alt="" />
      </a>

      <div class="phone-section d-flex align-self-center text-center ml-auto">
        <div class="phone-image float-left">
          <img src="./images/misc/smartphone.png" width="60" alt="" />
        </div>

        <div class="phone-number float-right">
          <a href="tel:+37068474503">
            <b>+370 684 74503</b>
          </a>
          <div class="phone-description">
            Pristatymas į namus Palangoje
          </div>
        </div>

      </div>

    </div>

    <div class="container text-center d-md-none">
      <a class="navbar-brand" href="#">
        <img src="./images/misc/logo.png" width="180" alt="" />
      </a>

      <div class="phone-section pb-3 d-flex justify-content-center align-self-center text-center">
        <div class="phone-image float-left">
          <img src="./images/misc/smartphone.png" width="60" alt="" />
        </div>

        <div class="phone-number float-right">
          <a href="tel:+37068474503">
            <b>+370 684 74503</b>
          </a>
          <div class="phone-description">
            Pristatymas į namus Palangoje
          </div>
        </div>

      </div>
    </div>

    <nav class="navbar navbar-expand-md ">

      <div class="container d-flex mx-auto">

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse justify-content-center navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"> <b>Picos</b> </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="drinks.php"> <b>Gėrimai</b> </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contacts.php"> <b>Kontaktai</b> </a>
            </li>
          </ul>
        </div>

      </div>

    </nav>
  </div>


  <div class="container my-5 menu-body">


    <div class="row">

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/merga_rita.jpg?1" alt="merga rita">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>1. Merga Rita</b></h2>
            <div class="description">
              Sūris
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col"><i>32cm - 4,70€</i></div>
            <div class="col"><i>42cm - 6,30€</i></div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="allergensModal1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Alergenai</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  a) Kvietiniai miltai <br>
                  b) Pienas ir jo produktai (įskaitant laktozę) <br>
                  c) Raugų kultūros
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="allergensModal2" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Alergenai</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  a) Kvietiniai miltai <br>
                  b) Pienas ir jo produktai (įskaitant laktozę) <br>
                  c) Raugų kultūros <br>
                  d) Garstyčios ir jų produktai
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="allergensModal3" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Alergenai</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  a) Kvietiniai miltai <br>
                  b) Pienas ir jo produktai (įskaitant laktozę) <br>
                  c) Raugų kultūros <br>
                  d) Žuvys ir jų produktai
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="allergensModal4" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Alergenai</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  a) Kvietiniai miltai <br>
                  b) Pienas ir jo produktai (įskaitant laktozę) <br>
                  c) Raugų kultūros <br>
                  d) Žuvys ir jų produktai <br>
                  e) Garstyčios ir jų produktai
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/vesuvio.jpg?2" alt="vesuvio">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>2. Vesuvio</b></h2>
            <div class="description">
              Sūris, kumpis
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col"><i>32cm - 5,70€</i></div>
            <div class="col"><i>42cm - 7,30€</i></div>
          </div>

        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/capricciosa.jpg?1" alt="capricciosa">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>3. Capricciosa</b></h2>
            <div class="description">
              Sūris, kumpis, pievagrybiai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col"><i>32cm - 5,90€</i></div>
            <div class="col"><i>42cm - 7,90€</i></div>
          </div>

        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/saliami.jpg?1" alt="saliami">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>4. Saliami</b></h2>
            <div class="description">
              Sūris, saliamis
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col"><i>32cm - 5,90€</i></div>
            <div class="col"><i>42cm - 7,90€</i></div>
          </div>

        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/giovanni.jpg?1" alt="giovanni">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>5. Giovanni</b></h2>
            <div class="description">
              Sūris, kumpis, saliamis, svogūnai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/amore.jpg?1" alt="amore">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>6. Amore</b></h2>
            <div class="description">
              Sūris, dešrelės, pomidorai, alyvuogės
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/chicken_suprime.jpg?2" alt="chicken suprime">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>7. Chicken suprime</b></h2>
            <div class="description">
              Sūris, vištiena, marinuoti agurkai, paprika
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/bambino.jpg?1" alt="bambino">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>8. Bambino</b></h2>
            <div class="description">
              Sūris, kumpis, pomidorai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 5,90€</div>
            <div class="col">42cm - 7,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/hawaii.jpg?1" alt="hawaii">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>9. Hawaii</b></h2>
            <div class="description">
              Sūris, kumpis, ananasai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/carino.jpg?2" alt="carino">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>10. Carino</b></h2>
            <div class="description">
              Sūris, dešrelės
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 5,70€</div>
            <div class="col">42cm - 7,30€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/vegetariano.jpg" alt="vegetariano">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>11. Vegetariano</b></h2>
            <div class="description">
              Sūris, pievagrybiai, marinuoti agurkai, paprika, alyvuogės
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/amigo.jpg?2" alt="amigo">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>12. Amigo</b></h2>
            <div class="description">
              Sūris, vištiena, pievagrybiai, kario padažas, krapai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal2">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/milano.jpg?3" alt="milano">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>13. Milano</b></h2>
            <div class="description">
              Sūris, kiaulienos šoninė, saliamis, pievagrybiai, paprika, barbekiu padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/mama_mia.jpg?2" alt="mama mia">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>14. Mama mia</b></h2>
            <div class="description">
              Sūris, jautienos filė, marinuoti agurkai, paprika, svogūnai, jelapeno pipirai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/club_fantastico.jpg?2" alt="club fantastico">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>15. Club fantastico</b></h2>
            <div class="description">
              Sūris, malta kiauliena, "Tabasco" padažas, perliniai svogūnėliai, jelapeno pipirai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/bravo_pizza.jpg?1" alt="bravo pizza">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>16. Bravo pizza</b></h2>
            <div class="description">
              Sūris, kumpis, saliamis, malta kiauliena, svogūnai, pievagrybiai, barbekiu padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 7,90€</div>
            <div class="col">42cm - 9,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/roma.jpg?1" alt="roma">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>17. Roma</b></h2>
            <div class="description">
              Sūris, vištiena, perliniai svogūnėliai, paprika, "Bravo" padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/su_lasisa.jpg?2" alt="su lasisa">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>18. Su lašiša</b></h2>
            <div class="description">
              Sūris, lašiša, konservuoti kukurūzai, svogūnai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal3">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/azteka.jpg?1" alt="azteka">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>19. Azteka</b></h2>
            <div class="description">
              Sūris, kumpis, paprika, "Sniego" padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/palermo.jpg?1" alt="palermo">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>20. Palermo</b></h2>
            <div class="description">
              Sūris, jautienos filė, malta kiauliena, pomidorai, svogūnai, konservuoti kukurūzai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/torino.jpg?2" alt="torino">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>21. Torino</b></h2>
            <div class="description">
              Sūris, kiaulienos šoninė, marinuoti kelmučiai, svogūnai, "Sniego" padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/arrivederci.jpg?1" alt="arrivederci">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>22. Arrivederci</b></h2>
            <div class="description">
              Sūris, kiaulienos šoninė, marinuoti agurkai, jelapeno pipirai, marinuoti česnakai, "Bravo" padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/tonnara.jpg?1" alt="tonnara">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>23. Tonnara</b></h2>
            <div class="description">
              Sūris, tunas, pomidorai, svogūnai, alyvuogės
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal3">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/diavolo.jpg?2" alt="diavolo">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>24. Diavolo</b></h2>
            <div class="description">
              Sūris, jautienos filė, pievagrybiai, aštrūs pipirai, "Chipotle" padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/mafia.jpg?1" alt="mafia">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>25. Mafia</b></h2>
            <div class="description">
              Sūris, saliamis, marinuoti agurkai, svogūnai, aštrūs pipirai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/castello.jpg?1" alt="castello">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>26. Castello</b></h2>
            <div class="description">
              Sūris, kiaulienos šoninė, marinuoti agurkai, pievagrybiai
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/palazzo.jpg?2" alt="palazzo">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>27. Palazzo</b></h2>
            <div class="description">
              Sūris, kumpis, malta kiauliena, pievagrybiai, "Sniego" padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/su_krevetemis.jpg?2" alt="su krevetemis">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>28. Su krevetėmis</b></h2>
            <div class="description">
              Sūris, krevetės, marinuoti agurkai, paprika, kario padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal4">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/vegetariska.jpg" alt="vegetariska">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>29. Vegetariška</b></h2>
            <div class="description">
              Sūris, švieži pomidorai, svogūnai, kukurūzai, bravo padažas
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/chorizo.jpg?1" alt="chorizo">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>30. Chorizo</b></h2>
            <div class="description">
              Sūris, ispaniška vytinta dešra "Chorizo", kietasis sūris "Džiugas"
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 p-2">
        <div class="product d-flex flex-column text-center h-100">
          <div class="image">
            <img class="img-fluid" src="./images/pizza/serano.jpg" alt="serano">
          </div>
          <div class="caption d-flex flex-column h-100 py-2">
            <h2><b>31. Serano</b></h2>
            <div class="description">
              Sūris, vytintas kiaulienos kumpis, perliniai svogūnėliai, kietasis sūris "Džiugas"
            </div>
            <div class="allergens py-1 mt-auto">
              <a data-toggle="modal" data-target="#allergensModal1">Alergenų sąrašas</a>
            </div>
          </div>
          <div class="price mt-auto">
            <div class="col">32cm - 6,90€</div>
            <div class="col">42cm - 8,90€</div>
          </div>
        </div>
      </div>

      <div class="col-12 p-2 d-flex justify-content-center">
        <div class="product-additional col-lg-12 col-md-6 col-sm-12 col-xs-12 p-0">

          <div class="product h-100">

            <div class="product-body text-center p-1">
              <img src="./images/misc/garlic_sauce.png" class="img-fluid" style="width: 64px" alt="padazas">
              <span> <b> Česnakinis padažas </b> - <i>0,7€</i> </span>
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
</body>

</html>