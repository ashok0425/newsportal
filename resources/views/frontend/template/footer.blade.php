<!-- Footer Start -->
@php
$contact=DB::table('websiteseetings')->first();
@endphp
<div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
            </a>
   
<div class="row">
    <div class="col-md-3  col-3">
<ul style="padding: 0;list-style:none;margin:.5rem 0;">
    <li>
        @if (session()->get('lang')=='english')
    Address
@else 


Address
@endif
    </li>
    <li>
        @if (session()->get('lang')=='english')
       Phone 
    @else 

    Phone 
    @endif

    </li>
    <li>
        @if (session()->get('lang')=='english')
     Email 
    @else 

    Email 
    @endif

    </li>
</ul>
    </div>

    <div class="col-md-9 col-9" style="text-align:left;">
        <ul style="padding: 0;list-style:none;margin:.5rem 0;">
            <li>
                @if (session()->get('lang')=='english')
      {{$contact->address_en}}
        @else 
        
     {{$contact->address_en}}

        @endif
            </li>
            <li>
                @if (session()->get('lang')=='english')
                 {{$contact->phone_en}}

            @else 
        
             {{$contact->phone_en}}

            @endif
        
            </li>
            <li>
                @if (session()->get('lang')=='english')
                 {{$contact->email}}

            @else 
        
             {{$contact->email}}

            @endif
        
            </li>
        </ul>
        </div>
    </div>
</div>

        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Categories</h4>
            <div class="d-flex flex-wrap m-n1">
                @php
                $category=DB::table('categories')->get();
            @endphp
            @foreach ($category as $item)
            <a href="{{route('allpost',['catid'=>$item->id,'category_en'=>'allcategory','subid'=>'cat','subcategory_en'=>'allproduct'])}}" class="btn btn-sm btn-outline-secondary m-1">{{$item->category_np}}</a>
            @endforeach
            
      
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Tags</h4>
            @php
            $category=DB::table('subcategories')->get();
        @endphp
            <div class="d-flex flex-wrap m-n1">
        
                @foreach ($category as $item)
                <a href="{{route('allpost',['catid'=>'sub','category_en'=>'allsubcat','subid'=>$item->id,'subcategory_en'=>'allproduct'])}}" class="btn btn-sm btn-outline-secondary m-1">{{$item->subcategory_np}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
                <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
            </div>
        </div>
    </div>
</div>