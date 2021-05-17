<div class="container-fluid py-3">
    @php
   $popularnews=DB::table('posts')->join('categories','posts.category_id','categories.id')->select('posts.*','categories.category_np')->orderBy('id','desc')->get();

@endphp
    <div class="container">
        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Popular News</h3>
        
        </div>
       
        <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
            @foreach ($popularnews as $item)
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid w-100 h-100" src="{{asset($item->img)}}" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-1" style="font-size: 13px;">
                        <a class="text-white" href="{{route('allpost',['catid'=>$item->category_id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}">{{$item->category_np}}</a>
                        <span class="px-1 text-white">/</span>
                        <a class="text-white" href="">{{$item->post_date}}</a>
                    </div>
                    <a class="h4 m-0 text-white" href="{{route('singlepage',['id'=>$item->id])}}">{{$item->title_np}}</a>
                </div>
            </div>
        @endforeach
           
        </div>   
      
    </div>
</div>