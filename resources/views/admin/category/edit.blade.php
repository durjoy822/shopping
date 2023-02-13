@extends('admin.layout.master')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="card-body">
                                            <div class="border-0 mb-4">
                                                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                                    <h3 class="fw-bold mb-0">Categories Add</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Row end  -->
                                    <div class="card-body">
                                        <form action="{{ route('admin.category.update',$id) }}" method="POST">@csrf
                                            <div class="row">
                                                <div class="mb-4 row align-items-center col-md-6">
                                                    <label class="form-label">Parent category Select</label>
                                                    <select class="form-select" size="3" aria-label="size 3 select example"
                                                            name="parent_id">
                                                        @foreach ($categories as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('parent_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Category Name</label>
                                                    <input type="text" class="form-control" name="name" value="{{$category->name}}">                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Category Image</label><br>
                                                    <input type="file" name="logo" class="form-control">
                                                    @error('logo')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="my-2">
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
        </div>
    </div>
@endsection

