@extends('admin.admin_master')
@section('main-content')

 <div class="card-body">
    <div class="template-demo" style="display:flex; margin-bottom:1rem;">
        <a type="button" class="btn btn-primary btn-icon-text"style="margin-left:auto;" href="{{route('admin.district.create')}}"> <i class="mdi mdi-plus btn-icon-prepend" ></i>Add District</a>
        
    </div>
                    <div class="table-responsive">
                      <table class="table-striped table text-center" id="table_id" class="display">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th> District Nepali </th>
                            <th> District English </th>
                            <th> Operation </th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($dist as $item)
                            <tr>
                                <td class="py-1">
                                  {{$i++}}
                                </td>
                            <td> {{$item->district_np}}</td>
                            <td> {{$item->district_en}}</td>

                                <td>
                                  
                                <a href="{{route('admin.district.edit',['id'=>$item->id])}}  " class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{route('admin.district.delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Delete</a></td>
                              
                              </tr>
                            @endforeach
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
@endsection
