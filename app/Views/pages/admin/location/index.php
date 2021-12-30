<?=$this->extend('layout/admin/template');?>

<?=$this->section('content');?>
<main class="flex-grow-1 px-5">
    <h4 class="fw-bold my-4" style="color: #849F6A;">Our Locations</h4>
    <div class="pt-3 pe-5 pb-0 text-end" style="background: #F4F7FC;">
        <a href="/admin/add_location" class="btn btn-success">
            <img class="me-1 mb-1" src="/images/icon-plus.svg" alt="plus">
            Add Location
        </a>
    </div>
    <table class="table table-striped table-borderless text-center align-middle">
        <thead style="background: #F4F7FC;">
            <tr>
                <th class="pt-5">ID</th>
                <th>LOCATION</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($location as $l) {
    ?>
            <tr>
                <td><?=$l['id'];?></td>
                <!-- Jalan Melati No.37 Jakarta Selatan -->
                <td><?=$l['address'];?></td>
                <td>
                    <a href="/admin/update_location/<?=$l['slug'];?>" class="btn btn-primary"><i
                            class="fas fa-edit"></i></a>

                    <form action="/admin/delete_location/<?=$l['id'];?>" method="POST" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <?=csrf_field();?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i
                                class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
                <?php
}
?>
            </tr>
        </tbody>
    </table>
</main>
<?=$this->endSection();?>