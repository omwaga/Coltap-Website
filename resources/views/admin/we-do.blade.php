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
                        <form>
                           <div class="form-group">
                               <textarea rows="2" class="form-control" placeholder="Post a new message"></textarea>
                           </div>
                           
                           <input type="submit" value="Post" class="btn btn-primary pull-right">
                           
                            <ul class="nav nav-pills m-t-20 post-list">
                                <li>
                                    <a href="#"><i class="fa fa-user"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-location-arrow"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class=" fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-smile-o"></i></a>
                                </li>
                            </ul>
                           
                        </form>
                    </div> <!--/.hite-box-->
                                      
                      <div class="white-box">
                          <div class="post-header">
                          <div class="post-author-media">
                              <img src="assets/images/profile-picture.png"  alt="">
                          </div>
                          
                          <div class="post-author">
                            <h4>Jonathan Doe</h4>
                            <p>2 hours ago</p>
                          </div>
                          </div> <!-- /.post-header-->
                          
                          <div class="post-desc">
                              <p>Lorem ipsum dolor sit amet, in per dicit graecis evertitur, sed ex labitur virtute neglegentur, quod zril decore ei qui. Epicurei intellegat nec ei. Sed id doctus insolens pericula, sea suas nostrud accusamus.</p>
                          </div>
                          
                      </div><!-- /.white-box-->
                      
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
