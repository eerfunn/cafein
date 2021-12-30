<?=$this->extend('layout/admin/auth-template');?>

<?=$this->section('content');?>
<div class="flex-grow-1">
    <div class="form-container mx-auto">
        <h4>Cafe.In Admin Login</h4>
        <p class="mb-4">Please enter your email and password</p>
        <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-danger"><?=session()->getFlashdata('msg')?></div>
        <?php endif;?>
        <form action="/login/auth" method="POST">
            <div class="mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-login">Login</button>
            <div class="mt-3">
                <a class="text-decoration-none" href="/register">Register your account</a>
            </div>
        </form>
    </div>
</div>
<div>
    <img src="/images/loginbg.jpg" alt="login-background" style="max-height: 100vh;">
</div>
</div>
<?=$this->endSection();?>