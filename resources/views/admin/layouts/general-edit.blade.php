@extends('admin.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-capitalize">
                        {{ str_replace("-", " ", Request::segment(1)) }}
                    </h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/dashboard')}}">
                                {{ Request::segment(1) }}
                            </a>
                        </li>
                        <?php $segments = '';?>
                        @foreach(Request::segments() as $segment)
                        <?php $segments .= '/' . $segment;?>
                        <li class="breadcrumb-item active text-capitalize">
                            {{ str_replace("-", " ", $segment) }}
                        </li>
                        @endforeach
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>
                            Whoops!
                        </strong>
                        There were some problems with your input.
                        <br>
                            <br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                    @endforeach
                                </ul>
                            </br>
                        </br>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    @endif
                    <form action="{{ route('general.update',$general->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>
                                        Site Title:
                                    </strong>
                                    <input class="form-control" name="site_title" value="{{ $general->site_title }}" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        Favicon
                                    </label>
                                    <input class="form-control-file" name="favicon" value="{{ $general->favicon }}" type="file">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        Header Logo
                                    </label>
                                    <input class="form-control-file" name="header_logo" value="{{ $general->header_logo }}" type="file">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        Footer Logo
                                    </label>
                                    <input class="form-control-file" name="footer_logo" value="{{ $general->footer_logo }}" type="file">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        Facebook
                                    </label>
                                    <input class="form-control" name="facebook" value="{{ $general->facebook }}" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        instagram
                                    </label>
                                    <input class="form-control" name="instagram" value="{{ $general->instagram }}" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        twitter
                                    </label>
                                    <input class="form-control" name="twitter" value="{{ $general->twitter }}" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        linkedin
                                    </label>
                                    <input class="form-control" name="linkedin" value="{{ $general->linkedin }}" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        mobile
                                    </label>
                                    <input class="form-control" name="mobile" value="{{ $general->mobile }}" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        email
                                    </label>
                                    <input class="form-control" name="email" value="{{ $general->email }}" type="email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        address
                                    </label>
                                    <input class="form-control" name="address" value="{{ $general->address }}" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        tags
                                    </label>
                                    <input class="form-control" name="tags" value="{{ $general->tags }}" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>
                                            Footer Description:
                                        </strong>
                                        <textarea class="form-control" name="footer_desc" placeholder="Detail" style="height:150px">{{ $general->footer_desc }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
