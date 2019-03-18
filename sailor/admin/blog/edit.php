<?php
    $id=$_GET['id'];
    $result = showEditBlog($id);


    if(isset($_POST['btn'])){
        $data = $_POST['frm'];
        $oldpic=$result['img'];
        editBlog($data,$id,'img',$oldpic);
        //header("location:dashbord.php?m=blog&p=list");
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

                        			<h4 class="header-title m-t-0  m-b-30">ویرایش مقاله (متون تخصصی) جدید</h4>

                                    <form class="form-horizontal" role="form" data-parsley-validate novalidate method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان مقاله*</label>
                                            <div class="col-sm-7">
                                                <input type="text" required parsley-type="email" class="form-control"
                                                       id="inputEmail3" name="frm[title]" value="<?php echo $result['title']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
	                                       <label class="col-md-2 control-label">توضیحات*</label>
	                                       <div class="col-md-7">
	                                           <textarea class="form-control" rows="5" name="frm[text]"><?php echo $result['text']; ?></textarea>
	                                       </div>
                                        </div>
                                        <div class="form-group">
	                                                <label class="col-sm-2 control-label">دسته بندی</label>
	                                                <div class="col-sm-7">
	                                                    <select class="form-control" name="frm[blogcat]">
	                                                        <option value="0">دسته بندی</option>
                                                            <?php
                                                                $blogCat = blogCat();
                                                                foreach($blogCat as $val){
                                                                    echo "<option value=\"$val[id]\" ";
                                                                        if($result['blogcat']==$val['id']){
                                                                            echo " selected";
                                                                        }
                                                                    echo ">$val[title]</option>";
                                                                }
                                                            ?>
	                                                    </select>
	                                                </div>
	                                       </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">تصویر*</label>
                                            <div class="col-sm-7">
                                                <div class="card-box">
                                                    <img src="<?php echo $result['img']; ?>" width="60" >
                                                    <hr>
                                                    <input type="file" name="img" class="dropify" data-height="300" />
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-8">
                                                <button type="submit" name="btn" class="btn btn-primary waves-effect waves-light">
                                                    ویرایش
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end col -->