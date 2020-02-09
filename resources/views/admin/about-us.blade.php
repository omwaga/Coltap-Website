@extends('admin.layouts.master')
@section('content')
        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Profile</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">
                            Profile
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
              <!--Start row-->
              <div class="row">
                  <div class="col-md-8">
                    <div class="white-box">
                      @include('errors')
                      @include('success')
                        <form class="js-validation-bootstrap form-horizontal" method="post" action="/abouts">
                          @csrf
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-username">Title <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" value="{{old('title')}}" type="text" id="val-username" name="title" placeholder="Enter Title">
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control" id="val-suggestions" name="description" rows="14" placeholder="Description">{{old('description')}}</textarea>
                            </div>
                          </div>
                           <input type="submit" value="Post" class="btn btn-primary pull-right">
                        </form>
                    </div> <!--/.hite-box-->
                            
                    @foreach($abouts as $about)          
                      <div class="white-box">
                          <div class="post-header">
                          <div class="post-author-media">
                              <img src="assets/images/profile-picture.png"  alt="">
                          </div>
                          
                          <div class="post-author">
                            <h4>{{$about->title}}</h4>
                            <p><a class="btn btn-info" data-toggle="modal" data-target="#modal-normal" type="button">Edit</a> <a href="" class="btn btn-danger">Delete</a></p>
                          </div>
                          </div> <!-- /.post-header-->
                          
                          <div class="post-desc">
                              <p>{{$about->description}}</p>
                          </div>
                          
                      </div><!-- /.white-box-->
                    @endforeach
                      
                  </div> <!--/.col-md-8-->
                  
                  
                  <div class="col-md-4">
                  
                      <div class="white-box">
                        <h2 class="header-title">About</h2
                        ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque incidunt cumque, dolore eveniet porro asperiores itaque! Eligendi minus cupiditate molestiae praesentium, facilis, neque saepe, soluta sapiente aliquid modi sunt.</p>
                      </div> <!--/.white-box-->
                      
                  </div> <!--/.col-md-4-->
                  
              </div>
              <!--End row-->
           
           
           
			    </div>
        <!-- End Wrapper-->

        <!-- Normal Modal -->
            <div  id="modal-normal" class="modal fade" role="dialog">
              <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <form class="" method="post" action="/abouts/{{$about->id}}">
                          @csrf
                          @method('PATCH')
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-username">Title <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" value="{{$about->title}}" type="text" id="val-username" name="title" placeholder="Enter Title">
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control" id="val-suggestions" name="description" rows="14" placeholder="Description">{{$about->description}}</textarea>
                            </div>
                          </div>
                           <input type="submit" value="Post" class="btn btn-primary pull-right">
                        </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
            
              </div>
            </div>
             <!-- END Normal Modal -->
@endsection
