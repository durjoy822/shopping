@extends('web.layouts.app')
@section('title', 'Check Out')
@section('content')

    <section class="my-5">
        <div class="container">
            <h2 class="mb-3">Checkout</h2>
            <hr>

            <form class="form" action="{{ route('placeOrder') }}" method="POST">
                @csrf
                <div class="row justify-content-center">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="full_name">Full Name:</label>
                                    <input type="text" id="full_name" name="full_name" class="form-control"
                                        value="{{ $user->full_name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ $user->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Company or Organization Name:</label>
                                    <input type="text" id="company_name" name="company_name" class="form-control"
                                        value="{{ $user->company_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" id="address" name="address" class="form-control" required
                                        value="{{ $user->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <input type="text" id="country" name="country" class="form-control"
                                        value="{{ $user->country }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" id="city" name="city" class="form-control" required
                                        value="{{ $user->city }}">
                                </div>
                                <div class="form-group">
                                    <label for="zip">Zip Code:</label>
                                    <input type="text" id="zip" name="zip" class="form-control" reuired
                                        value="{{ $user->zip }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required
                                        value="{{ $user->phone }}">
                                </div>
                                <div class="form-group">
                                    <input name="price" type="hidden"
                                        value="{{ $cart->sum('products.price') + $cart->sum('videos.price') + $cart->sum('contents.price') }}">
                                    @foreach ($cart as $item)
                                        @if ($item->product_type == 'image')
                                            <input name="prods[]" type="hidden" value="{{ $item->products->id }}">
                                            <input type="hidden" name="sellers_id[]"
                                                value="{{ $item->products->sellers_id }}">
                                            <input type="hidden" name="cart_id[]" value="{{ $item->id }}">
                                        @endif

                                        @if ($item->product_type == 'video')
                                            <input name="prods[]" type="hidden" value="{{ $item->videos->id }}">
                                            <input type="hidden" name="sellers_id[]"
                                                value="{{ $item->videos->sellers_id }}">
                                            <input type="hidden" name="cart_id[]" value="{{ $item->id }}">
                                        @endif

                                        @if ($item->product_type == 'Content')
                                            <input name="prods[]" type="hidden" value="{{ $item->contents->id }}">
                                            <input type="hidden" name="sellers_id[]"
                                                value="{{ $item->contents->sellers_id }}">
                                            <input type="hidden" name="cart_id[]" value="{{ $item->id }}">
                                        @endif
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow">
                            {{-- <div class="card-header">
                  <h4>Price Details</h4>
                </div> --}}
                            <div class="card-body">

                                <h4>Price Details</h4>
                                <hr>
                                <table class="table table-borderless mb-0">
                                    <tr>
                                        <th>Total Item</th>
                                        <td>:</td>
                                        <td class="text-right">{{ count($cart) }} item(s)</td>
                                    </tr>
                                    <tr>
                                        <th>Total Amount</th>
                                        <td>:</td>
                                        <td class="text-right">BDT
                                            {{ $cart->sum('products.price') + $cart->sum('videos.price') + $cart->sum('contents.price') }}
                                        </td>
                                    </tr>
                                </table>
                                <hr>

                                <h4>Payment</h4>
                                <hr>
                                <table class="table table-borderless mb-0">

                                    <div class="box m_banking">
                                        <!--<div class="form-group">-->
                                        <!--    <label for="banking_name">Transection Method :</label> <br>-->
                                        <!--    <div class="form-check form-check-inline">-->
                                        <!--        <input class="form-check-input" type="radio" name="banking_name"-->
                                        <!--            id="Nagad" value="Bank Transfer">-->
                                        <!--        <label class="form-check-label" for="Nagad">Bank Transfer</label>-->
                                        <!--    </div>-->
                                        <!--    <div class="form-check form-check-inline">-->
                                        <!--        <input class="form-check-input" type="radio" name="banking_name"-->
                                        <!--            id="Rocket" value="Wire">-->
                                        <!--        <label class="form-check-label" for="Rocket">Wire Transfer</label>-->
                                        <!--    </div>-->
                                        <!--    <div class="form-check form-check-inline">-->
                                        <!--        <input class="form-check-input" type="radio" name="banking_name"-->
                                        <!--            id="Bkash" value="Bkash">-->
                                        <!--        <label class="form-check-label" for="Bkash">Bkash</label>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <!--<div class="form-group">-->
                                        <!--    <label for="transaction_id">Transaction ID:</label>-->
                                        <!--    <input type="text" id="transaction_id" name="transaction_id"-->
                                        <!--        class="form-control" value="{{ $user->transaction_id }}">-->
                                        <!--</div>-->

                                        <!--<div class="form-group">-->
                                        <!--    <label for="sender_number">Sender Number or Email:</label>-->
                                        <!--    <input type="text" id="sender_number" name="sender_number"-->
                                        <!--        class="form-control" value="{{ $user->sender_number }}">-->
                                        <!--</div>-->
                                        <!--<div class="form-group">-->
                                        <!--    <label for="amount">Amount:</label>-->
                                        <!--    <input type="text" id="amount" name="amount" class="form-control"-->
                                        <!--        value="{{ $cart->sum('products.price') + $cart->sum('videos.price') + $cart->sum('contents.price') }}"-->
                                        <!--        required readonly>-->
                                        <!--</div>-->




                                        <!--<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">-->
                                        <!--    <li class="nav-item" role="presentation">-->
                                        <!--        <button class="nav-link btn-sm active" id="pills-home-tab" data-bs-toggle="tab"-->
                                        <!--            data-bs-target="#pills-home" type="button" role="tab"-->
                                        <!--            aria-controls="pills-home" aria-selected="true">Bank</button>-->
                                        <!--    </li>-->
                                        <!--    <li class="nav-item" role="presentation">-->
                                        <!--        <button class="nav-link btn-sm" id="pills-profile-tab" data-bs-toggle="tab"-->
                                        <!--            data-bs-target="#pills-profile" type="button" role="tab"-->
                                        <!--            aria-controls="pills-profile" aria-selected="false">Bkash</button>-->
                                        <!--    </li>-->
                                        <!--    <li class="nav-item" role="presentation">-->
                                        <!--        <button class="nav-link btn-sm" id="pills-contact-tab" data-bs-toggle="tab"-->
                                        <!--            data-bs-target="#pills-contact" type="button" role="tab"-->
                                        <!--            aria-controls="pills-contact" aria-selected="false">Wire Pay</button>-->
                                        <!--    </li>-->
                                        <!--    <li class="nav-item" role="presentation">-->
                                        <!--        <button class="nav-link btn-sm" id="pills-payoneer-tab" data-bs-toggle="tab"-->
                                        <!--            data-bs-target="#pills-payoneer" type="button" role="tab"-->
                                        <!--            aria-controls="pills-payoneer" aria-selected="false">Payoneer</button>-->
                                        <!--    </li>-->

                                        <!--</ul>-->
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn-sm active" id="home-tab"
                                                    data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                                    role="tab" aria-controls="home-tab-pane"
                                                    aria-selected="true">Bank</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn-sm" id="profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                                    aria-controls="profile-tab-pane" aria-selected="false">Bkash</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btm-sm" id="contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#contact-tab-pane" type="button" role="tab"
                                                    aria-controls="contact-tab-pane" aria-selected="false">Wire
                                                    Pay</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn-sm" id="payoneer-tab" data-bs-toggle="tab"
                                                    data-bs-target="#payoneer-tab-pane" type="button" role="tab"
                                                    aria-controls="payoneer-tab-pane"
                                                    aria-selected="false">Payoneer</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                                aria-labelledby="home-tab" tabindex="0">

                                                <div>
                                                    <table class="table table-striped table-bordered">
                                                    <tr>
                                                        <td>Account Name:</td>
                                                        <td>Md. Towfiqul Islam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Account Number:</td>
                                                        <td>040 - 20500 - 17049</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Name:</td>
                                                        <td>One Bank Limited</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brach Name:</td>
                                                        <td>Rajshahi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brach Code:</td>
                                                        <td>193</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SWIFT Code:</td>
                                                        <td>ONEBBDDH</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Routing Number:</td>
                                                        <td>165811934</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Country:</td>
                                                        <td>Bangladesh</td>
                                                    </tr>
                                                </table>
                                                </div>


                                                <!--<p>Account Name: Md. Towfiqul Islam</p>-->
                                                <!--<p>Account Number:040 - 20500 - 17049</p>-->
                                                <!--<p>Bank Name: One Bank Limited</p> -->
                                                <!--<p>Brach Name: Rajshahi</p>-->
                                                <!--<p>Brach Code: 193</p>-->
                                                <!--<p>SWIFT Code: ONEBBDDH</p>-->
                                                <!--<p>Routing Number: 165811934</p>-->
                                                <!--<p>Country: Bangladesh</p>-->
                                                <hr>
                                                <div class="form-group">
                                                    <label for="transaction_id">Transaction ID:</label>
                                                    <input type="text" id="transaction_id" name="transaction_id"
                                                        class="form-control" value="{{ $user->transaction_id }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="sender_number">Sender Number or Email:</label>
                                                    <input type="text" id="sender_number" name="sender_number"
                                                        class="form-control" value="{{ $user->sender_number }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="amount">Amount:</label>
                                                    <input type="text" id="amount" name="amount"
                                                        class="form-control"
                                                        value="{{ $cart->sum('products.price') + $cart->sum('videos.price') + $cart->sum('contents.price') }}"
                                                        required readonly>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                                aria-labelledby="profile-tab" tabindex="0">
                                                <p>Account Name: Md. Towfiqul Islam:</p>
                                                <p>Bkash Number:+8801819680462</p>
                                                <p>Account Type: Personal:</p>
                                            </div>
                                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                                aria-labelledby="contact-tab" tabindex="0">
                                                <p>Account Name: Md. Towfiqul Islam:</p>
                                                <p>WISE Account: mrtowfiq_bd@yahoo.com</p>
                                                <p>WISE website: https://wise.com/</p>
                                            </div>
                                            <div class="tab-pane fade" id="payoneer-tab-pane" role="tabpanel"
                                                aria-labelledby="payoneer-tab" tabindex="0">
                                                <p>Account Name: Md. Towfiqul Islam:</p>
                                                <p>Payoneer Account: mrtowfiq_bd@yahoo.com</p>
                                                <p>Payoneer website: https://payoneer.com/</p>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="checkbox" id="agree" required> <label for="agree">I Agree Pyment
                                        Method</label>
                                    <tr>
                                        <th></th>
                                        <td></td>
                                        <td class="text-right"><button class="btn btn-success btn-sm mt-3_">Place
                                                Order</button> </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>
    <div id="bankSection">

    </div>
    <style>
        .form-control {
            border: 1px solid #eee;
        }

        .nav-link {
            color: #000 !important;
        }

        .nav-link:hover {
            color: blue !important;
        }
    </style>
@section('script')
    <script></script>
@endsection


@endsection
