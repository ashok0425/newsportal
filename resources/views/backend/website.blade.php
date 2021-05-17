@extends('admin.admin_master')
@section('main-content')
<div class="card-body">
    <h4 class="card-title">Update Website Setting</h4>
<form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('admin.website.update',['id'=>$post->id])}}">
      @csrf
        <div class="row">  {{-- row start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Phone Nepali</label>
                <input type="text" class="form-control"  name="phone_np" value="{{ $post->phone_np}} ">
                    @error('phone_np')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
             
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Phone English</label>
                    <input type="text" class="form-control" name="phone_en" value=" {{$post->phone_en}} ">
                    @error('phone_en')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
            </div>
        </div>{{-- row end --}}
        <div class="row">  {{-- row start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Address Nepali</label>
                <input type="text" class="form-control"  name="address_np" value="{{ $post->address_np}} ">
                    @error('address_np')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
             
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Address English</label>
                    <input type="text" class="form-control" name="address_en" value=" {{$post->address_en}} ">
                    @error('address_en')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
            </div>
        </div>{{-- row end --}}
     
        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="email" value="{{ $post->email}}">
                    @error('email')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
             
            </div>
          
        </div>{{-- row end --}}

        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label>Image New upload (500X300)</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                      <span class="input-group-append">
                        <input class="file-upload-browse btn btn-primary" type="file" name="img">
                      </span>
                    </div>
                <div class="form-group">
<br>
                    <label>Present Image</label>
                    <br>
                <img src="{{asset($post->logo)}}" alt="" width="200" width="100">
                <input type="hidden" name="oldimage" value="{{$post->img}}">
                </div>
                    @error('img')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
            </div>
        </div>{{-- row end --}}
        

        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleTextarea1">About us English</label>
                        <textarea class="form-control" id="summernote1" rows="4" name="about_en">{{strip_tags($post->aboutus_en)}}</textarea>
                    @error('about_en')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleTextarea1">About us Nepali</label>
                        <textarea class="form-control" id="summernote2" rows="4" name="detail_np">{{strip_tags($post->aboutus_np)}}</textarea>
                    @error('about_np')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
                </div>
        </div>{{-- row end --}}
        
     <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleTextarea1">Term & conditions English</label>
                        <textarea class="form-control" id="summernote1" rows="4" name="term_en">{{strip_tags($post->term_en)}}</textarea>
                    @error('term_en')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleTextarea1">Term & conditions Nepali</label>
                        <textarea class="form-control" id="summernote2" rows="4" name="term_np">{{strip_tags($post->term_np)}}</textarea>
                    @error('term_np')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
                </div>
        </div>{{-- row end --}}
        <div class="row">  {{-- row start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Developer</label>
                <input type="text" class="form-control"  name="developer" value="{{ $post->developer}} ">
                    @error('developer')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
             
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Copyright</label>
                    <input type="text" class="form-control" name="copy" value=" {{$post->copy}} ">
                    @error('copy')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
            </div>
        </div>{{-- row end --}}
       <br>
      <button type="submit" class="btn btn-primary mr-2">Save</button>
    </form>
  </div>
    
@endsection