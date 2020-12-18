<?php include("header.php"); ?>


<div class="container-fluid seccion">
    <div class="container">
        <div class="row carta">

            
            <?php
                $string = file_get_contents("assets/platillos.json");
                $json_a = json_decode($string, true);
            ?>

            

            <?php foreach ( $json_a['banquetes']['platillos'] AS $producto ) { ?>

                    <div class="col-6 col-md-3 p-3 carta__item">
                        <h4><?php echo $producto['tituloCorto']; ?></h4>
                        <img src="./img/<?php echo $producto['imagen']; ?>" alt="" class="w-100">
                        <p>
                            <?php echo $producto['descripcionCorta']; ?>
                        </p>
                        <p>
                            <a href="platillo-detalle.php?id=<?php echo $producto['id']; ?>" class="btn btn-danger">
                                Ver detalles
                            </a>
                        </p>
                    </div>

                    
            <?php } ?>


        </div>
    </div>
</div>


<?php include("footer.php"); ?>