@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Edit Category</p>
        <form class="forms-sample" action="{{route('admin.seo.update')}}" method="POST">
        @csrf
  
    
          <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="meta author" aria-label="Recipient's username" aria-describedby="basic-addon2" name="meta_author" value="{{$seo->meta_author}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-facebook" type="button">
                    Meta Author
                  </button>
                </div>
              </div>
        
            @error('meta_author')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
          <div class="form-group">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="meta title" aria-label="Recipient's username" aria-describedby="basic-addon2" name="meta_title" value="{{$seo->meta_title}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-twitter" type="button">
                   Meta Title
                  </button>
                </div>
              </div>
        
            @error('meta_title')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="meta keyword" aria-label="Recipient's username" aria-describedby="basic-addon2" name="meta_keyword" value="{{$seo->meta_keyword}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-instagram" type="button">
                    Meta Keyword
                  </button>
                </div>
              </div>
        
            @error('meta_keyword')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="meta description" aria-label="Recipient's username" aria-describedby="basic-addon2" name="meta_description" id="summernote1">
                    {{$seo->meta_description}}
                </textarea>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-linkedin" type="button">
                    Meta Description
                  </button>
                </div>
              </div>
        
            @error('meta_description')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="google analytics" aria-label="Recipient's username" aria-describedby="basic-addon2" name="google_analytics" id="summernote2">{{$seo->google_analytics}}</textarea>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-youtube" type="button">
                    Google Analytics
                  </button>
                </div>
              </div>
        
            @error('google_analytics')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
          <div class="form-group">
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="alexa analytics" aria-label="Recipient's username" aria-describedby="basic-addon2" name="alexa_analytics" id="summernote3">{{$seo->alexa_analytics}}</textarea>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-twitter" type="button">
                    Alexa Analytics
                  </button>
                </div>
              </div>
        
            @error('alexa_analytics')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="google verification" aria-label="Recipient's username" aria-describedby="basic-addon2" name="google_verification" value="{{$seo->google_verification}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-facebook" type="button">
                    Google Verification
                  </button>
                </div>
              </div>
        
            @error('google_verification')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>

    
@endsection