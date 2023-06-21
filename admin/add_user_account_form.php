<?php
    if ($status == true) { ?>
        <div class="alert alert-danger" id="myText"><?= $error ?></div>
    <?php }
?>
<div class="card">
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">ชื่อ</label>
                <input type="text" name="name" class="form-control" placeholder="ชื่อ" required>
            </div>
            <div class="form-group">
                <label for="">อีเมล</label>
                <input type="email" name="email" class="form-control" placeholder="อีเมล" required>
            </div>
            <input type="hidden" name="type" value="<?= $_REQUEST['user'] ?>">
            <button name="submit" type="submit" class="btn btn-primary">ตกลง</button>
        </form>
    </div>
</div>