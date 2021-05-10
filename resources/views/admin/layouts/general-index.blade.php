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
    {{--
    <?php dd($banner);?>
    --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="d-flex justify-content-between">
                        <div class="pull-left">
                            <h2>
                                Banner Section
                            </h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('general.create') }}">
                                Add New
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>
                    {{ $message }}
                </p>
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Site title</th>
                        <th>Favicon</th>
                        <th>header Logo</th>
                        <th>footer Logo</th>
                        <th>footer_desc</th>
                        <th>Facebook</th>
                        <th>instagram</th>
                        <th>twitter</th>
                        <th>linkedin</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Tags</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 0?>
                    @foreach ($generals as $generaldata)
                    <tr>
                        <td>
                            {{ ++$i }}
                        </td>
                        <td>
                            {{ $generaldata->site_title }}
                        </td>
                        <td>
                            <img src="{{ asset('uploads/logo/'. $generaldata->favicon) }}" class="img-fluid" width="150">
                        </td>
                        <td>
                            {{-- {{ $banner->image }} --}}
                            <img src="{{ asset('uploads/logo/'.$generaldata->header_logo) }}" class="img-fluid" width="150">
                        </td>
                        <td>
                            {{-- {{ $banner->image }} --}}
                            <img src="{{ asset('uploads/logo/'.$generaldata->footer_logo) }}" class="img-fluid" width="150">
                        </td>
                        <td>
                            {{ $generaldata->footer_desc }}
                        </td>
                        <td>
                            {{ $generaldata->facebook }}
                        </td>
                        <td>
                            {{ $generaldata->instagram }}
                        </td>
                        <td>
                            {{ $generaldata->twitter }}
                        </td>
                        <td>
                            {{ $generaldata->linkedin }}
                        </td>
                        <td>
                            {{ $generaldata->mobile }}
                        </td>
                        <td>
                            {{ $generaldata->email }}
                        </td>
                        <td>
                            {{ $generaldata->address }}
                        </td>
                        <td>
                            {{ $generaldata->tags }}
                        </td>
                        <td>
                            {{-- <a class="btn btn-info" href="{{ route('banner.show',$generaldata->id) }}">
                                Show
                            </a> --}}
                            <a class="btn btn-primary" href="{{ route('general.edit',$generaldata->id) }}">
                                Edit
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
