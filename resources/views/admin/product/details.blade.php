@extends('admin.layout.master')
@section('content')
    <!-- Page Body Start-->
{{--        <div class="page-body-wrapper">--}}
            <!-- Page Sidebar Start-->
            <div class="page-body">
                <div class="title-header title-header-block package-card">
                    <div>
                        <h5>Product Details </h5>
                    </div>
                    <div class="card-order-section">
                        <ul>

                            <li>Product Id:  {{$product->id}}</li>
                            <li class="text-warning" >Old Price:  {{$product->old_price}} Tk</li>

                        </ul>
                    </div>
                </div>

                <!-- tracking table start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bg-inner cart-section order-details-table">
                                        <div class="row g-4">
                                            <div class="col-xl-8">
                                                <div class="table-responsive table-details">
                                                    <table class="table cart-table table-borderless">
                                                        <thead>
                                                        <tr>
                                                            <th colspan="2">Items</th>
                                                            <th class="text-end" colspan="2">
                                                                <a href="{{route('admin.product.edit',['id'=>$product->id])}}" class="theme-color">Edit
                                                                    Items</a>
                                                            </th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr class="table-order">
                                                            <td>
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{asset($product->image_one)}}" class="img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <p>Product Name</p>
                                                                <h5>{{$product->name}}</h5>
                                                            </td>
                                                            <td>
                                                                <p>Quantity</p>
                                                                <h5>{{$product->quantity}}</h5>
                                                            </td>
                                                            <td>
                                                                <p>Price</p>
                                                                <h5>{{$product->price}} Tk</h5>
                                                            </td>
                                                        </tr>

                                                        <tr class="table-order">
                                                            <td>
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{asset($product->image_two)}}" class="img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                            </td>
{{--                                                            <td>--}}
{{--                                                                <p>Product Name</p>--}}
{{--                                                                <h5>Slim Fit Plastic Coat</h5>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                <p>Quantity</p>--}}
{{--                                                                <h5>5</h5>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                <p>Price</p>--}}
{{--                                                                <h5>$63.54</h5>--}}
{{--                                                            </td>--}}
                                                        </tr>

                                                        <tr class="table-order">
                                                            <td>
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{asset($product->image_three)}}" class="img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                            </td>
{{--                                                            <td>--}}
{{--                                                                <p>Product Name</p>--}}
{{--                                                                <h5>Men's Sweatshirt</h5>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                <p>Quantity</p>--}}
{{--                                                                <h5>1</h5>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                <p>Price</p>--}}
{{--                                                                <h5>$63.54</h5>--}}
{{--                                                            </td>--}}
                                                        </tr>
                                                        </tbody>

{{--                                                        <tfoot>--}}
{{--                                                        <tr class="table-order">--}}
{{--                                                            <td colspan="3">--}}
{{--                                                                <h5>Subtotal :</h5>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                <h4>$55.00</h4>--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}

{{--                                                        <tr class="table-order">--}}
{{--                                                            <td colspan="3">--}}
{{--                                                                <h5>Shipping :</h5>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                <h4>$12.00</h4>--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}

{{--                                                        <tr class="table-order">--}}
{{--                                                            <td colspan="3">--}}
{{--                                                                <h5>Tax(GST) :</h5>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                <h4>$10.00</h4>--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}

{{--                                                        <tr class="table-order">--}}
{{--                                                            <td colspan="3">--}}
{{--                                                                <h4 class="theme-color fw-bold">Total Price :</h4>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                <h4 class="theme-color fw-bold">$6935.00</h4>--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        </tfoot>--}}
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="order-success">
                                                    <div class="row g-4">
                                                        <h4>Product Brand:<span class="text-warning"> {{$product->brand}}</span> </h4>


                                                        <h4>Product Details</h4>
                                                        <ul class="order-details">
                                                            <li>{{$product->details}}</li>

                                                        </ul>

{{--                                                        <h4>shipping address</h4>--}}
{{--                                                        <ul class="order-details">--}}
{{--                                                            <li>Gerg Harvell</li>--}}
{{--                                                            <li>568, Suite Ave.</li>--}}
{{--                                                            <li>Austrlia, 235153 Contact No. 48465465465</li>--}}
{{--                                                        </ul>--}}

{{--                                                        <div class="payment-mode">--}}
{{--                                                            <h4>payment method</h4>--}}
{{--                                                            <p>Pay on Delivery (Cash/Card). Cash on delivery (COD)--}}
{{--                                                                available. Card/Net banking acceptance subject to device--}}
{{--                                                                availability.</p>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="delivery-sec">--}}
{{--                                                            <h3>expected date of delivery: <span>october 22, 2018</span>--}}
{{--                                                            </h3>--}}
{{--                                                            <a href="order-tracking.html">track order</a>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- section end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tracking table end -->

                <div class="container-fluid">
                    <!-- footer start-->
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- tracking section End -->
        </div>
    </div>
@endsection
