<?php include 'header.php'; ?>
<?php include 'include/config.php'; ?>


<!-- Navbar -->
<nav id="nav" class="navbar navbar-expand-lg navbar-light bg-white">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <b>SMS</b>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <!-- Notifications -->
            <div class="dropdown">
                <a class="link-secondary me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
                <?php
                if (isset($_SESSION['login'])) { ?>
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="admin/dashboard">Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="logout">Logout</a>
                        </li>
                    </ul>
                <?php } else { ?>
                    <a href="login" class="nav-link"><i class="fa fa-user mr-2"></i>Login</a>
                <?php } ?>

            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<div class="d-flex shadow" style="height: 500px; background:linear-gradient(-60deg, #808000 50%,transparent 50%);">
    <div class="container-fluid my-auto">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-4 fw-bold" style="margin-top: 50px;">ระบบบริหารจัดการโรงเรียน</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nam, maiores eveniet mollitia laboriosam obcaecati incidunt perspiciatis adipisci sit sapiente!</p>
                <a href="" class="submit btn btn-lg btn-primary">เรียกร้องให้ดำเนินการ</a>
            </div>
            <div class="col-lg-6" style="margin-top: 70px;">
                <div class="col-lg-7 mx-auto card shadow-lg">
                    <div class="card-body">
                        <h3>แบบฟอร์มแอดมิชชั่น</h3>
                        <form action="" method="post" class="">
                            <div class="form-outline mt-4">
                                <input type="text" autocomplete="off" id="name" class="form-control" data-mdb-showcounter="true" maxlength="100" />
                                <label class="form-label" for="name">ชื่อ</label>
                                <div class="form-helper"></div>
                            </div>
                            <div class="form-outline mt-4">
                                <input autocomplete="off" type="email" id="email" class="form-control" data-mdb-showcounter="true" maxlength="100" />
                                <label class="form-label" for="email">อีเมล</label>
                                <div class="form-helper"></div>
                            </div>
                            <div class="form-outline mt-4 mb-4">
                                <input autocomplete="off" type="text" id="phone" class="form-control" data-mdb-showcounter="true" maxlength="100" />
                                <label class="form-label" for="phone">โทรศัพท์</label>
                                <div class="form-helper"></div>
                            </div>
                            <div class="form-outline mt-4 mb-4">
                                <textarea autocomplete="off" name="" id="" cols="5" rows="3" class="form-control"  data-mdb-showcounter="true" maxlength="500" ></textarea>
                                <label class="form-label" for="class">คำถาม</label>
                                <div class="form-helper"></div>
                            </div>
                            <button class="submit btn btn-lg" style="width: 100%;">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- About Us -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="fw-bold">เกี่ยวกับระบบบริหารจัดการโรงเรียน</h2>
                <div class="pr-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatem.
                        Doloribus autem cumque tempora quia perspiciatis asperiores minima, at pariatur
                        labore impedit illum dolore reiciendis. Officia rerum modi eum omnis alias sint
                        harum quo voluptatibus natus, veritatis sit non saepe dignissimos voluptate suscipit
                        corporis, sequi tempora repudiandae esse et quia.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatem.
                        Doloribus autem cumque tempora quia perspiciatis asperiores minima, at pariatur
                        labore impedit illum dolore reiciendis. Officia rerum modi eum omnis alias sint
                        harum quo voluptatibus natus, veritatis sit non saepe dignissimos voluptate suscipit
                        corporis, sequi tempora repudiandae esse et quia.
                    </p>
                </div>
                <a href="about-us" class="btn btn-lg btn-dark">รู้เพิ่มเติม</a>
            </div>
            <div class="col-lg-6" style="background: url(assets/Images/books.jpg);">
            </div>
        </div>
    </div>
</section>


<!-- Our Courses -->
<section class="course py-5 mt-5 teacher" id="">
    <div class="text-center">
        <h2 class="fw-bold">หลักสูตรของเรา</h2>
        <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti culpa rerum, esse repellendus architecto temporibus veniam est corrupti aliquid pariatur.</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php

            $query = mysqli_query($db_conn,"SELECT * FROM courses order by id desc limit 0,8");

           
            while($courses = mysqli_fetch_object($query)) { ?>
                <div class="col-lg-3 mb-3">
                    <div class="card shadow">
                        <div class="p-3">
                            <img style="object-fit: cover;" src="dist/uploads/<?= $courses->image ?>" class="img-fluid rounded-top course-image" alt="">
                        </div>
                        <div class="card-body">
                            <b><?= $courses->name ?></b>
                            <p class="card-text">
                                <b>ระยะเวลา: </b> <?= $courses->duration ?> ชั่วโมง <br>
                                <b>ราคา: </b> 4,000 บาท
                            </p>
                            <button class="btn btn-block btn-dark">สมัครตอนนี้</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>



<!-- Our Teachers -->
<section class="py-5 ">
    <div class="text-center mb-5">
        <h2 class="fw-blod">คุณครูของเรา</h2>
        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, autem?</p>
    </div>

    <div class="container">
        <div class="row">
            <?php
            for ($i = 0; $i < 8; $i++) { ?>
                <div class="col-lg-3 py-5 my-4">
                    <div class="card shadow">
                        <div class="col-7 position-absolute" style="top:-100px;">
                            <img src="assets/Images/default_image.jpg" id="image-teacher" class="mw-100 border rounded-circle" alt="">
                        </div>
                        <div class="card-body pt-5 mt-4">
                            <h5 class="card-title">Teacher's Name</h5>
                            <p class="card-text">
                                <b>หลักสูตร: </b> 5 <br>
                                <b>คะแนน: </b>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </p>
                        </div>
                    </div>
                </div>
            <?php  }
            ?>
        </div>
    </div>
</section>

<!-- Acheivements -->
<section class="py-5" style="background: #808000;">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-white">ความสำเร็จ</h2>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur facere, ullam necessitatibus placeat aperiam fugit. Alias mollitia doloribus cupiditate rem.</p>
                    <img src="assets/images/books.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-3 my-auto">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class=" border rounded p-3" id="graduate">
                                <div class="card-body text-center">
                                    <span><i class="fa fa-graduation-cap fa-2x text-warning"></i></span>
                                    <h2 class="my-2 fw-bold h1 text-white">334</h2>
                                    <hr class="border-warning">
                                    <h4 class="text-white">ผู้สำเร็จการศึกษา</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded p-3" id="graduate">
                                <div class="card-body text-center">
                                    <span><i class="fa fa-graduation-cap fa-2x text-warning"></i></span>
                                    <h2 class="my-2 fw-bold h1 text-white">334</h2>
                                    <hr class="border-warning">
                                    <h4 class="text-white">ผู้สำเร็จการศึกษา</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded p-3" id="graduate">
                                <div class="card-body text-center">
                                    <span><i class="fa fa-graduation-cap fa-2x text-warning"></i></span>
                                    <h2 class="my-2 fw-bold h1 text-white">334</h2>
                                    <hr class="border-warning">
                                    <h4 class="text-white">ผู้สำเร็จการศึกษา</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded p-3" id="graduate">
                                <div class="card-body text-center">
                                    <span><i class="fa fa-graduation-cap fa-2x text-warning"></i></span>
                                    <h2 class="my-2 fw-bold h1 text-white">334</h2>
                                    <hr class="border-warning">
                                    <h4 class="text-white">ผู้สำเร็จการศึกษา</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoninals -->
<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">สิ่งที่ผู้คนพูด</h2>
        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae fuga corporis dolore sed esse commodi iusto laborum voluptatum. Eum, distinctio.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="top: .5rem; left: .5rem; opacity: .2"></i>
                </div>
                <div class="text-center mt-n2">
                    <img src="assets/images/default_image.jpg" class="border rounded-circle" width="100" alt="">
                    <h6 class="mb-0 fw-bold">ชื่อผู้สมัคร</h6>
                    <p><i>การกำหนด</i></p>
                </div>
            </div>
            <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae fuga corporis dolore sed esse commodi iusto laborum voluptatum. Eum, distinctio.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="top: .5rem; left: .5rem; opacity: .2"></i>
                </div>
                <div class="text-center mt-n2">
                    <img src="assets/images/default_image.jpg" class="border rounded-circle" width="100" alt="">
                    <h6 class="mb-0 fw-bold">ชื่อผู้สมัคร</h6>
                    <p><i>การกำหนด</i></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->

<footer style="background: url(assets/Images/books.jpg) center/cover no-repeat;">
    <div class="py-5 text-white" style="background:#00000088;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>list icons</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>list icons</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>list icons</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>list icons</a></li>

                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Social Presence</h4>
                    <div>
                        <i class="fa-brands fa-instagram fa-2x"></i>
                        <i class="fa-brands fa-facebook fa-2x"></i>
                        <i class="fa-brands fa-twitter fa-2x"></i>
                        <i class="fa-brands fa-youtube fa-2x"></i>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4>Subscripe Now</h4>
                    <form action="">
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <button class="btn btn-success btn-sm btn-block">Submit</button>
                    </form>
                </div>
                <!-- Translation Code here -->
                <span>
                    <div class="translate" id="google_translate_element"></div>

                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            }, 'google_translate_element');
                        }
                    </script>
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </span>
                <!-- Translation Code End here -->
            </div>
        </div>
    </div>
</footer>

<section class="py-2 bg-dark text-light text-sm text-center">
    <div class="container-fluid">
        Copyright &copy; 2023 All Rights Reseved. <a href="" class="text-light">School Management System</a>
    </div>
</section>

<?php include 'footer.php'; ?>