@php 
$baseUrl = 'http://127.0.0.1:8081'
@endphp




@extends('layouts.master')

@section('title')
    <title>Carforrent</title>
@endsection


@section('content')
    

 <!-- content -->
    		
 <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">{{$blog->title}}</h2>
            <p>{!! $blog->content !!}</p>
            <p>
              <img src="images/image_7.jpg" alt="" class="img-fluid">
            </p>
           

      
            <p>
              <img src="{{$baseUrl . $blog->image_path}}" alt="" class="img-fluid">
            </p>
            
           

     

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
        

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              @foreach( $recentPosts as  $recentPostsItem)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{$baseUrl . $recentPostsItem->image_path}}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{ route('new.detail', ['id' => $recentPostsItem->id]) }}"> {{ $recentPostsItem->title}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>{{$recentPostsItem->category->name}}</a></div>
                    
                  </div>
                </div>
              </div>
              @endforeach
             
             
            </div>

           

           
          </div>

        </div>
      </div>
    </section>
    

 
@endsection



















