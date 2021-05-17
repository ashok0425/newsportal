  <!-- Category News Slider Start -->
  @php
     $cat= DB::table('categories')->first();
     $post= DB::table('posts')->where('category_id',$cat->id)->orderBy('id','desc')->get();

  @endphp
  <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">{{$cat->category_np}}</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                 
                 @foreach ($post as $posts)
                 <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset($posts->img)}}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                        <div class="mb-2" style="font-size: 13px;">
                            <a href="{{route('allpost',['catid'=>$posts->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$cat->category_np}}</a>
                            <span class="px-1">/</span>
                            <span>{{$posts->post_date}}</span>
                        </div>
                        <a class="h4 m-0" href="{{route('singlepage',['id'=>$posts->id])}}">{!!$posts->title_np!!}</a>
                    </div>
                </div>
                 @endforeach
                </div>
            </div>
            

            <div class="col-lg-6 py-3">
                @php
                $cat= DB::table('categories')->skip(1)->first();
                $post= DB::table('posts')->where('category_id',$cat->id)->orderBy('id','desc')->get();
           
             @endphp
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">{{$cat->category_np}}</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                 
                 @foreach ($post as $posts)
                 <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset($posts->img)}}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                        <div class="mb-2" style="font-size: 13px;">
                            <a href="{{route('allpost',['catid'=>$posts->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$cat->category_np}}</a>
                            <span class="px-1">/</span>
                            <span>{{$posts->post_date}}</span>
                        </div>
                        <a class="h4 m-0" href="{{route('singlepage',['id'=>$posts->id])}}">{!!$posts->title_np!!}</a>
                    </div>
                </div>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    @php
    $cat= DB::table('categories')->skip(2)->first();
    $post= DB::table('posts')->where('category_id',$cat->id)->orderBy('id','desc')->get();

 @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">{{$cat->category_np}}</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                 
                 @foreach ($post as $posts)
                 <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset($posts->img)}}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                        <div class="mb-2" style="font-size: 13px;">
                            <a href="{{route('allpost',['catid'=>$posts->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$cat->category_np}}</a>
                            <span class="px-1">/</span>
                            <span>{{$posts->post_date}}</span>
                        </div>
                        <a class="h4 m-0" href="{{route('singlepage',['id'=>$posts->id])}}">{!!$posts->title_np!!}</a>
                    </div>
                </div>
                 @endforeach
                </div>
            </div>
            

            <div class="col-lg-6 py-3">
                @php
                $cat= DB::table('categories')->skip(3)->first();
                $post= DB::table('posts')->where('category_id',$cat->id)->orderBy('id','desc')->get();
           
             @endphp
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">{{$cat->category_np}}</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                 
                 @foreach ($post as $posts)
                 <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset($posts->img)}}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                        <div class="mb-2" style="font-size: 13px;">
                            <a href="{{route('allpost',['catid'=>$posts->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$cat->category_np}}</a>
                            <span class="px-1">/</span>
                            <span>{{$posts->post_date}}</span>
                        </div>
                        <a class="h4 m-0" href="{{route('singlepage',['id'=>$posts->id])}}">{!!$posts->title_np!!}</a>
                    </div>
                </div>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    @php
    $cat= DB::table('categories')->skip(4)->first();
    $post= DB::table('posts')->where('category_id',$cat->id)->orderBy('id','desc')->get();

 @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">{{$cat->category_np}}</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                 
                 @foreach ($post as $posts)
                 <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset($posts->img)}}" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                        <div class="mb-2" style="font-size: 13px;">
                            <a href="{{route('allpost',['catid'=>$posts->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$cat->category_np}}</a>
                            <span class="px-1">/</span>
                            <span>{{$posts->post_date}}</span>
                        </div>
                        <a class="h4 m-0" href="{{route('singlepage',['id'=>$post->id])}}">{!!$posts->title_np!!}</a>
                    </div>
                </div>
                 @endforeach
                </div>
            </div>
            

            <div class="col-lg-6 py-3">
                @php
                $livetv= DB::table('livetvs')->where('status',1)->first();
            
           
             @endphp
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Live Tv</h3>
                </div>
                {{-- <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative"> --}}
{{--                  
                 @foreach ($post as $posts)
                 <div class="position-relative">
                    <img class="img-fluid w-100" src="img/news-500x280-1.jpg" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                        <div class="mb-2" style="font-size: 13px;">
                            <a href="{{route('allpost',['catid'=>$posts->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$cat->category_np}}</a>
                            <span class="px-1">/</span>
                            <span>{{$posts->post_date}}</span>
                        </div>
                        <a class="h4 m-0" href="">{!!$posts->title_np!!}</a>
                    </div>
                </div>
                 @endforeach
                </div> --}}
            {!!$livetv->embed_link!!}
                
            </div>
        </div>
    </div>
</div>
<!-- Category News Slider End -->