<div class="col-lg-4 pt-3 pt-lg-0">
    <!-- Social Follow Start -->
    @php
        $social=DB::table('socials')->first();
    @endphp
    <div class="pb-3">
        <div class="bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Follow Us</h3>
        </div>

        <div class="d-flex mb-3">
            <a href="{{$social->facebook}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                <small class="fab fa-facebook-f mr-2"></small><small>Facebook</small>
            </a>
            <a href="{{$social->twitter}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                <small class="fab fa-twitter mr-2"></small><small>Twitter</small>
            </a>
        </div>
        <div class="d-flex mb-3">
            <a href="{{$social->youtube}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                <small class="fab fa-youtube mr-2"></small><small>Youtube</small>
            </a>
            <a href="{{$social->instagram}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                <small class="fab fa-instagram mr-2"></small><small>Instagram</small>
            </a>
        </div>
       
    </div>
    <!-- Social Follow End -->

    <!-- Newsletter Start -->
    <div class="pb-3">
        <div class="bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Like us on Facebook</h3>
        </div>
        <div class="bg-light text-center p-4 mb-3">
           
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
