@extends('admin.admin_master')
@section('main-content')
<div class="card-body">
    <h4 class="card-title">Edit Post</h4>
<form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('admin.post.update',['id'=>$post->id])}}">
      @csrf
        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputName1">Title Nepali</label>
                <input type="text" class="form-control"  name="title_np" value="{{ $post->title_np}} ">
                    @error('title_np')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
             
            </div>
            
        </div>{{-- row end --}}
        <div class="row">  {{-- row start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Select Category</label>

                    <select name="category" id="category" class="form-control">
            
                            @foreach ($category as $item)
                            <option value="{{$item->id}}" {{$item->id==$post->category_id ?'selected':''}}>{{$item->category_en}}&nbsp;|&nbsp;{{$item->category_np}}</option>
                                
                            @endforeach
                         
            
                        </select>
                    @error('category')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                </div>
              
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputName1">Select Subcategory</label>
    
                        <select name="subcategory" id="subcategory" class="form-control">
                            @foreach ($subcategory as $item)
                            <option value="{{$item->id}}" {{$item->id==$post->subcategory_id ?'selected':''}}>{{$item->subcategory_en}}&nbsp;|&nbsp;{{$item->subcategory_np}}</option>
                                
                            @endforeach
                            </select>
                        @error('subcategory')
                        <span class="text-danger"> {{$message}}</span>  
                       @enderror
                    </div>
                  </div>
            </div>
        </div>{{-- row end --}}
        <div class="row">  {{-- row start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Select District</label>

                    <select name="district" id="districts" class="form-control">
            
                            @foreach ($district as $item)
                            <option value="{{$item->id}}" {{$item->id==$post->district_id ?'selected':''}}>{{$item->district_en}}&nbsp;|&nbsp;{{$item->district_np}}</option>
                                
                            @endforeach
                         
            
                        </select>
                    @error('district')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                </div>
              
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputName1">Select Subistrict</label>
    
                        <select name="subdistrict" id="subdistrict" class="form-control">

                            @foreach ($subdistrict as $item)
                            <option value="{{$item->id}}" {{$item->id==$post->subdistrict_id ?'selected':''}}>{{$item->district_en}}&nbsp;|&nbsp;{{$item->district_np}}</option>
                                
                            @endforeach
                
                            </select>
                        @error('subdistrict')
                        <span class="text-danger"> {{$message}}</span>  
                       @enderror
                    </div>
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
                <img src="{{asset($post->img)}}" alt="" width="200" width="100">
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
                    <label for="exampleInputName1">Tag Nepali</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="tags_np" value="{{ $post->tags_np}}">
                    @error('tags_np')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
             
            </div>
           
        </div>{{-- row end --}}
        <div class="row">  {{-- row start --}}
            
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleTextarea1">Detail Nepali</label>
                        <textarea class="form-control" id="summernote2" rows="4" name="detail_np">{!!$post->detail_np!!}</textarea>
                    @error('detail_np')
                    <span class="text-danger"> {{$message}}</span>  
                   @enderror
                  </div>
                </div>
        </div>{{-- row end --}}
        <br>

        <hr>
        <h4 class="text-center">Extra Option</h4>
        <hr>
       <br>

        <div class="row">
            <div class="col-md-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="headline" value="1" {{$post->headline==1 ? "checked":''}}> Headline <i class="input-helper"></i></label>
            </div>
            <div class="col-md-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="bigthumbnail" value="1" {{$post->big_thumbnail==1 ? "checked":''}}> General bigthumbnail <i class="input-helper"></i></label>
            </div> <div class="col-md-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="first_section" value="1" {{$post->first_section==1 ? "checked":''}}>First Section <i class="input-helper" ></i></label>
            </div> <div class="col-md-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="first_section_thumbnail" value="1" {{$post->first_section_thumbnail==1 ? "checked":''}}> First Section Bigthumbnail <i class="input-helper"></i></label>
            </div>
        </div>
        {{-- row end  --}}
       <br>
      <button type="submit" class="btn btn-primary mr-2">Save</button>
    </form>
  </div>
    
@endsection