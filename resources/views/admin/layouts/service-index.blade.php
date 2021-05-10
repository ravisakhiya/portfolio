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
                    <div class="pull-left">
                        <h2>
                            Laravel 7 CRUD Example from scratch - ItSolutionStuff.com
                        </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('service.create') }}">
                            Create New Product
                        </a>
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
            <table class="table table-bordered">
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        icons
                    </th>
                    <th>
                        title
                    </th>
                    <th>
                        Details
                    </th>
                    <th width="280px">
                        Action
                    </th>
                </tr>
                <?php $i = 0?>
                @foreach ($service as $servicedata)
                <tr>
                    <td>
                        {{ ++$i }}
                    </td>
                    <td>
                        {{ $servicedata->icons }}
                    </td>
                    <td>
                        {{ $servicedata->title }}
                    </td>
                    <td>
                        {{ $servicedata->detail }}
                    </td>
                    <td>
                        <form action="{{ route('service.destroy',$servicedata->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('service.edit',$servicedata->id) }}">
                                Edit
                            </a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">
                                Delete
                            </button>
                        </form>

                        {{-- <a class="btn btn-info" href="{{ route('banner.show',$servicedata->id) }}">
                            Show
                        </a> --}}

                    </td>
                </tr>
                @endforeach
            </table>
            {{-- {!! $banner->links() !!} --}}
        </div>
    </section>
</div>
@endsection
