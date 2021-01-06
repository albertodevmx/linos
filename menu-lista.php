<?php include("header.php"); ?>


<div class="container-fluid seccion">
    <div class="container">
        <div class="row d-flex platillos">

            
            <?php
                $menu_item = $_GET['menu'];
                $string = file_get_contents("assets/platillos.json");
                $json_a = json_decode($string, true);
                $arreglo_con_items = $json_a['menus'][$menu_item]['platillos'];
            ?>



            <? if($menu_item) { ?>
            

                    <?php foreach ( $arreglo_con_items AS $producto ) { ?>
        
                            <div class="col-6 col-md-4 col-lg-3 p-3 pl-md-5 pr-md-5">
                                
                                <div class="platillos__item">
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

            <?php }  else  { echo "<h1>No hay elementos en este menú</h1>"; }?>

        </div>
    </div>
</div>


<?php include("footer.php"); ?>