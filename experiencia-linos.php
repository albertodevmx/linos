<?php include("header.php"); ?>



<div class="container-fluid d-flex align-items-center portada" style="--background: url('./img/banners/banquetes-banner-1-principal.jpg'); --opacity: 1;">
    <div class="portada__info pt-5">
        <h1 class="mt-5 fondo-negro-transparente d-inline-block p-1 pl-2 pr-2">Vive la Experiencia Linos</h1>
        <div></div>
        <p class="fondo-negro-transparente d-inline-block p-1">
            Presentes en los mejores momentos de tu vida y con tus seres queridos
        </p>
    </div>
</div>




<div class="container-fluid content">
    <!--
    <div class="container">
    
                <div class="row">
                    <div class="col-12 p-3 ">
                        <h3 class="text-center p-3 text-md-left">
                            Experiencia Linos
                        </h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 p-5 text-light">


                    <h4>Baquetes Japonese Gournet</h4>
                    <p>Disfruta de un delicioso y original menú de comida japonesa de lujo para tus eventos sociales como bodas, quince años, bautizos, aniversarios e incluso para tus eventos empresariales y sociales.</p>




                    <h4>Experiencia Única</h4>
                    <p>Sentirás que llevamos todo un restaurante japón de lujo a tu domicilio, jardín o lugar de tu evento.</p>



                    <div class="alert alert-danger">
                        <h4>Galería</h4>
                        <p>Eventos | Montajes | Personal | Todos</p>
                        <p>
                        {Galería con imágenes de eventos, 12 a 20 imágenes} <br>
                        {Hacer imagen pequeña de 250 x 250 e imagen grande de 800x 600}
                        </p>
                    </div>
                    
                    
                    <hr>

                    <p>Haz de tus reuniones un momento especial con un menú japones exquisito preparado al momento.</p>

                    

                        

                    </div>
                </div>





                <div class="row mb-5">
                    <div class="col-12 col-md-4">
                        <div class="card bg-mi-rojo">
                            <div class="card-header text-center text-light">
                                Menus Japoneses
                            </div>
                            <div class="card-body">
                                <p class="text-center">
                                    <img src="./img/platillos/yakimeshi.jpg" alt="" class="w-60">
                                </p>

                                <p class="text-right">
                                    <a class="btn btn-danger" href="#">Ver menús</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card bg-mi-rojo">
                            <div class="card-header text-center text-light">
                                Preparados a Domicilio
                            </div>
                            <div class="card-body">
                                <p class="text-center">
                                    <img src="./img/platillos/yakimeshi.jpg" alt="" class="w-60">
                                </p>

                                <p class="text-right">
                                    <a class="btn btn-danger" href="#">Ver menús</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card bg-mi-rojo">
                            <div class="card-header text-center text-light">
                                Platillos Japoneses
                            </div>
                            <div class="card-body">
                                <p class="text-center">
                                    <img src="./img/platillos/yakimeshi.jpg" alt="" class="w-60">
                                </p>

                                <p class="text-right">
                                    <a class="btn btn-danger" href="#">Ver menús</a>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

    </div>
    -->








    <div class="container content mb-5">
        <div class="row">
            <div class="col-12 p-3 p-md-5">
                <h3 class="subrayado p-3 prueba">Galería</h3>
            </div>
		</div>
		
		<div class="row">
			<div id="filters" class="col-12 text-center p-3 button-group">
				<a id="eventos" data-id-button="eventos" class="btn btn-danger button mb-1" data-filter=".eventos">Eventos</a>
				<a id="montajes" data-id-button="montajes" class="btn btn-danger button mb-1" data-filter=".montajes">Montajes</a>
				<a id="personal" data-id-button="personal" class="btn btn-danger button mb-1" data-filter=".personal">Personal</a>
				<a id="todas" data-id-button="todas" class="btn btn-danger button mb-1 is-checked" data-filter="*">Todas</a>
			</div>
		</div>


        <div class="row galeria grid">
			<!-- Eventos -->
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-01.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-01.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-02.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-02.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-03.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-03.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-04.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-04.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <!-- <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-05.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-05.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-06.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-06.jpg" class="w-100 img-thumbnail shadow-sm"></a></div> -->
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-07.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-07.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-08.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-08.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-09.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-09.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-10.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-10.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-11.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-11.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-12.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-12.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-13.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-13.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item eventos" data-category="eventos"><a href="./img/galerias/eventos/eventos-14.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/eventos/th/eventos-14.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            
            
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-01.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-01.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <!-- <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-02.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-02.jpg" class="w-100 img-thumbnail shadow-sm"></a></div> -->
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-03.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-03.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-04.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-04.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-05.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-05.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-06.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-06.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-07.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-07.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-08.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-08.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-09.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-09.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-10.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-10.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-11.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-11.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-12.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-12.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-13.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-13.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  montajes" data-category="montajes"><a href="./img/galerias/experiencia-unica/experiencia-14.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/experiencia-unica/th/experiencia-14.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            
            
            <div class="col-6 col-md-2 mb-5 element-item  personal" data-category="personal"><a href="./img/galerias/personal/personal-01.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/personal/th/personal-01.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  personal" data-category="personal"><a href="./img/galerias/personal/personal-02.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/personal/th/personal-02.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  personal" data-category="personal"><a href="./img/galerias/personal/personal-03.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/personal/th/personal-03.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  personal" data-category="personal"><a href="./img/galerias/personal/personal-04.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/personal/th/personal-04.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  personal" data-category="personal"><a href="./img/galerias/personal/personal-05.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/personal/th/personal-05.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  personal" data-category="personal"><a href="./img/galerias/personal/personal-06.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/personal/th/personal-06.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
            <div class="col-6 col-md-2 mb-5 element-item  personal" data-category="personal"><a href="./img/galerias/personal/personal-07.jpg" data-fancybox="gallery" data-caption="Eventos Linos"><img src="./img/galerias/personal/th/personal-07.jpg" class="w-100 img-thumbnail shadow-sm"></a></div>
        </div>
    </div>








    
<?php include("seccion-contacto.php"); ?>
</div>




<?php include("footer.php"); ?>