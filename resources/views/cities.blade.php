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


    <div class="banner-cities w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class=" header-cities ">
            <div class="header-cities-text  ">
                <h1 class="tituloheader">GET MORE INFORMATION</h1>
                <h4 class="subtituloheader">
                    About the CITIES you want to visit
                </h4>
            </div>
            <div class="header-cities">
                <img src="./assets/images/home/flag.gif    " class="d-block w-100 imgheader3 " alt="..." />
            </div>
        </div>
    </div>




    <!-- ========== end banner ========== -->


    <!-- ========== Start search ========== -->



    <div class="search">
        <form action="{{url('search')}}" method="get" class="row g-3">

            @csrf

            <div class="form-control-cities col-auto">
                <input class="form-control " type="text" name="search" placeholder="Search">

            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-search mb-3"><i class="fa-solid fa-magnifying-glass"></i></button>

            </div>

        </form>
    </div>





    <!-- ========== End search ========== -->




    <section>

        <div class="wrapper">

            <div class="cols">

                @foreach ($data as $item)
                <div class="col-card-cities">
                    <div class="container-card-cities">
                        <div class="front" style="background-image: url('./assets/images/city/{{$item->imagepri}}')">
                            <div class="inner">
                                <p>{{$item->namecity}}</p>
                                {{-- <span>Lorem ipsum</span> --}}
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <p>
                                    @php echo substr( $item->description, 0, 150)

                                    @endphp
                                    ... </p>
                                <a href="{{url('details', $item->id)}}" class="btn btn-plus"><i
                                        class="fa-solid fa-angles-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

                @endforeach







            </div>
        </div>
    </section>








    <!-- ========== End Body ========== -->



    <!-- ========== Start Footer ========== -->
    @include('plantilla.footer')
    <!-- ========== End Footer ========== -->



    <!-- ========== Start script ========== -->

    @include('plantilla.script')
    <!-- ========== End script ========== -->

</body>

</html>
