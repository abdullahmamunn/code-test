@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            {{-- <div class="col-sm-12">
                <h4 class="pull-left page-title">Student Info</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Ebot</a></li>
                    <li><a href="#">Student</a></li>
                    <li class="active">Add</li>
                </ol>
            </div> --}}
        </div>

       <div class="row">
            <!-- Basic example -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1  class="text-center" class="panel-title">Add Url</h1>
                </div>
                <div class="panel-body">
                    <form role="form" action="{{route('url.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter Url</label>
                            <input type="text" class="form-control @error('categoryname') is-invalid @enderror input-lg" name="url"
                                value="{{ old('categoryname') }}" required autocomplete="categoryname" autofocus placeholder="Add Url">
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit"
                                    class="btn btn-primary btn-rounded w-lg waves-effect waves-light m-t-15">Add</button>
                                <a class="btn btn-primary btn-rounded w-lg waves-effect waves-light m-t-15"
                                    href="{{URL::to('/')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
       </div>

    </div>
</div>

@endsection
