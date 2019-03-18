							<div class="col-lg-12">
								<div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">فعال</a></li>
                                            <li><a href="#">متن اول</a></li>
                                            <li><a href="#">متن دوم</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">متن پاورقی</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">لیست دسته بندی مقالات و متون تخصصی</h4>
                                    <table class="table table-striped m-0">
                                        <thead>
                                            <tr>
                                                <th>عنوان دسته بندی</th>
                                                <th>ترتیب</th>
                                                <th>وضعیت</th>
                                                <th>ویرایش</th>
                                                <th>حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $listcat = listblogcatadmin();
                                                foreach($listcat as $val):
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $val['title']; ?></th>
                                                <td><?php echo $val['sort']; ?></td>
                                                <td>
                                                    <?php 
                                                        if($val['status']==0){
                                                            echo "<span class='btn m-b-0' style='color:red;'><i class='fa fa-thumbs-o-down'></i></span>";
                                                        }else{
                                                            echo "<span class='btn  m-b-0' style='color:green;'><i class='fa fa-thumbs-o-up'></i></span>";
                                                        }
                                                    ?>
                                                </td>
                                                <td><a class="btn btn-icon waves-effect waves-light m-b-2" href="dashbord.php?m=blog_cat&p=edit&id=<?php echo $val['id']; ?>"><i class="fa fa-edit"></i></a></td>
                                                <td><a class="btn btn-icon waves-effect waves-light m-b-2" href="dashbord.php?m=blog_cat&p=delete&id=<?php echo $val['id']; ?>"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

								</div>
							</div><!-- end col -->

						</div>
                        <!-- End row -->
