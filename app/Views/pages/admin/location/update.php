<?=$this->extend('layout/admin/template');?>

<?=$this->section('content');?>
<main class="flex-grow-1 px-5">
    <h4 class="fw-bold my-3 pt-5" style="color: #849F6A;">Edit Location</h4>
    <div class="h-75" style="border: 1px solid #E5E5E5; border-radius: 10px;">
        <form action="/admin/updatelocation/<?=$location['id'];?>" method="POST"
            class="w-75 mx-auto mt-5 d-flex flex-column h-75 justify-content-between">
            <div>
                <input class="form-control mb-3" type="text" placeholder="ID Location" name="id"
                    value="<?=$location['id'];?>" disabled>
                <input class="form-control <?=($tidakvalid->hasError('address')) ? 'is-invalid' : '';?>" name="address"
                    type="text" value="<?=(old('address')) ? old('address') : $location['address'];?>"
                    placeholder="Address Location">
                <div class="invalid-feedback mb-4">
                    <?=$tidakvalid->getError('address');?>
                </div>
            </div>
            <div class="text-end">
                <input type="submit" value="Update" class="btn btn-success me-2">
                <a href="/admin/location" class="btn btn-light btn-outline">Cancel</a>
            </div>
        </form>
    </div>
</main>
<?=$this->endSection();?>