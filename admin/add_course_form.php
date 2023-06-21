<div class="card">
    <div class="card-header py-2">
        <h3 class="card-title">
            เพิ่มหลักสูตรเรียน
        </h3>
    </div>
    <div class="card-body">
        <form action="courses" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">ชื่อหลักสูตร</label>
                <input type="text" name="name" class="form-control" placeholder="ชื่อหลักสูตร" required>
            </div>
            <div class="form-group">
                <label for="category">ประเภทหลักสูตร</label>
                <select name="category" class="form-control" id="category">
                    <option value="programming">programming</option>
                    <option value="devops">DevOps</option>
                    <option value="project_manager">project_manager</option>
                </select>
            </div>
            <div class="form-group">
                <label for="duration">ระยะเวลา</label>
                <input type="text" name="duration" class="form-control" placeholder="ระยะเวลา" required>
            </div>
            <div class="form-group">
                <label for="name">รูปภาพ</label>
                <input type="file" class="form-control" name="thumbnail" id="thumbnail">
            </div>

            
            <button name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

</div>