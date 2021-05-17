
    @php
    $posts=DB::table('posts')->where('first_section_thumbnail',1)->join('categories','posts.category_id','categories.id')->select('posts.*','categories.category_np')->orderBy('id','desc')->get();

    @endphp
      <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                   
                    @foreach ($posts as $post)
                    <div class="position-relative overflow-hidden" style="height: 435px;">
                        <img class="img-fluid h-100" src="{{asset($post->img)}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1">
                                <a class="text-white" href="{{route('allpost',['catid'=>$post->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$post->category_np}}</a>
                                <span class="px-2 text-white">/</span>
                                <a class="text-white"> {{

                                
                                $post->post_date}}</a>
                            </div>
                            <a class="h2 m-0 text-white font-weight-bold" href="{{route('singlepage',['id'=>$post->id])}}">
                            
                                @if (session()->get('lang')=='english')
                                {{$post->title_en}}
                                @else 
                                {{$post->title_np}}
                                @endif</a>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                    </div>
                    @php
                    $category=DB::table('categories')->limit(4)->inRandomOrder()->get();
                @endphp
 @foreach ($category as $item)
 <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
    <img class="img-fluid w-100 h-100" src="" style="object-fit: cover;">
    <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
        {{$item->category_np}}
    </a>
</div>
 @endforeach                
                  
                </div>
            </div>
        </div>
    </div>