@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">More Info</h4>
                    <ol class="breadcrumb pull-right">

                    </ol>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading">
                        <h3 class="text-center">Visitors Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <table class="table table-bordered white-bg">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Url</th>
                                            <th>Ip</th>
                                            <th>Browser</th>
                                            <th>Device</th>
                                            <th>Location</th>
                                            <th>latitude </th>
                                            <th>longitude</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($visitors as $info)
                                         <tr>
                                             <td>{{ $loop->index+1 }}</td>
                                             <td>{{ url('redirect',$info->urlInfo->short_url) }}</td>
                                             <td>{{ $info->ip }}</td>
                                             <td>{{ $info->browser }}</td>
                                             <td>{{ $info->device }}</td>
                                             <td>{{ $info->location }}</td>
                                             <td>{{ $info->lat }}</td>
                                             <td>{{ $info->lon }}</td>
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
