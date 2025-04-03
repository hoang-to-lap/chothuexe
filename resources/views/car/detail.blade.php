@php 
$baseUrl = 'http://127.0.0.1:8081'
@endphp




@extends('layouts.master')

@section('title')
    <title>Carforrent</title>
@endsection


@section('content')
    

 <!-- content -->
    		

		<section class="ftco-section ftco-car-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="car-details">


      				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        
  <div class="carousel-inner">
  @foreach($car->images as $key => $imagesItem)
    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
      <div class="img rounded" style="background-image: url('{{ $baseUrl . $imagesItem->image_path }}');">
        <div class="overlay"></div>
        
      </div>
    </div>
    @endforeach
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
      				<div class="text text-center">
      					<span class="subheading">Tên xe</span>
      					<h2>{{$car->name}}</h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Km đã chạy
		                	<span>{{$car->odo}} km</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Bảo Dưỡng
		                	<span>Định kì</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Ghế
		                	<span>{{$car->seat}} ghế</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>

  
      	</div>
		  <div class="container mt-5">
			<div class="row">
			  <div class="col-md-12 rental-card">
				<h3 class="text-center">Báo giá thuê xe</h3>
				<ul class="custom-list">
                @if($car->price_ngay)
            <li><strong>Thuê ngày:</strong> {{ $car->price_ngay }} VNĐ</li>
        @endif

        @if($car->price_thang)
            <li><strong>Thuê tháng:</strong> {{ $car->price_thang }} VNĐ</li>
        @endif

        @if($car->price_nam)
            <li><strong>Thuê năm:</strong> {{ $car->price_nam }} VNĐ</li>
        @endif

				  
				</ul>
			  </div>
			</div>
			 <!-- Form nhập thông tin khách hàng -->

		  </div>
      	<div class="row">
			<div class="col-md-12"  >
				{!! $car->content !!}
			  </div>

      
				</div>
				
				<div id="rental-form" class="card p-4 mt-4" >
					<h4>Nhập thông tin khách hàng</h4>
					@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('booking.store') }}" method="POST">
    @csrf
    <input type="hidden" name="car_id" value="{{ $car->id }}">

    <label for="customer_name">Họ tên:</label>
    <input type="text" name="customer_name" required>

    <label for="phone_number">Số điện thoại:</label>
    <input type="text" name="phone_number" required>

    <label for="start_date">Ngày bắt đầu:</label>
    <input type="date" name="start_date" required>

    <label for="end_date">Ngày kết thúc:</label>
    <input type="date" name="end_date" required>

    <label for="pickup_location">Địa điểm nhận xe:</label>
    <input type="text" name="pickup_location" required>

    <button type="submit">Đặt xe</button>
</form>
				  </div>
				</div>
      </div>
    </section>

            
    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Choose Car</span>
            <h2 class="mb-2">Related Cars</h2>
          </div>
        </div>
        <div class="row">
        @foreach ($relatedCars as $relatedCar)
        	<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ $baseUrl . $relatedCar->feature_image_path }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">{{$relatedCar->name}}</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">{{ $relatedCar->category->name ?? 'Không có danh mục' }}</span>
	    						<p class="price ml-auto">{{ number_format($relatedCar->price_ngay, 0, ',', '.') }}VNĐ <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('car.detail', ['id' => $relatedCar->id]) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			
    			@endforeach
        </div>
    	</div>
    </section>
    

 
@endsection



















