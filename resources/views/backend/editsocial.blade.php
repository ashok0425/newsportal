@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Update Social Links</p>
        <form class="forms-sample" action="{{route('admin.social.update')}}" method="POST">
        @csrf

          <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Find in facebook" aria-label="Recipient's username" aria-describedby="basic-addon2" name="facebook" value="{{$social->facebook}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-facebook" type="button">
                    <i class="mdi mdi-facebook"></i>
                  </button>
                </div>
              </div>
        
            @error('facebok')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
          <div class="form-group">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Find in twitter" aria-label="Recipient's username" aria-describedby="basic-addon2" name="twitter" value="{{$social->twitter}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-twitter" type="button">
                    <i class="mdi mdi-twitter"></i>
                  </button>
                </div>
              </div>
        
            @error('twitter')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Find in instagram" aria-label="Recipient's username" aria-describedby="basic-addon2" name="instagram" value="{{$social->instagram}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-instagram" type="button">
                    <i class="mdi mdi-instagram"></i>
                  </button>
                </div>
              </div>
        
            @error('instagram')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Find in linkedin" aria-label="Recipient's username" aria-describedby="basic-addon2" name="linkedin" value="{{$social->linkedin}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-linkedin" type="button">
                    <i class="mdi mdi-linkedin"></i>
                  </button>
                </div>
              </div>
        
            @error('linkedin')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Find in youtube" aria-label="Recipient's username" aria-describedby="basic-addon2" name="youtube" value="{{$social->youtube}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-youtube" type="button">
                    <i class="mdi mdi-youtube"></i>
                  </button>
                </div>
              </div>
        
            @error('youtube')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
         
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>

    
@endsection