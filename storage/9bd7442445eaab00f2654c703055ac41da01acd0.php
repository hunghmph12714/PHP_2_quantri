
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Chọn ảnh</label>
                    <input type="file" class="form-control" multiple name="image[]">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP_2\lesson6\app\views/admin/product/upload-form.blade.php ENDPATH**/ ?>