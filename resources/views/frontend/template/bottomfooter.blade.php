<section class="bottom-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                @php
                    $contact=DB::table('websiteseetings')->first();
                @endphp
                <div class="copyright">						
                    All rights reserved © {{date('Y')}} {{$contact->copy}}
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="btm-foot-menu">
                    <ul>
                        <li><a href="{{route('frontend.aboutus')}}">About US</a></li>
                        <li><a href="{{route('frontend.term')}}">term & conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="btm-foot-menu">
                    <ul>
                        <li><a href="infozey.com">Developed by : {{$contact->developer}}</a></li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>