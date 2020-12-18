<?php include("header.php"); ?>

<div class="container-fluid d-flex align-items-center portada">
    <div class="portada__info pt-5">
        <h1 class="mt-5">LINOS FOOD EXPERENCE</h1>
        <p>
            La experiencia gastronómica más satisfactoria que tus sentidos pueden vivir.
        </p>
        <p class="p-5">
            <a href="#" class="boton linea-roja">
                Empezar experiencia
            </a>
        </p>
    </div>
</div>




<div class="container-fluid chef">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 p-5 chef__info mt-5 mb-5 text-center text-md-left">
                <h2 class="fondo-negro">Historia</h2>
                <p class="fondo-negro">Fundada hace 30 años por el chef Javier Lino Rojas con especialidad en comida
                    japonesa.</p>
            </div>
        </div>
    </div>
</div>





<div class="container-fluid slider pt-5 pb-5">
    <div class="main-carousel">
        
        <div class="carousel-cell">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order-2 order-md-1 text-center">
                        <img src="./img/sushi-plato.png" alt="" class="w-75">
                    </div>
                    <div class="col-12 col-md-6 order-1 order-md-2 pt-5 pb-5 text-center">
                        right
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-cell">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order-2 order-md-1 text-center">
                        <img src="./img/sushi-plato.png" alt="" class="w-75">
                    </div>
                    <div class="col-12 col-md-6 order-1 order-md-2 pt-5 pb-5 text-center">
                        right
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<div class="container-fluid form">
    <div class="container form__contenidos">
        <div class="row">
            <div class="col-12 col-md-4 p-5 chef__info mt-5 mb-5 text-center text-md-left">
                
                <div class="p-3 form__bloque">
                    <p class="text-center text-md-left mb-3 mb-md-5">
                        Contáctanos y vive una experiencia gourmet inigualable.
                    </p>   

                    <form>
                        <div class="form-group">
                          <!-- <label for="exampleInputEmail1">Email address</label> -->
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                          <!-- <small id="emailHelp" class="form-text text-muted">Es un campo requerido.</small> -->
                        </div>
                        <div class="form-group">
                          <!-- <label for="exampleInputPassword1">Password</label> -->
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                          <!-- <small id="emailHelp" class="form-text text-muted">Es un campo requerido.</small> -->
                        </div>

                        <div class="text-left">
                            <button type="submit" class="btn btn-danger">Envíar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>