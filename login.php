<?php include 'header.php'; ?>
<section class="bg-light vh-100 d-flex">
    <div class="col-lg-3 m-auto">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center mb-4">
                    <span class="fa-stack fa-3x">
                        <i class="fa-regular fa-circle fa-stack-2x"></i>
                        <i class="fa fa-user fa-stack-1x"></i>
                    
                    </span>
                </div>
                <form action="actions/login" method="post">
                    <div class="form-outline">
                        <input type="email" name="email" class="form-control">
                        <label for="" class="form-label">อีเมล</label>
                    </div>
                    <div class="form-outline mt-3 mb-4">
                        <input name="password" type="password" class="form-control">
                        <label for="" class="form-label">รหัสผ่าน</label>
                    </div>
                    <button name="login" class="btn btn-lg btn-dark btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>