<?=$this->extend('layout/admin/template');?>

<?=$this->section('content');?>
<main class="flex-grow-1 px-5">
    <h4 class="fw-bold my-3 pt-5" style="color: #849F6A;">Add Location</h4>
    <div class="h-75" style="border: 1px solid #E5E5E5; border-radius: 10px;">
        <form action="/admin/addlocation" class="w-75 mx-auto mt-5 d-flex flex-column h-75 justify-content-between">
            <div>
                <input class="form-control mb-3" type="text" placeholder="ID Location" name="id" required>
                <input class="form-control" type="text" placeholder="Address" name="address" required>
            </div>
            <div class="text-end">
                <input type="submit" value="Save" class="btn btn-success me-2">
                <a href="/admin/location" class="btn btn-light btn-outline">Cancel</a>
            </div>
        </form>
    </div>
</main>
<?=$this->endSection();?>