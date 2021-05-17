@section('title')
@if(session()->get('lang')== 'english')
{{$catfirstposts->title_en}}
@else
{{$catfirstposts->title_np}}
@endif	

@endsection
@extends('frontend.frontend_master')
@section('main-content')


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a href="{{route('/')}}" class="fa fa-home breadcrumb-item"> 
                </a> 	
                <a class="breadcrumb-item" href="#">  {{$catfirstposts->category->category_np}}</a>
                <span class="breadcrumb-item active"> 
{{--                    
                    {{$catfirstposts->subcategory->subcategory_np}} --}}
               </span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0"> {{$catfirstposts->category->category_np}}</h3>
                            
                            </div>
                        </div>
                        @foreach ( $catposts  as $item)
                    
                
                        <div class="col-lg-10 offset-lg-1">
                            <div class="position-relative mb-3 d-flex">
                                <img class="img-fluid w-100" src="{{asset($item->img)}}" style="height: 225px!important">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">{{$item->category->category_np}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$item->post_date}}</span>
                                    </div>
                                    <a class="h4" href="{{route('singlepage',['id'=>$item->id])}}">{!!$item->title_np!!}</a>
                                    <p class="m-0">{!! Str::limit($item->detail_np,150)!!} <a href="{{route('singlepage',['id'=>$item->id])}}">Learn More...</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <br>
                        <br>

                        <div class="col-md-4 offset-md-4">
                          {{  $catposts->links()}}
                        </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    @include('frontend.template.social')










@endsection