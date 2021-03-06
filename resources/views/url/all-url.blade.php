@extends('layouts.app')
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
                        {{-- <a href="{{ route('add.category') }}">Add category</a> --}}
                        <h3 class="text-center">Tracking <Table></Table></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <table class="table table-bordered white-bg">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Url Name</th>
                                            <th>User Ip</th>
                                            <th>OS</th>
                                            <th>Browser</th>
                                            <th>device</th>
                                            <th>Location</th>
                                            <th>Lat</th>
                                            <th>Lon</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user_info as $user)
                                         <tr>
                                             <td>{{ $loop->index+1 }}</td>
                                             <td>{{ url('redirect',$user->urlInfo->short_url) }}</td>
                                             <td>{{ $user->ip }}</td>
                                             <td>{{ $user->os }}</td>
                                             <td>{{ $user->browser }}</td>
                                             <td>{{ $user->device }}</td>
                                             <td>{{ $user->location }}</td>
                                             <td>{{ $user->lat }}</td>
                                             <td>{{ $user->lon }}</td>
                                         </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- for paginate page -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
