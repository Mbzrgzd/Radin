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

                        			<h4 class="header-title m-t-0 m-b-30">لیست پروژه ها</h4>
                                    <table class="table table-striped m-0">
                                        <thead>
                                            <tr>
                                                <th>عنوان پروژه</th>
                                                <th>تصویر</th>
                                                <th>توضیحات</th>
                                                <th>ویرایش</th>
                                                <th>حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $listpro = listproadmin();
                                                foreach($listpro as $val):
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $val['title']; ?></th>
                                                <td><img width="50" src="<?php echo $val['img']; ?>" ></td>
                                                <th><?php echo $val['text']; ?></th>
                                                <td><a class="btn btn-icon waves-effect waves-light m-b-2" href="dashbord.php?m=pro&p=edit&id=<?php echo $val['id']; ?>"><i class="fa fa-edit"></i></a></td>
                                                <td><a class="btn btn-icon waves-effect waves-light m-b-2" href="dashbord.php?m=pro&p=delete&id=<?php echo $val['id']; ?>"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

								</div>
							</div><!-- end col -->

						</div>
                        <!-- End row -->
