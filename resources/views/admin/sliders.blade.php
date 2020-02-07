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
                        <form class="js-validation-bootstrap form-horizontal" method="post" action="/sliders">
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
                            
                    @foreach($sliders as $slider)          
                      <div class="white-box">
                          <div class="post-header">
                          <div class="post-author-media">
                              <img src="assets/images/profile-picture.png"  alt="">
                          </div>
                          
                          <div class="post-author">
                            <h4>{{$slider->title}}</h4>
                            <p>2 hours ago</p>
                          </div>
                          </div> <!-- /.post-header-->
                          
                          <div class="post-desc">
                              <p>{{$slider->description}}</p>
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
@endsection
