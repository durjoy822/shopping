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
                                                    <h5>Product Information</h5>
                                                </div>
                                                <form action="{{ route('admin.product.store') }}" method="post"
                                                    class="theme-form theme-form-2 mega-form" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                                Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="name" type="text"
                                                                    placeholder="Product Name">
                                                            </div>
                                                            @error('name')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                                Brand</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="brand" type="text"
                                                                    placeholder="Product Brand">
                                                            </div>
                                                            @error('brand')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Product
                                                                Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" name="details" placeholder="Product Description" cols="3" rows="3"></textarea>
                                                            </div>
                                                            @error('details')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Product
                                                                Old price</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="old_price"
                                                                    placeholder="Product old price">
                                                            </div>
                                                            @error('old_price')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Product
                                                                New price</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="price"
                                                                    placeholder="Product new price">
                                                            </div>
                                                            @error('price')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label
                                                                class="col-sm-2 col-form-label form-label-title">Tag</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="tag"
                                                                    placeholder="Tag">
                                                            </div>
                                                            @error('tag')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Main
                                                                Category select</label>
                                                            <div class="col-sm-10">
                                                                <select class="js-example-basic-single w-100" id="main_category"
                                                                    name="category">
                                                                    <option disabled="" selected>Main category Menu
                                                                    </option>
                                                                    @foreach ($cateories as $cat)
                                                                        <option value="{{ $cat->id }}">
                                                                            {{ $cat->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('category')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Sub
                                                                Category select</label>
                                                            <div class="col-sm-10">
                                                                <select class="js-example-basic-single w-100" id="sub_category"
                                                                    name="subCategory">
                                                                    <option disabled selected value="">Select sub
                                                                        Category</option>

                                                                </select>
                                                                @error('category')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label
                                                                class="col-sm-2 col-form-label form-label-title">SKU</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="sku"
                                                                    placeholder="sku">
                                                            </div>
                                                            @error('sku')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Total
                                                                strock Quantity</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="quantity"
                                                                    placeholder="Total strock quantity">
                                                            </div>
                                                            @error('quantity')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label for="img1"
                                                                class="col-sm-2 col-form-label form-label-title">Product
                                                                Image 1</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" id="img1" type="file"
                                                                    name="image_one">
                                                            </div>
                                                            @error('image_one')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label for="img2"
                                                                class="col-sm-2 col-form-label form-label-title">Product
                                                                Image 2</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="file" id="img2"
                                                                    name="image_two">
                                                            </div>
                                                            @error('image_two')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label for="img3"
                                                                class="col-sm-2 col-form-label form-label-title">Product
                                                                Image 3</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" id="img3" type="file"
                                                                    name="image_three">
                                                            </div>
                                                            @error('image_three')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label
                                                                class="col-sm-2 col-form-label form-label-title">Visibility
                                                                Status</label>
                                                            <div class="col-sm-10 d-inline">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status" checked="" value="Published">
                                                                    <label class="form-check-label">
                                                                        Published
                                                                    </label>
                                                                </div>

                                                                <input class="form-check-input" type="radio"
                                                                    name="status" value="Scheduled">
                                                                <label class="form-check-label">
                                                                    Scheduled
                                                                </label>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status" value="Hidden">
                                                                    <label class="form-check-label">
                                                                        Hidden
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="my-2" style="padding-left: 12vw">
                                                                <button type="submit"
                                                                    class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
                                                            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#main_category').on('change', function() {
                let id = $(this).val();
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'GET',
                    url: 'subcategory/' + id,
                    success: function(response) {
                        var response = JSON.parse(response);
                        $('#sub_category').empty();
                        $('#sub_category').append(
                            `<option value="0" disabled selected>Select your Sub Category</option>`
                        );
                        response.forEach(element => {
                            $('#sub_category').append(
                                `<option value="${element['id']}">${element['name']}</option>`
                            );
                        });
                    }
                });
            });
        });
    </script>
@endsection
