<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <nav class="navbar shadow menu d-block text-white">
        <div class="container d-flex p-0 m-auto">
            <div class="d-flex">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" alt="logo" class="logo ">
                </a>
                <a href="" class="text-decoration-none text-white">
                    <h6 class="m-0" ><i class="fa fa-fw fa-solid fa-map text-white"></i>
                    Oficina: Paseo de las Parras #229 <br>
                    Valle Verde #34284 Durango, Dgo.</h6>
                </a>
            </div>
            <button class="navbar-toggler m-1 border-0 d-sm-none text-white" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-lg fa-solid fa-bars"></i>
            </button>
                <div class="btn-search m-auto">
                    <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="¿Qué estás buscando?">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                    </div>
                </div>

                    <a class="nav-icon position-relative text-decoration-none  m-auto" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-white m-2"></i>
                        <span class="position-absolute top-0  translate-middle badge">7</span>
                    </a>
                    
                    <a class="nav-icon position-relative text-decoration-none m-auto d-none d-sm-block" href="login.php">
                        <div class="d-flex">
                            <i class="fa fa-fw fa-user text-white m-2"></i>
                            <span class="position-absolute top-0  translate-middle badge "></span>
                            <h6 class="small text-decoration-none text-white m-auto" style="font-size: small;">Inicia sesion <br> o registrate</h6>
                        </div>
                    </a>
                    </div>
    </nav>
                    <!-- Ventana Modal -->
                    <button class="btn btn-success" data-toggle="modal" data-target="#ventanaModal">
                    Iniciar Sesión
                </button>    

                <div class="modal" id="ventanaModal" tabindex="2" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <?php 
                        include_once("login.php");
                        ?>
                        </div>

                    </div>
                </div>

                <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
                <script type="text/javascript" src="assets/js/popper.min.js"></script>
                <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
                <!-- Termina ventana modal -->



    <div class="row m-2 d-none d-sm-block">
        <div class="m-auto">
            <button class=" navbar-toggler  border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#main_servicios"  aria-expanded="false" aria-label="Toggle navigation">
                <h6 class="text-dark opciones">Servicios<i class="fa fa-fw fa-angle-down text-dark"></i></h6>
            </button>
            <div class="collapse m-2" id="main_servicios">
                <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Servicios</h6></a>
                <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Inmobiliaria</h6></a>
                <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Ofertas</h6></a>
            </div>
        </div>

        <div class="m-auto">
            <button class=" navbar-toggler  border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#main_promociones"  aria-expanded="false" aria-label="Toggle navigation">
                <h6 class="text-dark opciones">Servicios2<i class="fa fa-fw fa-angle-down text-dark"></i></h6>
            </button>
            <div class="collapse m-2" id="main_promociones">
                <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Servicios</h6></a>
                <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Inmobiliaria</h6></a>
                <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Ofertas</h6></a>
            </div>
        </div>
    </div>


    <div class="row collapse navbar-collapse flex-fill text-dark" id="templatemo_main_nav">
                <div class="mx-auto m-auto text-center d-flex">
                    <a class="nav-link m-auto text-dark align-items-center" href="login.php"><i class="fa fa-fw fa-user text-dark"></i><h6>Iniciar sesion</h6> </a>
                    <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-tag text-dark m-auto"></i><h6>Promociones</h6></a>
                    <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-book-open text-dark m-auto"></i><h6>Catalogo</h6></a> 
                </div>
                <div class="m-0">
        <button class=" navbar-toggler  border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav1"  aria-expanded="false" aria-label="Toggle navigation">
                <h6 class="text-dark h6 opciones">servicios <i class="fa fa-fw fa-angle-down text-dark"></i></h6>
            </button>
            <div class=" collapse  justify-content-center m-2" id="templatemo_main_nav1">
            <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Servicios</h6></a>
            <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Inmobiliaria</h6></a>
            <a href="" class="text-decoration-none text-dark mb-0 mt-0 h6"><h6>Ofertas</h6></a>
            </div>
        </div>
            </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
        
    </script>
        <!-- Close Header -->
