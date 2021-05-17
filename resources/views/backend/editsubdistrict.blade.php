@extends('admin.admin_master')
@section('main-content')

    <div class="card-body">
        <p class="card-description font-weight-bold">Edit Subdistrict</p>
    <form class="forms-sample" action="{{route('admin.subdistrict.update',['id'=>$sub->id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Select Category </label>
            <select name="district" id="" class="form-control">
            <option value="">--select category</option>

                @foreach ($category as $item)
                <option value="{{$item->id}}" {{$item->id==$sub->cat->id ? 'selected':''}} >{{$item->district_en}}&nbsp;|&nbsp;{{$item->district_np}}</option>
                    
                @endforeach
            

            </select>
            @error('district')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Subdistrict English</label>
          <input type="text" class="form-control" placeholder="Subdistrict English" name="subdistrict_en" value="{{$sub->district_en}}">
            @error('subdistrict_en')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subdistrict Nepali</label>
            <input type="text" class="form-control"  placeholder="Subdistrict Nepali" name="subdistrict_np" value="{{$sub->district_np}}">
            @error('subdistrict_np')
            <span class="text-danger"> {{$message}}</span>  
           @enderror
          </div>
         
          <button type="submit" class="btn btn-primary mr-2">save</button>
        <a class="btn btn-dark" href="{{route('admin.subcategory')}}">Back</a>
        </form>
      </div>
    
@endsection