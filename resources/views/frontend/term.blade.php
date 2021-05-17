@extends('frontend.frontend_master')
@section('main-content')
<div class="container">
    @php
    $about=DB::table('websiteseetings')->first();
@endphp
@if (session()->get('lang')=='english')
{!!$about->term_en!!} 
@else 
{!!$about->term_np!!} 
@endif
</div>

<!-- /.gallery-section-close -->
@endsection