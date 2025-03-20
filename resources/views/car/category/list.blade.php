@php 
$baseUrl = 'http://127.0.0.1:8081'
@endphp




@extends('layouts.master')

@section('title')
    <title>Carforrent</title>
@endsection


@section('content')
    

 <!-- content -->
    

            

 <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
                @foreach($cars as $car)
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ $baseUrl . $car->feature_image_path }}');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html">{{$car->name}}</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">{{ $car->category->name ?? 'Không có danh mục' }}</span>
	    						<p class="price ml-auto">{{ number_format($car->price_ngay, 0, ',', '.') }}VNĐ <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('car.detail', ['id' => $car->id]) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    		
    	

    	
    	
    	

    		
    		
    		

    		
    		
    @endforeach			
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
            {{ $cars->links('pagination::bootstrap-4') }}
            </div>
          </div>
        </div>
    	</div>
    </section>
    

 
@endsection



















