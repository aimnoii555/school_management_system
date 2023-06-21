<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include '../include/config.php' ?>
<?php include '../include/function.php' ?>

<?php 
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];

        mysqli_query($db_conn,"INSERT INTO sections (title) values ('$title')") or die('abc');
    }

?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">จัดการส่วนต่างๆของห้องเรียน</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Sections</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main Content -->
<section class="content">
    <div class="container-fulid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            ส่วนต่างๆ
                        </h3>
                        <div class="card-tools">
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ลำดับ.</th>
                                        <th>ชื่อ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                       $i = 1;
                                       $args = array(
                                        'type' => 'section',
                                        'status' => 'publish'
                                       );
                                       $sections = get_posts($args);
                                       
                                        foreach($sections as $section) {
                                    ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $section->title ?></td>    
                                        <td>

                                        </td>                              
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php include 'add_section_form.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>