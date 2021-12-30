<?=$this->extend('layout/admin/template');?>

<?=$this->section('content');?>
<main class="flex-grow-1 px-5">
    <h4 class="fw-bold my-3 pt-3" style="color: #849F6A;">Add Product</h4>
    <div style="border: 1px solid #E5E5E5; border-radius: 10px;height: 80%;">
        <form action="/admin/addproduct" enctype="multipart/form-data" method="POST"
            class="w-75 mx-auto mt-3 d-flex flex-column  justify-content-between">
            <?=csrf_field();?>
            <div>
                <input class="form-control mb-3" type="text" placeholder="Product ID" name="id" autofocus
                    value="<?=old('id');?>" required>
                <input class="form-control mb-3 <?=($tidakvalid->hasError('name')) ? 'is-invalid' : '';?>" type="text"
                    placeholder="Product Name" name="name" value="<?=old('name');?>">
                <div class="invalid-feedback mb-4">
                    <?=$tidakvalid->getError('name');?>
                </div>
                <div class="mb-3">
                    <input class="form-control mb-3 <?=($tidakvalid->hasError('image')) ? 'is-invalid' : '';?>"
                        type="file" name="image">
                </div>
                <div class="invalid-feedback mb-4">
                    <?=$tidakvalid->getError('image');?>
                </div>
                <input class="form-control mb-3" type="text" placeholder="Price" name="price" value="<?=old('price');?>"
                    required>
                <textarea class="form-control mb-3" rows="2" placeholder="Description" name="description"
                    value="<?=old('description');?>" required></textarea>
                <input class="form-control mb-3" type="text" placeholder="Rating" name="rating"
                    value="<?=old('rating');?>" required>
                <input class="form-control mb-3" type="text" placeholder="Category" name="category"
                    value="<?=old('category');?>" required>

            </div>
            <div class="text-end">
                <input type="submit" value="Save" class="btn btn-success me-2">
                <a href="/admin/product" class="btn btn-light btn-outline">Cancel</a>
            </div>
        </form>
    </div>
</main>
<?=$this->endSection();?>