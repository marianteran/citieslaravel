@extends('layouts.plantilla')
<base href="/public">

@section('main')


    <!-- ========== Start Body ========== -->


    <div id="ctn-reviews">

        <div class="banner-cities pt-5">
            <div class=" header-cities d-flex flex-wrap justify-content-center align-items-center">
                <div class="header-cities-text  ">
                    <h1 class="tituloheader-reviews">REVIEWS</h1>
                    <h4 class="subtituloheader-review">
                        Get to know what people said about Mytinerary
                    </h4>
                </div>
                <div class="header-cities">
                    <img src="./assets/images/bgrewi.png" class="d-block w-100 imgheader3 " alt="..." />
                </div>
            </div>
        </div>


        <div class="contenedor_comentario">


            <div class="card-cont_comentario">
                <div class="head_comentario">
                    <div class="circle_comentario">
                        <div class="img_comentario">
                            <img src="./assets/images/city/osaka2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="description_comentario">
                    <h6>Osaka</h6>
                    <p class="comentario">Beautifull city</p>
                    <p>user1, Ene 2022</p>
                </div>
            </div>



            <div class="card-cont_comentario">
                <div class="head_comentario">
                    <div class="circle_comentario">
                        <div class="img_comentario">
                            <img src="./assets/images/city/london2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="description_comentario">
                    <h6>London</h6>

                    <p class="comentario">The best time in London. Fun comfortable easy all great. The kids love it. You can't stop taking
                        photos.</p>
                    <p>Rocio_G, oct 2022</p>
                </div>
            </div>



            <div class="card-cont_comentario">
                <div class="head_comentario">
                    <div class="circle_comentario">
                        <div class="img_comentario">
                            <img src="./assets/images/city/cairo1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="description_comentario">
                    <h6>Cairo</h6>
                    <p class="comentario">Amazing experience. She made our trip to Egypt really special.</p>
                    <p>@Carlos, May 2022</p>
                </div>
            </div>


        </div>


    </div>

    @endsection