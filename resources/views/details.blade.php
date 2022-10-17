<!DOCTYPE html>
<html lang="es">

<head>
    <base href="/public">
    @include('plantilla.head')
</head>

<body>
    <header>
        @include('plantilla.nav')
    </header>



    <!-- ========== Start Body ========== -->

    <!-- ========== Start banner ========== -->
    <div class="baner-city" style="background-image: url('./assets/images/city/{{$data->imagepri}}'); margin:0 auto">


        <div class="nombre-city">
            <h2 class="">{{$data->namecity}}</h2>
        </div>



    </div>



    <!-- ========== end banner ========== -->

    <div class="container mx-auto mt-5">
        <div class="information-box-container">
            <div class="information-box blue">
                <h4>Country</h4>
                <p>{{$data->country}}</p>
                <div class="information-box-image">
                    <img src="./assets/images/icon/{{$data->icon}}" alt=""></img>
                </div>
            </div>
            <div class="information-box orange ">
                <h4>Continent</h4>
                <p>{{$data->continent}}</p>
                <div class="information-box-image ">
                    <img src="./assets/images/mundo.png" alt=""></img>
                </div>
            </div>
            <div class="information-box yellow">
                <h4>Language</h4>
                <p>{{$data->language}}</p>
                <div class="information-box-image ">
                    <img src="./assets/images/idiomas.png" alt=""></img>
                </div>
            </div>
            <div class="information-box red">
                <h4>Currency</h4>
                <p>{{$data->currency}}</p>
                <div class="information-box-image">
                    <img src="./assets/images/dolar.png" alt=""></img>
                </div>
            </div>
        </div>
    </div>





    <div class="container bg-primary d-flex justify-content-center ">

        <div class="bg-dark text-center">
            <div class="box-info-city ">

                <div class="contenedor-bandera">

                    <div>
                        <img style="" src="./assets/images/bandera/{{$data->flag}}" />
                    </div>

                    <p style="">{{$data->description}}</p>

                </div>



                <div class="box-info-image2">
                    {{-- <img src="./assets/images/city/{{$data->imagesec}}" alt=""> --}}
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


    <script>


    </script>
    <!-- ========== End script ========== -->

</body>

</html>
