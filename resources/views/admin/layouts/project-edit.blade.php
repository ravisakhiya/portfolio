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
                    <form action="{{ route('projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>
                                       Name
                                    </strong>
                                    <input class="form-control" name="name" placeholder="Name" type="text" value="{{ $project->name }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        Image
                                    </label>
                                    <input class="form-control" name="image" type="file" value="{{ $project->image }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="productimage">
                                        Category
                                    </label>
                                    <select class="form-control" name="category">
                                    @foreach ($categorys as $CategoryData)
                                        <option value="{{ $CategoryData['slug'] }}" {{ $CategoryData['slug'] == $project->category  ? 'selected' : ''}}>{{ $CategoryData['name'] }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>
                                            Detail:
                                        </strong>
                                        <textarea class="form-control" name="detail" placeholder="Detail" cols="50" rows="5">{{ $project->detail }}</textarea>
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
