
<?php $__env->startSection('content'); ?>

      <form action="" method="POST" enctype="multipart/form-data">


<div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" id="cate_form" enctype="multipart/form-data">
                
                 <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" multiple name="image[]" class="form-control">
                   
                </div> 
                <div class="form-group">    
                   <label for="">Ten san pham</label>
                      <select name="product_id" class="form-control">
                    <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                                           
               
                <div class="text-right">
                    <a href="<?php echo e(BASE_URL . 'products'); ?>" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>    </div>



   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP_2\lesson6\app\views/admin/gallery/add-form.blade.php ENDPATH**/ ?>