@extends('admin.layouts.master')
@section('content')
                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <!-- Mega Form -->
                        <h2 class="section-title">Add a New Product</h2>
                        <div class="card">
                            @include('errors')
                            <div class="card-block">
                                <form class="form-horizontal m-t-sm" action="/services" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="mega-firstname">Product Name:</label>
                                                    <input class="form-control input-lg" type="text" id="mega-firstname" value="{{old('product_name')}}"  name="product_name" placeholder="Your first name" />
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label for="mega-bio">Full Description:</label>
                                                    <textarea class="form-control input-lg" id="mega-bio" name="full_description" rows="22" placeholder="Enter the full description about the product...">{{old('full_description')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label for="mega-city">Short Description for the Product:</label>
                                                    <textarea class="form-control input-lg" id="mega-bio" name="short_description" rows="22" placeholder="Enter a short description about the product...">{{old('short_description')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-0">
                                        <div class="col-xs-12">
                                            <button class="btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i> Save Product</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- .card -->
                        <!-- End Mega Form -->
                    </div>
                    <!-- .container-fluid -->
                    <!-- End Page Content -->

                </main>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <div class="app-ui-mask-modal"></div>
@endsection