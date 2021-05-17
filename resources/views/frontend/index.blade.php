@extends('frontend.frontend_master')
@section('main-content')
   

    <!-- Top News Slider End -->

    @include('frontend.template.add1')

      <!-- Main News Slider Start -->

          <!-- Top News Slider Start -->
@include('frontend.template.banner')

    <!-- Main News Slider End -->

    {{-- popular news  --}}
@include('frontend.template.popular')
   {{-- all Caetgory  --}}
   @include('frontend.template.catshort')
 {{-- social  --}}
 @include('frontend.template.social')
@endsection