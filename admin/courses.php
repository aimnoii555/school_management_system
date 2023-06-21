<?php include 'header.php'; ?>
<?php include '../include/config.php' ?>

<?php
$message = "";
$uploadOK = 1;
$status = false;
if (isset($_POST['submit'])) {

    $image = $_FILES['thumbnail']['name'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $duration = $_POST['duration'];
    $date = date('Y-m-d');



    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';


    // add image path
    $target_dir = "../dist/uploads/";
    // name image from file
    $target_file = $target_dir . basename($_FILES['thumbnail']['name']);
    // Image Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // check if file arealy exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOK = 0;
    // }

    // // check file size  
    // if ($_FILES['thumbnail']['size'] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOK = 0;
    // }


    // Allow Certain file formats
    // if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
    //     echo "Sorry, Only JPG, JPEG, PNG, & GIF files are allowed";
    //     $uploadOK = 0;
    // }


    // Check if $uploadOK is set to 0 by an error

    // if everything is ok, try to upload file
    if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
        $status = true;
        echo "The file" . htmlspecialchars(basename($_FILES['thumbnail']['name'])) . "has been uploaded";
        $sql = "INSERT INTO courses (image,name,category,duration,date) values ('$image','$name','$category','$duration','$date')";
        mysqli_query($db_conn, $sql);

        $_SESSION['success_msg'] = true;
        header('location: courses');
        exit;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>

<?php include 'sidebar.php'; ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">จัดการหลักสูตรในชั้นเรียน</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Add Course</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>



<?php

if (isset($_SESSION['success_msg'])) { ?>
    <div class="alert alert-success" id="myText">Course has been uploaded successfully</div>
    
<?php
unset( $_SESSION['success_msg']);
} ?>



<!-- Main Content -->
<section class="content">
    <div class="container-fulid">

        <?php
        if (isset($_REQUEST['action'])) {
            include 'add_course_form.php';
        } else {
        ?>
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                        หลักสูตร
                    </h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2" title="add course"> เพิ่มหลักสูตร</i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ลำดับ.</th>
                                    <th>รูปภาพ</th>
                                    <th>ชื่อหลักสูตร</th>
                                    <th>ประเภท</th>
                                    <th>ระยะเวลา</th>
                                    <th>วันที่</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $query_courses = mysqli_query($db_conn, "SELECT * FROM courses");
                                while ($courses = mysqli_fetch_object($query_courses)) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>
                                            <img src="../dist/uploads/<?= $courses->image ?>" width="100" height="100" alt="">
                                        </td>
                                        <td><?= $courses->name ?></td>
                                        <td><?= $courses->category ?></td>
                                        <td><?= $courses->duration ?></td>
                                        <td><?= $courses->date ?></td>
                                        <td>
                                            <a href="">Edit</a>
                                            <a href="">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        <?php }

        ?>
    </div>
</section>

<?php include 'footer.php'; ?>