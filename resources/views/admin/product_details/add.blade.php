@extends('admin.layout.master')
@section('content')
    <body>
    <div class="page-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                <form action="{{route('admin.pro.details.store')}}" method="post"  class="theme-form theme-form-2 mega-form">
                                                    @csrf
                                                    <div class="card-header-1">
                                                        <div>
                                                            <h5>product Details</h5>
                                                        </div>
                                                        <div class="text-end ">
                                                            <button  type="button" class="btn btn-info "  id="addMoreService">Add Row</button>
                                                            <button  type="submit" class="btn btn-primary">submit</button>
                                                        </div>
                                                    </div>

                                                    <div class="row g-4" id="inputFields">
                                                        <div class="col-lg-4">
                                                            <label for="fname" class="form-label-title mb-2 form-label">quantity</label>
                                                            <input type="text" class="form-control"  placeholder="quantity" name="quantity[]" id="fname">
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <label for="color" class="form-label-title mb-2 form-label">Color</label>
                                                            <input type="text" class="form-control"  placeholder="color" name="color[]" id="color">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="size" class="form-label-title mb-2 form-label">Size</label>
                                                            <input type="text" class="form-control" name="size[]" placeholder="size" id="size">
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
    </body>
    <script>
        $("#addMoreService").on("click", function(event) {
            event.preventDefault();
            $("#inputFields").append(
                '  <div class="col-lg-4"><input type="text" placeholder="quantity" class="form-control" name="quantity[]"> </div> ' +
                ' <div class="col-lg-4"><input type="text" placeholder="color" class="form-control" name="color[]"> </div>'+
                ' <div class="col-lg-4"><input type="text" placeholder="size" class="form-control" name="size[]"> </div>'

            );
        });
        $(document).ready(function() {
            $('#payment-type').change(function() {
                if ($(this).val() == 2 || $(this).val() == 3) {
                    $('#card-check').show();
                } else {
                    $('#card-check').hide();
                }
            });
        });
    </script>

@endsection




