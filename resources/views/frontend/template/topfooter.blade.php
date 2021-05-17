<section>
                    {{-- fetching logo  --}}

    @php
    
    $logos=DB::table('websiteseetings')->first();
@endphp
    <div class="container-fluid">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-6 col-sm-6" >
                    <div class="foot-logo">
                    <img src="{{asset($logos->logo)}}"  style="height: 110px;" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    {{-- fetching social links  --}}
                    @php
                    $social=DB::table('socials')->first();
                @endphp
                     <div class="social">
                        <ul>
                        <li><a href="{{$social->facebook}}" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$social->twitter}}" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$social->instagram}}" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
                         
                            <li><a href="{{$social->youtube}}" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</section>