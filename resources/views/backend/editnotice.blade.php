@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Edit Notice</p>
        <form class="forms-sample" action="{{route('admin.notice.update')}}" method="POST">
        @csrf
  
        <div class="form-group">
          @if ($notice->status==1)
          <a href="{{route('notice.deactive')}}" class="btn btn-danger btn-fw">Deactive</a>
          <br>
          <small class="text-success mt-2">Notice is Actived now</small>
@else
      
      <a href="{{route('notice.active')}}" class="btn btn-success btn-fw">Active</a>
      <br>
          <small class="text-danger mt-2">Notice is Deactived now</small>
      @endif
        </div>
        
       
        <div class="form-group">
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="google verification" aria-label="Recipient's username" aria-describedby="basic-addon2" name="notice" id="summernote1">{{$notice->notice}}</textarea>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-facebook" type="button">
                    Notice
                  </button>
                </div>
              </div>
        
            @error('notice')
             <span class="text-danger"> {{$message}}</span>  
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>

    
@endsection