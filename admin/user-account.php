<?php include 'header.php'; ?>
<?php include '../include/config.php' ?>

<?php
$error = '';
$status = false;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5(1234);
    $type = $_POST['type'];

    $check_query = mysqli_query($db_conn, "SELECT * FROM accounts where email = '$email'");

    if (mysqli_num_rows($check_query) > 0) {
        $error = 'อีเมลนี้มีคนใช้งานแล้ว';
        $status = true;
    } else {
        mysqli_query($db_conn, "INSERT INTO accounts (name,email,password,type) VALUES ('$name','$email','$password','$type') ");
        $_SESSION['success_msg'] = true;

        header("location: user-account?user=" . $_REQUEST['user'] . " ");
        exit;
    }
}

?>
<?php include 'sidebar.php'; ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php
                    if (isset($_GET['action']) && $_GET['user']) {
                        echo "เพิ่มบัญชีผู้ใช้";
                    } else {
                        echo "จัดการบัญชี";
                    }
                    ?>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active"><?php echo $_REQUEST['user']; ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<?php
if (isset($_SESSION['success_msg'])) { ?>
    <div class="aler alert-success" id="myText">Account has been uploaded successfully</div>
<?php unset($_SESSION['success_msg']);
} ?>

<!-- Main Content -->

<section class="content">
    <div class="container-fluid">
        <?php
        if (isset($_GET['action']) && $_GET['user']) {
            include 'add_user_account_form.php';
        } else {

        ?>

            <!-- Info boxes -->
            <div class="table-responsive">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="user-account?user=<?= $_REQUEST['user'] ?>&action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2" title="Add New Account"> เพิ่มบัญชีผู้ใช้</i></a>
                    </div>

                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>อีเมล</th>
                            <th>ชื่อ</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $user_query = "SELECT * FROM accounts where type = '" . $_REQUEST['user'] . "'";
                        $user_result = mysqli_query($db_conn, $user_query);
                        // $users = mysqli_fetch_array($user_result);

                        // while ($users = mysqli_fetch_array($user_result)) {
                        //     echo $users['email'];
                        // }

                        // $users = mysqli_fetch_all($user_result, MYSQLI_ASSOC);

                        // print_r($users);
                        $i = 1;
                        while ($users = mysqli_fetch_object($user_result)) { ?>

                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $users->email ?></td>
                                <td><?= $users->name ?></td>
                                <td>
                                    <a href="" class="btn btn-warning">แก้ไข</a>
                                    <a href="" class="btn btn-danger">ลบ</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        <?php } ?>

    </div>
</section>



<?php include 'footer.php'; ?>