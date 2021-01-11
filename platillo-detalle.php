<?php include("header.php"); ?>


<?php 
$platillo_id = $_GET['id'];
$string = file_get_contents("./assets/platillos.json");
$archivo_json = json_decode($string, true);

$banquetes = $archivo_json["menus"]['cocinados-al-momento']['platillos'];
$menu = $archivo_json["menus"]['cocinados-al-momento']['platillos'][$platillo_id];
// $platillos = $archivo_json["platillos"];
$incluye = $archivo_json["incluye"];
?>


<div class="container-fluid content push">
    <div class="container">
        
        <div class="row">

            <div class="col-12 col-md-9 p-3">
                <div class="platillo pt-3 pb-3">
                    <div class="row">
                        <div class="col-12 p-3">
                            <h1 class="platillo__titulo text-center text-md-left p-3">
                                <?php echo $menu['tituloLargo'] ?>
                            </h1>
                        </div>
                    </div>

                    <?php 
                        foreach( $menu['descripcionLarga'] as $menu_item ) {
                            $platillo_en_turno = $menu_item;
                    ?>

                        <div class="row platillo__elemento">
                            <div class="col-12 col-md-4 text-center">
                                <img src="img/platillos/<?php echo $platillo_en_turno['imagen']; ?>" alt="" class="platillo__elemento__imagen mb-3">
                            </div>
                            
                            <div class="col-12 col-md-8">
                                <h4 class="platillo__elemento__titulo p-3 text-center text-md-left"><?php echo $platillo_en_turno['titulo']; ?></h4>
                                
                                <div class="platillo__elemento__descripcion p-3">
                                    
                                    <?php foreach( $platillo_en_turno['lista'] as $itemLista ) { ?>
                                        
                                        <li>
                                            <?php echo $itemLista; ?>
                                        </li>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    

                    <?php } ?>
                </div>
            </div>





            <div class="d-none d-md-block col-3 p-3 menu-lateral">
                <div class="div pt-3 pb-3">
                    <div class="row">
                        <div class="col-12 p-3">
                            <h4 class="menu-lateral__titulo">Menú</h4>

                            
                            <?php foreach ( $banquetes AS $producto ) { ?>

                                <a href="platillo-detalle.php?id=<?php echo $producto['id']; ?>" class="menu-lateral__enlace">
                                    <i class="fas fa-plus-circle"></i> <?php echo $producto['tituloCorto']; ?>
                                </a>

                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>




    <?php if( $menu['opciones'] ) { ?>
    <div class="mt-5 incluye">
        <div class="container">
                <div class="row">
                    <div class="col-12 p-3">
                        <h4 class="platillo__titulo">
                            <?php echo $menu['opciones']['titulo']; ?>
                        </h4>
                    </div>
                </div>


                <div class="row">
                    <?php
                        foreach( $menu['opciones']['opciones'] as $opcion_item ) {
                    ?>
                        
                        <div class="col-12 col-md-6 p-3 p-md-4">
                            <div class="incluye__item">
                                <h4 class="text-center incluye__item__titulo"><?php echo $opcion_item['titulo']; ?></h4>

                                <p class="incluye__item__texto">
                                    <?php echo $opcion_item['descripcion']; ?>
                                </p>
                            </div>
                        </div>

                    
                    <?php } ?>
                </div>
            </div>
    </div>
    <?php } ?>

    <div class="mt-5 incluye">
        <div class="container">
                <div class="row">
                    <div class="col-12 p-3">
                        <h3 class="platillo__titulo text-center text-md-left p-3">
                            Este menú incluye
                        </h3>
                    </div>
                </div>


                <div class="row mb-5">
                    <?php
                        foreach( $menu['incluye'] as $incluye_item ) {
                            $incluye_actual = $incluye[$incluye_item];
                    ?>
                        
                        <div class="col-12 col-md-4 col-lg-3 p-3 p-md-4 mb-5">
                            <div class="incluye__item">
                                <h4 class="text-center incluye__item__titulo"><?php echo $incluye_actual['titulo']; ?></h4>

                                <div class="incluye__item__imagen">
                                    <img src="img/iconos/<?php echo $incluye_actual['icono']; ?>" alt="">
                                </div>

                                <p class="text-center">
                                    <?php echo $incluye_actual['texto']; ?>
                                </p>
                            </div>
                        </div>

                    
                    <?php } ?>
                </div>
            </div>
    </div>
</div>




<?php include("footer.php"); ?>