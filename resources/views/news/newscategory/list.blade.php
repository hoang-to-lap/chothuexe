@php 
$baseUrl = 'http://127.0.0.1:8081'
@endphp




@extends('layouts.master')

@section('title')
    <title>Carforrent</title>
@endsection


@section('content')
    

 <!-- content -->
    

            
 <section class="ftco-section">
      <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach($blog as $blogitem)
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a href="blog-single.html" class="block-20 img" style="background-image: url('{{ $baseUrl . $blogitem->image_path }}');">
              </a>
              <div class="text px-md-5 pt-4">
              	
                <h3 class="heading mt-2"><a href="#">{{$blogitem->title}}</a></h3>
                <p>{{$blogitem->description}}</p>
                <p><a href="{{ route('new.detail', ['id' => $blogitem->id]) }}" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
        @endforeach

        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
            {{ $blog->links('pagination::bootstrap-4') }}
            </div>
          </div>
        </div>
      </div>
    </section>

 
@endsection



















