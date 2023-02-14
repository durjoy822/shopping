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
                                        <div class="card m-0" style="padding: 0px">
                                            <div class="card-body " style="padding-bottom: 0px">
                                                <div class="card-header-2">
                                                    <h5>Product List</h5>
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
                                                                            <th>SL</th>
                                                                            <th>Product Image</th>
                                                                            <th>Product Name</th>
                                                                            <th>Category</th>
                                                                            <th>Current Qty</th>
                                                                            <th>Price</th>
                                                                            <th>Status</th>
                                                                            <th>Option</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                    @foreach($products as $product)
                                                                        <tr>
                                                                            <td>{{$product->id}}</td>
                                                                            <td>
                                                                               <a href="{{route('admin.product.details',$product->id)}}">
                                                                                   <img src="{{asset($product->image_one)}}" class="img-fluid" style="width: 100px">
                                                                               </a>
                                                                            </td>

                                                                            <td><a href="{{route('admin.product.details',$product->id)}}">{{$product->name}}</a></td>
                                                                            @php $category=\App\Models\Category::find($product->category) @endphp
                                                                            <td><a href="javascript:void(0)">{{ $category->name }} </a></td>
                                                                            <td>{{$product->quantity}}</td>
                                                                            <td class="td-price">{{$product->price}} tk</td>
                                                                            <td class="h6"><span>
                                                                                    @if($product->status=='Published')
                                                                                       <span  class="text-info"> <i class="fa-regular fa-eye"></i>publish</span>
                                                                                        @elseif($product->status=='Scheduled')
                                                                                        <span  class="text-warning"><i class="fa-solid fa-calendar-days"></i> Scheduled</span>
                                                                                    @else
                                                                                        <span  class="text-danger"><i class="fa-regular fa-eye-slash"></i> Hidden</span>

                                                                                        @endif
                                                                                </span></td>

                                                                            <td>
                                                                                <ul>
                                                                                    <li>

                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="{{route('admin.product.edit',['id'=>$product->id])}}" ><button class="btn btn-info btn-sm">Edit</button></a>
                                                                                            <form action="{{route('admin.product.delete')}}" method="post" style="display: inline">@csrf
                                                                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                                                                <input type="submit" class="btn btn-primary btn-sm" value="Delete" onclick="return confirm('Are you sure? you want to delete this?');">
                                                                                            </form>

                                                                                    </li>
                                                                                </ul>
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
