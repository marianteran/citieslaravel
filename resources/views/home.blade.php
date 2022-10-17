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

    <div class="banner">

        <video src="./assets/video/playa2.mp4" type='video/mp4' autoplay muted loop></video>
        {{-- <video src="video/link2.mp4" type='video/mp4' autoplay muted loop></video> --}}
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




    {{-- <div class="container mx-auto text-center my-5 py-4  animate__animated animate__fadeInDownBig">
        <div class='subtitle-principal '>
            <h2 class="">“Life is a journey and whoever travels lives twicet”</h2>
        </div>
        <p class=" mt-4 multipleStrings"></p>
    </div> --}}


    @include('components.tours-travel')


    <section>
        <div class="container p-5 galeria">
            <div class="  text-center">

                <div class="row">
                    <div class="col-8">
                        <img src="./assets/images/home/cayosombrero.jpg" alt="" style="width:100% ">
                    </div>
                    <div class="col-4">

                        <img src="./assets/images/home/avila.jpg" alt="" style="width:100% ">
                        <img src="./assets/images/home/cayosombrero.jpg" alt="" style="width:100% ">

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img src="./assets/images/home/cayosombrero.jpg" alt="" style="width:100% ">
                    </div>
                    <div class="col">
                        <img src="./assets/images/home/avila.jpg" alt="" style="width:100% ">
                    </div>
                    <div class="col">
                        <img src="./assets/images/home/cayosombrero.jpg" alt="" style="width:100% ">
                    </div>
                    <div class="col">
                        <img src="./assets/images/home/cayosombrero.jpg" alt="" style="width:100% ">
                    </div>
                </div>
            </div>
        </div>

    </section>




    <!-- ========== End Body ========== -->



    <!-- ========== Start Footer ========== -->
    @include('plantilla.footer')
    <!-- ========== End Footer ========== -->



    <!-- ========== Start script ========== -->

    @include('plantilla.script')


    <script>
        new TypeIt(".multipleStrings", {
  strings: ["Enjoy...😀", "✈Travel around the world 🌏","Don’t dream your life, live your dream","Traveling is adding life to life", "Travels😎.."  ],
  speed: 50,
  breakLines: false

}).go();
    </script>
    <!-- ========== End script ========== -->

</body>

</html>
