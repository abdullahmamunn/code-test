@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">

        </div>

       <div class="row">
            <!-- Basic example -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center" class="panel-title">Add Url</h1>
                </div>
                <div class="panel-body">
                    <form role="form" action="{{route('url.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter Url </label>
                            <input type="text" class="form-control @error('categoryname') is-invalid @enderror input-lg" name="url"
                                value="{{ old('url') }}" required autocomplete="categoryname" autofocus placeholder="Add Url">
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit"
                                    class="btn btn-primary btn-rounded w-lg waves-effect waves-light m-t-15">Add</button>
                            </div>
                        </div>
                    </form>
                </div><!-- panel-body -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <table class="table table-bordered white-bg">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Url</th>
                                        <th>Short Url</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($urls as $url)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $url->url }}</td>
                                            <td>
                                                <a href="{{ route('short_url', $url->short_url) }}">{{ url( 'redirect',$url->short_url) }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- for paginate page -->
                        </div>
                    </div>
                </div>
            </div> <!-- panel -->
        </div> <!-- col-->
       </div>

    </div>
</div>

@endsection
