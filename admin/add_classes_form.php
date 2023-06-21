<div class="card">
    <div class="card-header py-2">
        <h3 class="card-title">
            เพิ่มห้องเรียน
        </h3>
    </div>
    <div class="card-body">
        <form action="classes" method="post">
            <div class="form-group">
                <label for="title">ห้อง</label>
                <input type="text" name="title" class="form-control" placeholder="ห้อง" required>
            </div>
            <div class="form-group">
                <label for="section">ส่วนต่างๆ</label>
                <?php
                $query =  mysqli_query($db_conn, 'SELECT * FROM sections');

                $i = 1;
                while ($sections = mysqli_fetch_object($query)) { ?>
                    <div>
                        <label for="<?= $i?>">
                            <input type="checkbox" id="<?=$i?>" value="<?= $sections->id ?>" name="section[]" placeholder="ส่วนต่างๆ">
                            <?= $sections->title ?>
                        </label>
                    </div>

                <?php $i++; }
                    
                ?>

            </div>
            <button name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

</div>