@extends('admin.layouts.master')
@section('content')
                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <!-- Mega Form -->
                        <h2 class="section-title">Add Blog Category</h2>
                                <button class="btn btn-app btn-block" data-toggle="modal" data-target="#modal-fadein" type="button">Launch Modal</button>
                        <div class="card">
                            @include('errors')
                            <div class="card-block">
                                @if(!$categories->count())
                                <form class="form-horizontal m-t-sm" action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="mega-firstname">Category Name:</label>
                                                    <input class="form-control input-lg" type="text" id="mega-firstname" value="{{old('product_name')}}"  name="product_name" placeholder="Your first name" />
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label for="mega-bio">Category Description:</label>
                                                    <textarea class="form-control input-lg" id="mega-bio" name="full_description" rows="8" placeholder="Enter the full description about the product...">{{old('full_description')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-0">
                                        <div class="col-xs-12">
                                            <button class="btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i> Save</button>
                                        </div>
                                    </div>
                                </form>
                                @else
                                data
                                @endif
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

        <!-- Fade In Modal to add a new blog category-->
                    <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="card-header bg-green bg-inverse">
                                    <h4>Terms &amp; Conditions</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block">
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                        quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                        quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-app" type="button" data-dismiss="modal"><i class="ion-checkmark"></i> Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Fade In Modal -->
@endsection