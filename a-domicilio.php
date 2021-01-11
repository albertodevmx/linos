<?php include("header.php"); ?>


<div class="container-fluid content push">
    <div class="container">



        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-md-left p-3 mb-5">Obentos</h3>
            </div>
        </div>


        <div class="row d-flex platillos">

            
            <?php
                $string = file_get_contents("assets/platillos.json");
                $json_a = json_decode($string, true);
            ?>

            

            <?php foreach ( $json_a['menus']['obentos']['platillos'] AS $producto ) { ?>
 
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-5 p-md-3 mb-5">
                        
                        <div onclick="location.href='platillo-detalle-obentos.php?id=<?php echo $producto['id']; ?>'" class="platillos__item">
                            <div class="platillos__item__body">
                                <h4 class="platillos__item__body__titulo text-center p-2">
                                <?php echo $producto['tituloCorto']; ?>
                                </h4>

                                <h5 class="text-center">
                                    <?php echo $producto['subtitulo']; ?>
                                </h5>
        
                                <p class="platillos__item__body__descripcion text-center pt-3 pb-3">
                                    <?php echo $producto['descripcionCorta']; ?>
                                </p>
                            </div>
                            
                            <div class="platillos__item__footer">
                                <div class="platillos__item__footer__imagen">
                                    <img src="./img/platillos/<?php echo $producto['imagen']; ?>" alt="">
                                </div>

                                <p class="platillos__item__footer__enlace">
                                    <a href="platillo-detalle-obentos.php?id=<?php echo $producto['id']; ?>">
                                        <i class="fas fa-plus-circle"></i> Ver detalles
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                    
            <?php } ?>


        </div>











        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-center text-md-left p-3 mb-5">Menus para Entrega a Domicilio</h3>
            </div>
        </div>

        

        <div class="row mb-5 d-flex platillos">

            
            <?php
                $string = file_get_contents("assets/platillos.json");
                $json_a = json_decode($string, true);
            ?>

            

            <?php foreach ( $json_a['menus']['a-domicilio']['platillos'] AS $producto ) { ?>
 
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-5 p-md-3 mb-5">
                        
                        <div onclick="location.href='platillo-detalle-domicilio.php?id=<?php echo $producto['id']; ?>'" class="platillos__item">
                            <div class="platillos__item__body">
                                <h4 class="platillos__item__body__titulo text-center p-2">
                                <?php echo $producto['tituloCorto']; ?>
                                </h4>

                                <h5 class="text-center">
                                    <?php echo $producto['subtitulo']; ?>
                                </h5>
        
                                <p class="platillos__item__body__descripcion text-center pt-3 pb-3">
                                    <?php echo $producto['descripcionCorta']; ?>
                                </p>
                            </div>
                            
                            <div class="platillos__item__footer">
                                <div class="platillos__item__footer__imagen">
                                    <img src="./img/platillos/<?php echo $producto['imagen']; ?>" alt="">
                                </div>

                                <p class="platillos__item__footer__enlace">
                                    <a href="platillo-detalle-domicilio.php?id=<?php echo $producto['id']; ?>">
                                        <i class="fas fa-plus-circle"></i> Ver detalles
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                    
            <?php } ?>


        </div>
    </div>
</div>


<?php include("footer.php"); ?>