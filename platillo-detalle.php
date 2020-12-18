<?php include("header.php"); ?>



<?php 
$platillo_id = $_GET['id'];
$string = file_get_contents("./assets/platillos.json");
$archivo_json = json_decode($string, true);

$platillo = $archivo_json['banquetes']['platillos'][$platillo_id]
?>


<div class="container-fluid seccion">
    <div class="container">
        <div class="row platillo">


            <div class="col-12">
                <h2 class="platillo__titulo">
                    <?php echo $platillo['tituloLargo'] ?>
                </h2>


                <div class="d-block text-light platillo__descripcion">
                    <?php echo $platillo['descripcionLarga'] ?>
                </div>

            </div>



        </div>
    </div>
</div>



<div class="container mt-5">
    <div class="row">
        <div class="col-6 col-md-3 text-light">
            <i class="fas fa-glass-cheers"></i>
            <h4>Bar y Coctelería</h4>
            <p>
                Servicio de bebidas especiales con sake, cerveza japonesa, vino japones, vodka, tequila, Nitro Shots, etc. El sake se sirve en una mesa especial con hielos. Los Nitro Shots son todo un espectáculo visual y de sabor.
            </p>
        </div>
        <div class="col-6 col-md-3 text-light">
            <i class="fas fa-glass-cheers"></i>
            <h4>Café y Té</h4>
            <p>
                Contamos con preparación y servicio de bebidas calientes como café y té.
            </p>
        </div>
        <div class="col-6 col-md-3 text-light">
            <i class="fas fa-glass-cheers"></i>
            <h4>Mesas Tepanyaki</h4>
            <p>
                Servicio especial para servir tepanyaki al momento con mobiliario especial. ¡Haz de tu evento algo espectacular!
            </p>
        </div>
        <div class="col-6 col-md-3 text-light">
            <i class="fas fa-glass-cheers"></i>
            <h4>Dinámicas de comida</h4>
            <p>
                Dejamos el alimento listo para que tus invitados hagan sus propias creaciones de la mano de uno de nuestros chefs. Ideal para fiestas infantiles o donde deseas integrar una actividad de convivencia.
            </p>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>