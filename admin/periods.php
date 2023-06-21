<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include '../include/config.php' ?>
<?php include '../include/function.php'; ?>

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
                <h1 class="m-0">จัดการระยะเวลากิจกรรม</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Periods</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main Content -->
<section class="content">
    <div class="container-fulid">

        <?php
        if (isset($_REQUEST['action'])) {
            include 'add_classes_form.php';
        } else {
        ?>
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                        ห้องเรียน
                    </h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2"> เพิ่มชั้นเรียน</i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ.</th>
                                            <th>ชื่อ</th>
                                            <th>ส่วนต่างๆ</th>
                                            <th>วันที่</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        $args = array(
                                            'type' => 'class',
                                            'status' => 'publish'
                                        );
                                        $classes = get_posts($args);
                                        foreach ($classes as $class) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $class->title ?></td>
                                                <td>

                                                    <?php
                                                    $class_meta = get_metadata($class->id, 'section');
                                                    // print_r($class_meta);
                                                    // $sections = explode(',',$classes->section);

                                                    foreach ($class_meta as $meta) {
                                                        $section = get_post(array('id' => $meta->meta_value));

                                                        echo $section->title;
                                                    }
                                                    ?>

                                                </td>
                                                <td>
                                                    <?= $class->publish_date ?>
                                                </td>
                                                <td>

                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <?php include 'add_periods_form.php' ?>
                        </div>
                    </div>
                </div>

            </div>
        <?php }

        ?>
    </div>
</section>

<?php include 'footer.php'; ?>