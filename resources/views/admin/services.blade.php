@extends('admin.layouts.master')
@section('content')
                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <!-- Full Table -->
                        <div class="card">
                            <div class="card-header">
                                <h4>All Products and Services</h4>
                                <button class="btn btn-app btn-block" data-toggle="modal" data-target="#modal-fadein" type="button">Launch Modal</button>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-striped table-borderless table-vcenter">
                                        <thead>
                                            <tr>
                                                <th class="text-center w-10"><i class="ion-person"></i></th>
                                                <th>Product Name</th>
                                                <th class="text-center" style="width: 100px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($services as $service)
                                            <tr>
                                                <td class="text-center">
                                                    <img class="img-avatar img-avatar-48" src="assets/img/avatars/avatar2.jpg" alt="">
                                                </td>
                                                <td class="font-500">{{$service->product_name}}</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="/services/{{$service->id}}/edit" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="ion-edit"></i></a>
                                                        <form method="POST" action="/services/{{ $service->id}}">
                                                            @method('DELETE')
                                                            @csrf
                                                        <button type="submit" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="ion-close"></i></button>
                                                    </form>
                                                    </div>
                                                </td>
                                            </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- .card-block -->
                        </div>
                        <!-- .card -->
                        <!-- End Full Table -->
                        
                    </div>
                    <!-- .container-fluid -->
                    <!-- End Page Content -->

                </main>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Fade In Modal to add a new service-->
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