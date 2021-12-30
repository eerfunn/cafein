<?=$this->extend('layout/admin/template');?>

<?=$this->section('content');?>
<main class="flex-grow-1 px-5">
    <h4 class="fw-bold my-4" style="color: #849F6A;">Our Products</h4>
    <?php if (session()->getFlashData('pesan')): ?>
    <div class="alert alert-success" role="alert">
        <?=session()->getFlashData('pesan');?>
    </div>
    <?php endif;?>
    <div class="pt-3 pe-5 pb-0 text-end" style="background: #F4F7FC;">
        <a href="/admin/add_product" class="btn btn-success">
            <img class="me-1 mb-1" src="/images/icon-plus.svg" alt="plus">
            Add Product
        </a>
    </div>
    <table class="table table-hover table-striped table-borderless text-center align-middle">
        <thead style="background: #F4F7FC;">
            <tr>
                <th class="pt-5">ID</th>
                <th>NAME</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>RATING</th>
                <th>CATEGORY</th>
                <!-- <th>Added</th>
                <th>Modified</th> -->
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($product as $p) {
    ?>
            <tr>
                <td><?=$p['id'];?></td>
                <td><?=$p['name'];?></td>
                <td><img src="/uploads/<?=$p['image'];?>" alt="p1" height="36"></td>
                <td>Rp.<?php echo number_format($p['price'], 2, ',', '.') ?>,-</td>
                <td class="text-truncate" style="max-width: 150px;"><?=$p['description'];?></td>
                <td><?=$p['rating'];?></td>
                <td><?=$p['category'];?></td>
                <!-- <td><?=$p['created_at'];?></td>
                <td><?=$p['updated_at'];?></td> -->
                <td>
                    <a href="/admin/update_product/<?=$p['slug'];?>" class="btn btn-primary"><i
                            class="fas fa-edit"></i></a>

                    <form action="/admin/delete_product/<?=$p['id'];?>" method="POST" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <?=csrf_field();?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i
                                class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            <?php
}
?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <?=$pager->simpleLinks()?>
    </div>
</main>
<?=$this->endSection();?>