<section id="galeria">
    <div class="container-fluid text-center p-0 m-0">

        <div class="container-galeria mx-auto">

            @foreach ($data as $item)
            <div class="galeria-image">
                <img src="./assets/images/city/{{$item->imagesec}}" alt="">
            
                <div class="capa">

                    <div class="text-center hiden">
    
                        <p>{{$item->namecity}}</p>
    
                    </div>
    
    
                </div>
            
            
            
            </div>

            
            @endforeach



            {{-- <div class="galeria-image">
                <img src="./assets/images/city/cairo1.jpg" alt="">
            </div>
            <div class="galeria-image">
                <img src="./assets/images/city/amsterdam2.jpg" alt="">

            </div>
            <div class="galeria-image">
                <img src="./assets/images/home/cayosombrero.jpg" alt="">

            </div>

            <div class="galeria-image">
                <img src="./assets/images/home/cayosombrero.jpg" alt="">

            </div> --}}

        </div>



    </div>

</section>