@php
    $seo=DB::table('seos')->first();
    $logo=DB::table('websiteseetings')->first();
@endphp
@section('title')
{{$seo->meta_title}}
@endsection
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf_token" content="{{csrf_token()}}">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{$seo->meta_author}}">
    <meta name="keyword" content="{{$seo->meta_keyword}}">
    <meta name="description" content="{{$seo->meta_description}}">

    <link rel="icon" href="{{asset($logo->logo)}}" type="image/icon type">

        <title>@yield('title')</title>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    </head>
    <body>
        
    <!-- header-start -->
    @include('frontend.template.header')
<!-- /.header-close -->

@yield('main-content')

    
	 

 
   




	
@include('frontend.template.footer')
	
    
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
            <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->
	    <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    
    
        <!-- Template Javascript -->
        <script src="{{asset('frontend/js/main.js')}}"></script>
      
<script>
   $(document).ready(function() {
         $('select[name="district_id"]').on('change', function(){
             var district_id = $(this).val();
             if(district_id) {
                 $.ajax({
                     url: "{{  url('/get/subdistrict/frontend') }}/"+district_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        $("#subdistrict_id").empty();
                          $.each(data,function(key,value){
                              $("#subdistrict_id").append('<option value="'+value.id+'">'+value.district_en+'</option>');
                              });

                     },
                    
                 });
             } else {
                 alert('danger');
             }
         });
     });

     
        </script>
	</body>
</html> 