<div class="card">
    <div class="card-header">
        <div class="card-title">เพิ่ม</div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="class">เลือกห้อง</label>
                <select required name="class" class="form-control" id="class">
                    <?php 
                        $classes = get_the_classes($db_conn); 
                        foreach($classes as $value) { ?>
                            <option value="<?= $value->id ?>"><?= $value->title ?></option>
                      <?php  }
                    ?>
                </select>
            </div>
            <div class="form-group" id="section-container" style="display: none;">
                <label for="section">เลือกหมวดหมู่</label>
                <select required name="section" class="form-control" id="section">
                    <option value="">Select Section</option>
                 
                </select>
            </div>
            <div class="form-group">
                <label for="subject">ชื่อวิชา</label>
                <input type="text" class="form-control" required name="subject_name">
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block">เพิ่ม</button>
        </form>
    </div>
</div>