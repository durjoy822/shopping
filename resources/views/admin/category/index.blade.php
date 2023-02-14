@extends('admin.layout.master')
@section('content')
    <body>
    <div class="page-body">
        <div class="card">
            <div class="card-body">
                <!-- New Product Add Start -->
                <div class="container-fluid">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card m-0" style="padding: 0px">
                                        <div class="card-body " style="padding-bottom: 0px">
                                            <div class="card-header-2">
                                                <h5>Category List</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div>
                                                        <div class="table-responsive table-desi table-product">
                                                            <table class="table table-1d all-package">
                                                                <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Image</th>
                                                                    <th>Category</th>
                                                                    <th>Date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>

                                                                <tbody>
                                                                @foreach($categories as $key => $cat)
                                                                    <tr>
                                                                        <td><strong>#000{{ $key + 1 }}</strong></td>
                                                                        <td><img src="{{asset($cat->logo)}}" class="img-fluid" style="width: 100px"></td>
                                                                        <td>{{ $cat->name }}</td>
                                                                        <td>{{ date('F j, Y', strtotime($cat->created_at)) }}</td>
                                                                        <td>
                                                                            <div class="btn-group" role="group"
                                                                                 aria-label="Basic outlined example">
                                                                                <a href="{{ route('admin.category.edit', $cat->id) }}"
                                                                                   class="btn btn-warning">
                                                                                    <i class="fa-solid fa-pen-to-square text-white"></i></a>
                                                                                <a href="{{ route('admin.category.delete', $cat->id) }}"
                                                                                   class="btn btn-primary deleterow">
                                                                                    <i class="fa-regular fa-trash-can text-white"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pagination-box">
                                                    <nav class="ms-auto me-auto " aria-label="...">
                                                        <ul class="pagination pagination-primary">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="javascript:void(0)"
                                                                   tabindex="-1">Previous</a>
                                                            </li>

                                                            <li class="page-item active">
                                                                <a class="page-link" href="javascript:void(0)">1</a>
                                                            </li>

                                                            <li class="page-item">
                                                                <a class="page-link" href="javascript:void(0)">2 <span
                                                                        class="sr-only">(current)</span>
                                                                </a>
                                                            </li>

                                                            <li class="page-item">
                                                                <a class="page-link" href="javascript:void(0)">3</a>
                                                            </li>

                                                            <li class="page-item">
                                                                <a class="page-link" href="javascript:void(0)">Next</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->
    <!-- footer Start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
    </body>
@endsection

