@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Weekly Info</h4>
                    <ol class="breadcrumb pull-right">

                    </ol>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading">
                        {{-- <a href="{{ route('add.category') }}">Add category</a> --}}
                        <h3 class="text-center">Weekly Report <Table></Table></h3>
                        <a href="{{ route('pdf',['type'=>'weekly']) }}">Download pdf</a>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <table class="table table-bordered white-bg">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Url</th>
                                            <th>Shortening Url</th>
                                            <th>Created At</th>
                                            <th>Most Visited</th>
                                            <th>Show More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($url_info as $url)
                                         <tr>
                                             <td>{{ $loop->index+1 }}</td>
                                             <td>{{ $url->url }}</td>
                                             <td>{{ url('redirect',$url->short_url) }}</td>
                                             <td>{{ $url->created_at->diffForHumans() }}</td>
                                             <td>{{ $url->visitors_count }}</td>
                                             <td>
                                                 <a href="{{ route('show.more',$url->id) }}">show more</a>
                                             </td>

                                         </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- for paginate page -->

                            </div>
                        </div>
                        {{ $url_info->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
