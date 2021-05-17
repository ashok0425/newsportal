@extends('admin.admin_master')
@section('main-content')
<div class="card-body">
    <h4 class="card-title">Add New Photo</h4>
<form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('admin.photogallery.store')}}">
      @csrf
        <div class="row">  {{-- row start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Title Nepali</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="title_np">
                    @error('title_np')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
             
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Title English</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="title_en">
                    @error('title_en')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
            </div>
        </div>{{-- row end --}}
        
     
        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label>Image upload (500X300)</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                      <span class="input-group-append">
                        <input class="file-upload-browse btn btn-primary" type="file" name="img">
                      </span>
                    </div>
                    @error('img')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
            </div>
        </div>{{-- row end --}}

        <div class="row">
           <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputName1">Photo Type</label>
                <select class="form-control" name="type">
             
              <option value="1">Big Photo </option>
              <option value="0">Small Photo </option>
                                
                                  </select>
                                  @error('type')
                                  <span class="text-danger"> {{$message}}</span>  
                                 @enderror
              </div>
           </div>

        </div>
        {{-- row end  --}}
       <br>
      <button type="submit" class="btn btn-primary mr-2">Add</button>
    </form>
  </div>
    
@endsection