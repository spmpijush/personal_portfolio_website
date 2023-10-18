<?php include '../component/header.php' ?>
<!-- Our Blog section html code start  -->
<div class="container2">
    <h1 class="text-center my-5 blog_and_artical">Blog & Articals</h1>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
            <div class="container main_blog_artical_section_section">
                <div class="row main_blog_artical_section">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="blog_img_box">
                            <img src="../images/blog/mango_classification.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="">
                            <div class="">
                                <h1 class="py-3">Mango Classification Using Transfer Learning</h1>
                                <div class="py-2 blog_tag_user">
                                    <span><i class="fas fa-tags"> </i> AI </span>
                                    <span><i class="fas fa-calendar-alt"> </i> 01/02/1999 </span>
                                    <span><i class="fas fa-user"> </i> Pijush Kanti Mandal</span>
                                </div>
                                <div class="py-3">
                                    <p>Developing a mango classification system involves categorizing mangoes based on variety, ripeness, size, and color. By building a React application, the system can be deployed as a user-friendly interface for real-time mango classification, enabling users to input mango images and receive classification results quickly and conveniently.</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <!-- <a href="<?php  ?>singleBlog?id=<?php echo $val['id'] ?>" type="button" class="btn btn-primary blog_read_more_button">READ MORE</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row main_blog_artical_section">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="blog_img_box">
                            <img src="../images/blog/school_management.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="">
                            <div class="">
                                <h1 class="py-3">School Management System on React js & AI</h1>
                                <div class="py-2 blog_tag_user">
                                    <span><i class="fas fa-tags"> </i> AI </span>
                                    <span><i class="fas fa-calendar-alt"> </i> 01/02/1999 </span>
                                    <span><i class="fas fa-user"> </i> Pijush Kanti Mandal</span>
                                </div>
                                <div class="py-3">
                                    <p>A school management system built with React JS allows efficient management of student records, attendance, grades, schedules, and communication between teachers, students, and parents, providing a comprehensive solution for school administration.</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <!-- <a href="<?php  ?>singleBlog?id=<?php echo $val['id'] ?>" type="button" class="btn btn-primary blog_read_more_button">READ MORE</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="">
                <div class="search_box_color">
                    <h3 class="py-2">S E A R C H - B O X</h3>
                    <div class="mb-3 search_box_main">
                        <input type="text" class="form-control" id="search_box" aria-describedby="textHelp" placeholder="Search Here ...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="category_main_section my-5">
                    <h3>C A T E G O R Y</h3>
                    <div class="container">
                        <ul class="">
                            <li class="nav-link"><a href="#" class="">Computer Science </a></li>
                            <li class="nav-link"><a href="#" class="">Machine Learning </a></li>
                            <li class="nav-link"><a href="#" class="">MERN technology </a></li>
                        </ul>
                    </div>
                </div>
                <div class="recent_post_main">
                    <h3>R E C E N T - P O S T</h3>
                    <div class="container recent_post_content_box_main">
                        <div class="row recent_post_content_box my-3">
                            <div class="col-lg-3 col-md-3 col-3">
                                <div class="">
                                    <div class="recent_post_img_box">
                                        <img src="../images/blog/school_management.png" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-9">
                                <div class="">
                                    <h4>School Management System </h4>
                                    <small> A school management system built with React JS allows efficient management of student records, attendance, grades, schedules, and communication between teachers, students, and parents, providing a comprehensive solution for school administration. </small>
                                </div>
                            </div>
                        </div>

                        <div class="row recent_post_content_box my-3">
                            <div class="col-lg-3 col-md-3 col-3">
                                <div class="">
                                    <div class="recent_post_img_box">
                                        <img src="../images/blog/bg1.jpg" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-9">
                                <div class="">
                                    <h4>Healthcare Management System </h4>
                                    <small> A Healthcare Management System built with React JS allows efficient management of student records, attendance, grades. </small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<!-- Our Blog section html code end  -->
<?php include '../component/footer.php' ?>