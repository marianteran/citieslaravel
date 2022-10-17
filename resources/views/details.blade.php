<!DOCTYPE html>
<html lang="es">

<head>
    <base href="/public">
    @include('plantilla.head')

    <style>
        /* detail section */
.detail_section {
  padding-top: 45px;
}

.detail_container {
  display: flex;
  padding-top: 14%;
}

.detail-box {
  min-width: 150px;
  min-height: 150px;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 15px;
}

.detail-box::before {
  content: "";
  position: absolute;
  width: 220px;
  height: 220px;
  top: auto;
  left: auto;
  background-color: #f6f1ed;
  z-index: -1;
  border-radius: 100%;
  transition: transform 1s;
  transform: rotate();
}

.detail-box.d-box-1::before,
.detail-box.d-box-3::before {
  clip: rect(110px, 220px, 220px, 0);
}

.detail-box:hover {
  cursor: pointer;
}

.detail-box:hover::before {
  transform: rotate(360deg);
}

.detail-box.d-box-2::before,
.detail-box.d-box-4::before {
  clip: rect(0, 220px, 110px, 0);
}

.detail-box h5 {
  font-size: 16px;
  color: #fefefe;
  margin-top: 7px;
}

.detail-box.d-box-1,
.detail-box.d-box-4 {
  background-color: #142e59;
}

.detail-box.d-box-2 {
  background-color: #ff47d9;
}

.detail-box.d-box-3 {
  background-color: #ec4045;
}

.detail-box .detail-content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.detail-box .detail-content img {
  height: 50px;
}

/* end detail section */
    </style>
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

    <div class="text-center slogan">

        <p >{{$data->slogan}}</p>

    </div>


    <section id="inf-city">
        <div class="container mx-auto mt-5">
            <div class="information-box-container">
                <div class="information-box blue">
                    <h4>Country</h4>
                    <p>{{$data->country}}</p>
                    <div class="information-box-image">
                        <img src="./assets/images/icon/{{$data->icon}}" alt="" />
                    </div>
                </div>
                <div class="information-box orange ">
                    <h4>Continent</h4>
                    <p>{{$data->continent}}</p>
                    <div class="information-box-image ">
                        <img src="./assets/images/mundo.png" alt="" />
                    </div>
                </div>
                <div class="information-box yellow">
                    <h4>Language</h4>
                    <p>{{$data->language}}</p>
                    <div class="information-box-image ">
                        <img src="./assets/images/idiomas.png" alt="" />
                    </div>
                </div>
                <div class="information-box red">
                    <h4>Currency</h4>
                    <p>{{$data->currency}}</p>
                    <div class="information-box-image">
                        <img src="./assets/images/dolar.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="ctn-band-img">

        <div class=" container d-flex justify-content-center align-items-center flex-wrap  ">

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


      <!-- detail section -->
  <section class="detail_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="detail_img-box">
            <img src="images/detail.png" alt="" class="w-100" />
          </div>
        </div>
        <div class=" col-lg-7">
          <div class="detail_container">
            <div class="detail-box d-box-1">
              <a href="">
                <div class="detail-content">
                  <img src="images/d-1.png" alt="" />
                  <h5>
                    Care kids
                  </h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-2">
              <a href="">
                <div class="detail-content">
                  <img src="images/d-2.png" alt="" />
                  <h5>
                    Baby boy
                  </h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-3">
              <a href="">
                <div class="detail-content">
                  <img src="images/d-3.png" alt="" />
                  <h5>
                    Baby girl
                  </h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-4">
              <a href="">
                <div class="detail-content">
                  <img src="images/d-4.png" alt="" />
                  <h5>
                    Sale
                  </h5>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end detail section -->

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
