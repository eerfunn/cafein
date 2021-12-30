<?=$this->extend('layout/admin/auth-template');?>

<?=$this->section('content');?>
<div class="flex-grow-1">
    <div class="form-container mx-auto">
        <h4>Cafe.In Admin SignUp</h4>
        <p class="mb-4">Please enter your data as an admin</p>
        <?php if (isset($validation)): ?>
        <div class="alert alert-danger"><?=$validation->listErrors()?></div>
        <?php endif;?>
        <form action="/register/save" method="POST">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="password" name="confpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-login">Register</button>
            <div class="mt-3">
                <a class="text-decoration-none" href="/login">Login to your account</a>
            </div>
        </form>
    </div>
</div>
<div>
    <img src="/images/loginbg.jpg" alt="login-background" style="max-height: 100vh;">
</div>
</div>
<?=$this->endSection();?>