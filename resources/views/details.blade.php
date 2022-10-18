@extends('layouts.plantilla')
<base href="/public">

@section('main')


<!-- ========== Start Body ========== -->

<!-- ========== Start banner ========== -->
<div class="baner-city" style="background-image: url('./assets/images/city/{{$data->imagepri}}'); margin:0 auto">


    <div class="nombre-city">
        <h2 class="">{{$data->namecity}}</h2>
    </div>



</div>



<!-- ========== end banner ========== -->

<div class="text-center slogan">

    <p>{{$data->slogan}}</p>

</div>

<!-- detail section -->
<section class="detail_section">
    <div class="container-fluid">
        <div class="row">


            <div class="detail_container ">
                <div class="detail-box d-box-1">

                    <div class="detail-content">
                        <img src="./assets/images/icon/{{$data->icon}}" alt="" />
                        <h5>Country</h5>
                        <h6>{{$data->country}}</h6>
                    </div>

                </div>
                <div class="detail-box d-box-2">

                    <div class="detail-content">
                        <img src="./assets/images/mundo.png" alt="" />
                        <h5>Continent</h5>
                        <h6>{{$data->continent}}</h6>
                    </div>

                </div>
                <div class="detail-box d-box-3">

                    <div class="detail-content">
                        <img src="./assets/images/idiomas.png" alt="" />
                        <h5>Language</h5>
                        <h6>{{$data->language}}</h6>
                    </div>

                </div>
                <div class="detail-box d-box-4">

                    <div class="detail-content">
                        <img src="./assets/images/dolar.png" alt="" />
                        <h5>Currency</h5>
                        <h6>{{$data->currency}}</h6>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>




<section id="ctn-band-img">

    <div class="bandera-image container d-flex justify-content-center align-items-center flex-wrap  ">

        <div class="clearfix">
            <img src="./assets/images/bandera/{{$data->flag}}" class="col-md-6 float-md-start mb-3 ms-md-3" alt="...">

            <p>
                {{$data->description}}
            </p>



        </div>

        <div class="box-info-image2">
            <img src="./assets/images/city/{{$data->imagesec}}" alt="">
        </div>

    </div>


</section>

@endsection