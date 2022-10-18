<!DOCTYPE html>
<html lang="es">

<head>
    @include('plantilla.head')
</head>

<body>
    <header>
        @include('plantilla.nav')
    </header>



    <!-- ========== Start Body ========== -->

    <!-- ========== Start banner ========== -->

    <div class="banner-home">

        <video src="./assets/video/bannerhome.mp4" type='video/mp4' autoplay muted loop></video>
        {{-- <video src="video/link2.mp4" type='video/mp4' autoplay muted loop></video> --}}
        <h1>MYtinerary</h1>
    </div>


    <!-- ========== end banner ========== -->

    <!-- ========== Start About ========== -->
    @include('components.about')
    <!-- ========== End About ========== -->


    <div class="container-servi ">

        <div class="box-servi ">

            <div class="thumbex">
                <div class="thumbnail">
                    <img src="./assets/images/home/cayosombrero.jpg" alt="cayosombrerovzla">
                    <span>Beach</span>
                </div>

            </div>

            <div class="thumbex">
                <div class="thumbnail">
                    <img src="./assets/images/home/avila.jpg" alt="avilavzla">
                    <span>Mountain</span>
                </div>

            </div>

            <div class="thumbex">
                <div class="thumbnail">
                    <img src="./assets/images/home/PicoAguilaMerida.jpg" alt="PicoAguilaMeridavzla">
                    <span>Snow</span>
                </div>

            </div>

            <div class="thumbex">
                <div class="thumbnail">
                    <img src="./assets/images/home/selva.jpg" alt="amazonavzla">
                    <span>Forest</span>
                </div>

            </div>

        </div>

    </div>







    @include('components.tours-travel')


    @include('components.galeria')



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
