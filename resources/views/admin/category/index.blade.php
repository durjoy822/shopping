@extends('admin.layout.master')
@section('content')
    {{-- <div class="card"> --}}

    <div class="page-body">
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
                            <div
                                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Categorie List</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <table id="myDataTable"
                                        class="table overflow-scroll  table-hover align-middle mb-0 table-responsive"
                                        style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Categorie</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key => $cat)
                                                <tr>
                                                    <td><strong>#000{{ $key + 1 }}</strong></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
