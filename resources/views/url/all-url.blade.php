@extends('backend.layouts.app')
@section('content')
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Student Info</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Ebot</a></li>
                        <li><a href="#">Student</a></li>
                        <li class="active">Add</li>
                    </ol>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading">
                        <a href="{{ route('add.category') }}">Add category</a>
                        <h3 class="text-center">Category Table</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <table class="table table-bordered white-bg">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                    
                                            <th>Category Name</th>
                                            <th>Category Image</th>
                                            <th>Aciton</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $row)
                                        <tr class="success">
                                            <td>
                                                <h5> {{$row->id}}</h5>
                                            </td>
                                         
                                            <td>
                                                <h5>{{$row->cate_name}}</h5>
                                            </td>

                                            <td>
                                                <img src="{{ url('upload/categories/'.$row->image) }}" style="height: 200px;">

                                            </td>

                                            <td class="text-left">
                                                <a href="{{route('show',$row->id)}}" class="btn  btn-inverse btn-sm btn-raised">View</a>
                                                <a href="{{route('edit',$row->id)}}" class="btn btn-info btn-sm btn-raised">Edit</a>
                                                {{-- <a href="{{route('deleteCategory',$row->id)}}" class="btn btn-warning btn-sm btn-raised"id="delete">Delete</a> --}}
                                               {{-- <a class="btn btn-sm btn-danger delete" id="" title="Delete" data-id="{{$data->id}}" data-token="{{csrf_token()}}" data-route="{{route('homepages.news.delete')}}"><i class="fa fa-trash"></i></a> --}}
                                                
                                                <a class="btn btn-warning btn-sm btn-raised delete"id="" title="Delete" data-route="{{route('deleteCategory')}}" data-id="{{$row->id}}" data-token="{{csrf_token()}}">Delete</a>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- for paginate page -->
                                {{ $category->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
