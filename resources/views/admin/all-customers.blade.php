@extends('admin.layouts.master')
@section('content')
                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <!-- Full Table -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Full Table</h4>
                            </div>
                            <div class="card-block">
                                <p class="m-b-md">The first way to make a table responsive, is to wrap it with <code>&lt;div class=&quot;table-responsive&quot;&gt;&lt;/div&gt;</code>. This way the table will be horizontally scrollable and all data will be accessible on
                                    smaller screens (&lt; 768px).</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-borderless table-vcenter">
                                        <thead>
                                            <tr>
                                                <th class="text-center w-10"><i class="ion-person"></i></th>
                                                <th>Name</th>
                                                <th style="width: 30%;">Email</th>
                                                <th style="width: 20%;">Position</th>
                                                <th class="text-center" style="width: 100px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <img class="img-avatar img-avatar-48" src="assets/img/avatars/avatar2.jpg" alt="">
                                                </td>
                                                <td class="font-500">Julia Cole</td>
                                                <td>client1@example.com</td>
                                                <td>Accountant</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="ion-edit"></i></button>
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="ion-close"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
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
@endsection