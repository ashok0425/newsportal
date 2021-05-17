@extends('admin.admin_master')
@section('main-content')
 <div class="card-body">
    <div class="template-demo" style="display:flex; margin-bottom:1rem;">
        <a type="button" class="btn btn-primary btn-icon-text"style="margin-left:auto;" href="{{route('admin.photogallery.create')}}"> <i class="mdi mdi-plus btn-icon-prepend" ></i>Add New Photo</a>
        
    </div>
                    <div class="table-responsive">
                      <table class="table-striped table text-center" id="table_id" class="display">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th> Image</th>
                            <th>Title</th>
                            <th> Type</th>
                            <th> Date</th>
                            <th> Operation </th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($photo as $item)
                            <tr>
                                <td class="py-1">
                                  {{$i++}}
                                </td>
                            <td> <img src="{{asset($item->img)}}" alt="{{asset($item->img)}}"></td>
                            <td > {{Str::limit($item->title_np,40) }}</td>

                            <td > 
@if ($item->type==1)
<span class="badge badge-success">Big Photo</span>
@else
<span class="badge badge-info">Small Photo</span>
@endif

                            </td>
                            
<td>
  {{ $item->created_at->diffForHumans() }}
</td>
                                <td>
                                
                                    <a href="{{route('admin.photogallery.delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Delete</a></td>
                              
                              </tr>
                          
                            @endforeach
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
@endsection
