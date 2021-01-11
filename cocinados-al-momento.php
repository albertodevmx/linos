<?php include("header.php"); ?>


<div class="container-fluid content push">
    <div class="container">
        <div class="row mb-5 pb-5 d-flex platillos">

            
            <?php
                $string = file_get_contents("assets/platillos.json");
                $json_a = json_decode($string, true);
            ?>

            

            <?php foreach ( $json_a['menus']['cocinados-al-momento']['platillos'] AS $producto ) { ?>
 
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-5 p-md-3 mb-5">
                        
                        <!-- onclick="location.href='pageurl.html';" -->

                        <div onclick="location.href='platillo-detalle.php?id=<?php echo $producto['id']; ?>'" class="platillos__item">
                            <div class="platillos__item__body">
                                <h4 class="platillos__item__body__titulo text-center p-2">
                                    <?php echo $producto['tituloCorto']; ?>
                                </h4>
        
                                <p class="platillos__item__body__descripcion text-center pt-3 pb-3">
                                    <?php echo $producto['descripcionCorta']; ?>
                                </p>
                            </div>
                            
                            <div class="platillos__item__footer">
                                <div class="platillos__item__footer__imagen">
                                    <img src="<?php echo $producto['imagen']; ?>" alt="">
                                </div>

                                <p class="platillos__item__footer__enlace">
                                    <a href="platillo-detalle.php?id=<?php echo $producto['id']; ?>">
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