<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include '../include/config.php' ?>
<?php include '../include/function.php' ?>



<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $sectionsArray = implode(',', $_POST['section']);
    $added_date = date('Y-m-d');
    mysqli_query($db_conn, "INSERT INTO classes (title,section,added_date) VALUES ('$title','$sectionsArray','$added_date')") or die('DB Error!');
}

?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">จัดการวิชาเรียน</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Subject</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main Content -->
<section class="content">
    <div class="container-fulid">
        <!-- Info boxes -->
        <div class="card">
            <div class="card-header py-2">
                <h3 class="card-title">
                    วิชา
                </h3>

                <div class="card-tools">
                    <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2"> เพิ่มชั้นเรียน</i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">

                        <?php
                            include 'add_subject_form.php';
                        ?>

                    </div>
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ลำดับ.</th>
                                        <th>ชื่อ</th>
                                        <th>ส่วนต่างๆ</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $count = 1;
                                $args = array(
                                    'type' => 'subject',
                                    'status' => 'publish'
                                );
                                $subjects = get_posts($args);
                                  
                                foreach ($subjects as $subject) { ?>
                                    <tr>
                                        <td><?=$count++?></td>
                                        <td><?=$subject->title?></td>
                                        <td><?=$subject->publish_date?></td>
                                       

                                    </tr>
                              <?php  } ?>
                                            
                                            
                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>