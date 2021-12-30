<?=$this->extend('layout/admin/template');?>

<?=$this->section('content');?>
<main class="flex-grow-1 px-5">
    <h4 class="fw-bold my-3 pt-3" style="color: #849F6A;">Update Product</h4>
    <div style="border: 1px solid #E5E5E5; border-radius: 10px;height: 90%;">
        <form action="/admin/updateproduct/<?=$product['id'];?>" enctype="multipart/form-data" method="POST"
            class="w-75 mx-auto mt-3 d-flex flex-column  justify-content-between">
            <?=csrf_field();?>
            <input type="hidden" name="slug" value="<?=$product['slug'];?>">
            <div>
                <input class="form-control mb-3" type="text" placeholder="Product ID" name="id" autofocus
                    value="<?=$product['id'];?>" disabled>
                <input class="form-control mb-3 <?=($tidakvalid->hasError('name')) ? 'is-invalid' : '';?>" type="text"
                    placeholder="Product Name" name="name" value="<?=(old('name')) ? old('name') : $product['name'];?>"
                    required>
                <div class="invalid-feedback mb-4">
                    <?=$tidakvalid->getError('name');?>
                </div>
                <input class="form-control mb-3" type="file" name="image"
                    value="<?=(old('image')) ? old('image') : $product['image'];?>" required>
                <input class="form-control mb-3" type="text" placeholder="Price" name="price"
                    value="<?=(old('price')) ? old('price') : $product['price'];?>" required>
                <input class="form-control mb-3" type="text" rows="2" placeholder="Description" name="description"
                    value="<?=(old('description')) ? old('description') : $product['description'];?>" required>
                <input class="form-control mb-3" type="text" placeholder="Rating" name="rating"
                    value="<?=(old('rating')) ? old('rating') : $product['rating'];?>" required>
                <select name="category" class="form-select mb-3">
                    <option selected><?=(old('category')) ? old('category') : $product['category'];?></option>
                    <option value="coffee">Coffee</option>
                    <option value="food">Food</option>
                    <option value="noncoffee">Non Coffee</option>
                </select>
            </div>
            <div class="text-end">
                <input type="submit" value="Update" class="btn btn-success me-2">
                <a href="/admin/product" class="btn btn-light btn-outline">Cancel</a>
            </div>
        </form>
    </div>
</main>
<?=$this->endSection();?>