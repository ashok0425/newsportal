<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Trending</h3>
                            
                        </div>
                    </div>
                    
                        @php
                        $posts=DB::table('posts')->where('first_section',1)->join('categories','posts.category_id','categories.id')->select('posts.*','categories.category_np')->inRandomOrder()->limit(2)->get();
                    
                        @endphp
                        @foreach ($posts as $item)
                            
                        <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{asset($item->img)}}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">{{$item->category_np}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$item->post_date}}</span>
                                </div>
                                <a class="h4" href="">{!!$item->title_np!!}</a>
                                <p class="m-0">{!!Str::limit($item->detail_np,120)!!}</p>
                            </div>
                        </div>
                        </div>
                        
                        @endforeach
                        @php
                        $posts=DB::table('posts')->where('big_thumbnail',1)->join('categories','posts.category_id','categories.id')->select('posts.*','categories.category_np')->inRandomOrder()->limit(4)->get();
                    
                        @endphp
                        @foreach ($posts as $item)
                        <div class="col-lg-6">
                        <div class="d-flex mb-3">
                            <img src="{{asset($item->img)}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">{!!$item->category_np!!}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$item->post_date}}</span>
                                </div>
                                <a class="h6 m-0" href="">{!!$item->title_np!!}</a>
                            </div>
                        </div>
                    </div>

                        @endforeach
                </div>


             
            </div>

          @include('frontend.template.facebookpage')
           
            </div>
        </div>
    </div>
