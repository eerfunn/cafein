<?=$this->extend('layout/admin/template');?>

<?=$this->section('content');?>
<main class="flex-grow-1 px-5">
    <h4 class="fw-bold my-4" style="color: #849F6A;">Edit Banner</h4>
    <?php if (session()->getFlashData('message')): ?>
    <div class="alert alert-success" role="alert">
        <?=session()->getFlashData('message');?>
    </div>
    <?php endif;?>
    <div class="pt-3 pe-5 pb-0 text-end" style="background: #F4F7FC;">
        <a href="/admin/add_banner" class="btn btn-success">
            <img class="me-1 mb-1" src="/images/icon-plus.svg" alt="plus">
            Add Banner
        </a>
    </div>
    <table class="table table-striped table-borderless text-center align-middle">
        <thead style="background: #F4F7FC;">
            <tr>
                <th class="pt-5">ID</th>
                <th>NAME</th>
                <th>PREVIEW</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($banner as $b) {
    ?>
            <tr>
                <td><?=$b['id'];?></td>
                <td><?=$b['nama'];?></td>
                <td><img src="/uploads/<?=$b['preview'];?>" alt="banner" height="36"></td>
                <td>
                    <a href="/admin/update_banner/<?=$b['slug'];?>" class="btn btn-primary"><i
                            class="fas fa-edit"></i></a>

                    <form action="/admin/delete_banner/<?=$b['id'];?>" method="POST" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <?=csrf_field();?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i
                                class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</main>
<?=$this->endSection();?>