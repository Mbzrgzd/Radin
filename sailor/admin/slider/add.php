<?php 
    if(isset($_POST['btn'])){
        $data = $_POST['frm'];
        $folder="slider-".rand();
        $img = uploder('img',"assets/images/slider/",$folder,"slider");
        addslider($data,$img);
    }
?>
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعا</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0  m-b-30">افزودن اسلاید جدید</h4>

                                    <form class="form-horizontal" role="form" data-parsley-validate novalidate method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label"> عنوان*</label>
                                            <div class="col-sm-7">
                                                <input type="text" required parsley-type="email" class="form-control"
                                                       id="inputEmail3" name="frm[title]" placeholder="  عنوان را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label"> متن دکمه*</label>
                                            <div class="col-sm-7">
                                                <input type="text" required parsley-type="email" class="form-control"
                                                       id="inputEmail3" name="frm[botton]" placeholder="متن دکمه را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">لینک دکمه*</label>
                                            <div class="col-sm-7">
                                                <input type="url" required parsley-type="email" class="form-control"
                                                       id="inputEmail3" name="frm[url]" placeholder="لینک دکمه را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="form-group">
	                                       <label class="col-md-2 control-label">توضیحات*</label>
	                                       <div class="col-md-7">
	                                           <textarea class="form-control" rows="5" name="frm[text]"></textarea>
	                                       </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">تصویر اسلاید جدید*</label>
                                            <div class="col-sm-7">
                                                <div class="card-box">
                                                    <input type="file" name="img" class="dropify" data-height="300" />
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-8">
                                                <button type="submit" name="btn" class="btn btn-primary waves-effect waves-light">
                                                    افزودن
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end col -->