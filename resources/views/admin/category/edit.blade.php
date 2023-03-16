@extends('admin.layout.master')
@section('content')
    <body>
    <div class="page-body">
        <div class="card">
            <div class="card-body">
                <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Category Edit</h5>
                                            </div>
                                            <form action="{{ route('admin.category.update') }}" method="post" class="theme-form theme-form-2 mega-form" enctype="multipart/form-data">@csrf
                                               <input type="hidden" name="id" value="{{$category->id}}">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label for="name" class="form-label-title col-sm-2 mb-0">Category Name</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" value="{{$category->name}}" id="name" name="name" type="text" placeholder="Product Name">
                                                        </div>
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-sm-2 col-form-label form-label-title">Parent category Select</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single w-100"  name="parent_id" >
                                                                <option disabled="" selected>Select parent Menu</option>
                                                                @foreach ($categories as $cat)
{{--                                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>--}}
                                                                    <option value="{{ $cat->id }}"  {{ old('parent_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('parent_id')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label for="logo" class="col-sm-2 col-form-label form-label-title">Category Image</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" id="logo" type="file" name="logo">
                                                        </div>
                                                        @error('logo')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label for="logo" class="col-sm-2 col-form-label form-label-title">Old logo</label>
                                                        <div class="col-sm-10">
                                                         <img src="{{asset($category->logo)}}" style="width: 70px">
                                                        </div>

                                                    </div>

                                                    <div class="my-2 " style="padding-left: 12vw">
                                                        <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
                                                    </div>
                                                </div>
                                            </form>
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
                <!-- footer En -->
            </div>
            <!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End -->

    </body>
@endsection




