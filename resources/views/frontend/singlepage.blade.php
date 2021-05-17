@section('title')
@if(session()->get('lang')== 'english')
{{$singlepost->title_en}}
@else
{{$singlepost->title_np}}


@endif	

@endsection
@extends('frontend.frontend_master')
@section('main-content')
    	  <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="{{route('/')}}"><i class="fa fa-home"></i></a>
                <a class="breadcrumb-item" href="#">{{ $singlepost->category->category_np }} </a>
                {{-- <a class="breadcrumb-item" href="#">{{ $singlepost->subcategory->subcategory_np }}</a> --}}
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->
	
		
				



				<div class="container-fluid py-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<!-- News Detail Start -->
								<div class="position-relative mb-3">
									<img class="img-fluid w-100" src="{{asset($singlepost->img)}}" style="object-fit: cover;">
									<div class="overlay position-relative bg-light">
										<div class="mb-3">
											<a href="{{route('allpost',['catid'=>$singlepost->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$singlepost->category->category_np}}</a>
											<span class="px-1">/</span>
											<span>{{$singlepost->post_date}}</span>
										</div>
										<div>
											<h3 class="mb-3">{{$singlepost->title_np}}</h3>
										<p>
											{!!$singlepost->detail_np!!}
										</p>
											
										</div>
									</div>
								</div>
								<!-- News Detail End -->
	
								<!-- Comment Form Start -->
							
								<!-- Comment Form End -->
							</div>
							<div class="col-lg-4 ">
								@php
								$post= DB::table('posts')->where('category_id',$singlepost->category_id)->orderBy('id','desc')->get();
						   
							 @endphp
								<div class="bg-light py-2 px-4 mb-3">
									<h3 class="m-0">Related News</h3>
								</div>
								<div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative">
								 
								 @foreach ($post as $posts)
								 <div class="position-relative">
									<img class="img-fluid w-100" src="{{asset($posts->img)}}" style="object-fit: cover;">
									<div class="overlay position-relative bg-light">
										<div class="mb-2" style="font-size: 13px;">
											<a href="{{route('allpost',['catid'=>$posts->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$singlepost->category->category_np}}</a>
											<span class="px-1">/</span>
											<span>{{$posts->post_date}}</span>
										</div>
										<a class="h4 m-0" href="{{route('singlepage',['id'=>$posts->id])}}">{!!$posts->title_np!!}</a>
									</div>
								</div>
								 @endforeach
								</div>
							</div>
			
							@include('frontend.template.social')


						</div>
					</div>
				</div>
			
				<!-- News With Sidebar End -->
@endsection