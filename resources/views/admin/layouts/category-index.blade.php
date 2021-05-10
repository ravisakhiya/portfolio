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
    <?php dd($project);?>
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
                                Project Category
                            </h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('category.create') }}">
                                Create New Product
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
            <table class="table table-bordered">
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Category Name
                    </th>
                    <th>
                        Slug
                    </th>
                    <th width="280px">
                        Action
                    </th>
                </tr>
                <?php $i = 0;?>
                @foreach ($categorys as $category)
                <tr>
                    <td>
                        {{ ++$i }}
                    </td>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        {{ $category->slug }}
                    </td>
                    <td>
                        <form action="{{ route('category.destroy',$category->id) }}" method="POST">


                                <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">
                                    Show
                                </a>
                                <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">
                                    Edit
                                </a>


                            @csrf
                    @method('DELETE')
                            <button class="btn btn-danger" type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
</div>
@endsection
