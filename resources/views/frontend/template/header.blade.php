     <!-- Topbar Start -->
     @php
        $breakingnews=DB::table('posts')->where('headline',1)->limit(5)->get();
    @endphp
     <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 150px;">Breaking News</div>
                    <marquee onmouseover="this.stop()" onmouseout="this.start()" class="pt-2">
                        @foreach ($breakingnews as $item)
                    <a href="" >
                     
                        {{strip_tags($item->title_np) }}
                    </a>
                    @endforeach
    
                    </marquee>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                @php
                $update=DB::table('posts')->latest()->first()
            @endphp
                {{ date('d')}}
                {{ date('M')}}
                {{date('D')}},
                {{date('Y')}}
                @if($update)
                Updated {{carbon\carbon::parse($update->created_at)->diffForHumans()}} 
                @endif
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="{{asset('frontend/img/ads-700x70.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->
 
    @php
    $category=DB::table('categories')->get();
@endphp
 
    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-3">
                    <ul class="nav navbar-nav">
                        <li>

                            <a href="{{route('/')}}" class="fa fa-home breadcrumb-item"> 
                            </a> 
                        </li>

                         @foreach ($category as $item)
                         @php
                        
                         $sub=DB::table('subcategories')->where('category_id',"$item->id")->get();
                     @endphp
                       @php
                         
                       $sub=DB::table('subcategories')->where('category_id',"$item->id")->get();
                   @endphp
                         <li @if(count($sub)>0) class="dropdown" @endif  >
                         <a href="{{route('allpost',['catid'=>$item->id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}"  @if(count($sub)>0) class="dropdown-toggle" data-toggle="dropdown" @endif >
                                 @if (session()->get('lang')=='english')
                               {{ Str::upper($item->category_en)}}
                               <b class="caret"></b>
                                     @else 
                              <b style="margin-left:1.5rem;">  {{ Str::upper($item->category_np)}}
                                 <b class="caret"></b>
                             </b>
                             
                                 @endif
                             </a>
@if (count($sub)>0)
    
                         <ul class="dropdown-menu">
                             
                            @php
                         
                                $sub=DB::table('subcategories')->where('category_id',"$item->id")->get();
                            @endphp
                            @foreach ($sub as $item)
                                <li ><a href="{{route('allpost',['catid'=>'sub','category_en'=>'allsubcat','subid'=>$item->id,'subcategory_en'=>'allproduct'])}}" >
                                    
                                 @if (session()->get('lang')=='english')
                                 {{ Str::upper($item->subcategory_en)}}
                                       @else 
                                  {{ $item->subcategory_np}}

                                   @endif
                                 </a> </li>
                            @endforeach
                         </ul>
@endif

                         </li>
                         @endforeach
                     </ul>
                </div>
              
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
 
 
 