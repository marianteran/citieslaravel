<!DOCTYPE html>
<html lang="es">

<head>
    <base href="/public">
    @include('plantilla.head')
    <!-- estilos.css -->
</head>

<body>
    <header>
        @include('plantilla.nav')
    </header>



    <!-- ========== Start Body ========== -->

    <!-- ========== Start banner ========== -->


    <div class="banner-cities pt-5">
        <div class=" header-cities d-flex flex-wrap justify-content-center align-items-center">
            <div class="header-cities-text  ">
                <h1 class="tituloheader">Reviews</h1>
                <h4 class="subtituloheader"> Get to know what people said about Mytinerary</h4>
            </div>
            <div class="header-cities">
                <img src="./assets/images/pngwing.png" class="d-block w-100 imgheader3 " alt="..." />
            </div>
        </div>
    </div>


    <!-- ========== end banner ========== -->


    <!-- ========== Start Body ========== -->


    <div id="ctn-reviews">

        <div class="contenedor_comentario">


            <div class="card-cont_comentario">
                <div class="head_comentario">
                    <div class="circle_comentario">
                        <div class="img_comentario">
                            <img src="./assets/img/contacto/dogui.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="description_comentario">
                    <h3>Roma</h3>
                    <p>Excelente servicio y productos , nos trataron hermoso</p>
                </div>
            </div>



            <div class="card-cont_comentario">
                <div class="head_comentario">
                    <div class="circle_comentario">
                        <div class="img_comentario">
                            <img src="./assets/img/contacto/dogui.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="description_comentario">
                    <h3>Roma</h3>
                    <p>Excelente servicio y productos , nos trataron hermoso</p>
                </div>
            </div>



            <div class="card-cont_comentario">
                <div class="head_comentario">
                    <div class="circle_comentario">
                        <div class="img_comentario">
                            <img src="./assets/img/contacto/dogui.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="description_comentario">
                    <h3>Roma</h3>
                    <p>Excelente servicio y productos , nos trataron hermoso</p>
                </div>
            </div>


        </div>


    </div>


    <!-- ========== End Body ========== -->



    <!-- ========== Start Footer ========== -->
    @include('plantilla.footer')
    <!-- ========== End Footer ========== -->



    <!-- ========== Start script ========== -->

    @include('plantilla.script')
    <!-- ========== End script ========== -->

</body>

</html>