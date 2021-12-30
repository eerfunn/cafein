<?=$this->extend('layout/admin/template');?>

<?=$this->section('content');?>
<main class="flex-grow-1 px-5">
    <h4 class="fw-bold my-3 pt-5" style="color: #849F6A;">Change Banner</h4>
    <div class="h-75" style="border: 1px solid #E5E5E5; border-radius: 10px;">
        <form action="/admin/updatebanner/<?=$banner['id'];?>" enctype="multipart/form-data" method="POST"
            class="w-75 mx-auto mt-5 d-flex flex-column h-75 justify-content-between">
            <?=csrf_field();?>
            <input type="hidden" name="slug" value="<?=$banner['slug'];?>">
            <div>
                <input class="form-control mb-3" type="text" placeholder="ID Banner" name="id"
                    value="<?=$banner['id'];?>" disabled>

                <input class="form-control mb-3 <?=($tidakvalid->hasError('nama')) ? 'is-invalid' : '';?>" type="text"
                    value="<?=(old('nama')) ? old('nama') : $banner['nama'];?>" placeholder="Nama Banner" name="nama"
                    required>

                <input class="form-control" type="file" placeholder="Gambar Banner" name="preview" required>
            </div>
            <div class="text-end">
                <input type="submit" value="Update" class="btn btn-success me-2">
                <a href="/admin/home" class="btn btn-light btn-outline">Cancel</a>
            </div>
        </form>
    </div>
</main>
<?=$this->endSection();?>