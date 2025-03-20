@php 
$baseUrl = 'http://127.0.0.1:8081'
@endphp

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach($sliders as $slider)
        @php 
        $loopIndex = $loop->index; 
        @endphp
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <div class="img rounded" style="background-image: url('{{ $baseUrl . $slider->image_path }}');">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                  <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">{{$slider->name}}</h1>
                    <p style="font-size: 18px;">{{$slider->description}}</p>
                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- Slide tiếp theo -->
     
      </div>
    
      <!-- Điều khiển slide -->
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev" aria-label="Previous slide">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next" aria-label="Next slide">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>