@php 
$baseUrl = 'http://127.0.0.1:8081'
@endphp




@extends('layouts.master')

@section('title')
    <title>Carforrent</title>
@endsection


@section('content')
    

 <!-- content -->
    
 @include('home.components.slider')
            


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Xe nổi bật</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
            @if($cars->count() > 0)
            @foreach($cars as $car)
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ $baseUrl . $car->feature_image_path }}');">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">{{ $car->name }}</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Danh mục:{{ $car->category->name ?? 'Không có danh mục' }}</span>
			    						<p class="price ml-auto">{{ number_format($car->price_ngay, 0, ',', '.') }} VND <span>/ngày</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
              @endforeach
@else
    <p>Không có xe nào hiển thị.</p>
@endif
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(carforrent/images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
              {!! $setting->content !!}
	            <p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Dịch vụ</span>
            <h2 class="mb-3">Dịch vụ của chúng tôi</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Dịch Vụ Xe Cưới</h3>
                <p>Cung cấp xe sang trọng cho ngày trọng đại, giúp bạn có một lễ cưới hoàn hảo.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2"> Di Chuyển Trong Thành Phố</h3>
                <p>Dịch vụ đưa đón tiện lợi, nhanh chóng, phù hợp cho công việc và cuộc sống hằng ngày.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Đưa Đón Sân Bay</h3>
                <p>Đón và tiễn sân bay đúng giờ, xe thoải mái, đảm bảo hành trình suôn sẻ.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Tour Tham Quan Thành Phố</h3>
                <p>Trải nghiệm hành trình khám phá thành phố với dịch vụ xe du lịch chuyên nghiệp.</p>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>

	


    

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          @foreach($recentPosts as $recentPostsItem)
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ $baseUrl . $recentPostsItem->image_path }}');">
              </a>
              <div class="text pt-4">
              	
                <h3 class="heading mt-2"><a href="#">
                  {{$recentPostsItem->title}}
                </a></h3>
                <p><a href="{{ route('new.detail', ['id' => $recentPostsItem->id]) }}" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          @endforeach
          
          
        </div>
      </div>
    </section>	

   
    <!-- END content -->

 
@endsection
