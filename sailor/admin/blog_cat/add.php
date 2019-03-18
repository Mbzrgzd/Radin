<?php 
    if(isset($_POST['btn'])){
        $data = $_POST['frm'];
        addBlogCat($data);
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

                        			<h4 class="header-title m-t-0  m-b-30">افزودن دسته بندی جدید مقالات و متون تخصصی</h4>

                                    <form class="form-horizontal" role="form" data-parsley-validate novalidate method="post">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان دسته بندی*</label>
                                            <div class="col-sm-7">
                                                <input type="text" required parsley-type="email" class="form-control"
                                                       id="inputEmail3" name="frm[title]" placeholder="عنوان دسته بندی را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">ترتیب نمایش*</label>
                                            <div class="col-sm-7">
                                                <input type="text" required parsley-type="email" class="form-control"
                                                       id="inputEmail3" name="frm[sort]" placeholder="ترتیب نمایش">
                                            </div>
                                        </div>
                                        
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-6">
                                            <div class="radio radio-success">
                                                <input type="radio" name="frm[status]" id="radio4" value="1">
                                                <label for="radio4">
                                                    فعال
                                                </label>
                                            </div>
                                            <div class="radio radio-danger">
                                                <input type="radio" name="frm[status]" id="radio6" value="0">
                                                <label for="radio6">
                                                    غیر فعال 
                                                </label>
                                            </div>
                                        </div><!-- end col -->
                                        </div>
                                        <br>
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