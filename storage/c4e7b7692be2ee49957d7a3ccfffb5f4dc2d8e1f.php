
<?php $__env->startSection('content'); ?>

      <form action="" method="POST" enctype="multipart/form-data">


<div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" id="cate_form">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control">
                    <?php if(isset($errors) && isset($errors['name'])): ?>
                        <span class="has-error text-danger"><?php echo e($errors['name']); ?></span>
                    <?php endif; ?>
                </div> <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control">
                    <?php if(isset($errors) && isset($errors['price'])): ?>
                        <span class="has-error text-danger"><?php echo e($errors['price']); ?></span>
                    <?php endif; ?>
                </div> <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control">
                    
                
                    
                </div> <div class="form-group">    
                   <label for="">Tên danh mục</label>

                      <select name="cate_id" class="form-control">
                    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->cate_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                          
                                           
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea name="detail" class="form-control" rows="10"></textarea>
                                        <?php if(isset($errors) && isset($errors['detail'])): ?>
                        <span class="has-error text-danger"><?php echo e($errors['detail']); ?></span>
                    <?php endif; ?>
                </div>
                <div class="text-right">
                    <a href="<?php echo e(BASE_URL . 'products'); ?>" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>


        



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP_2\lesson6\app\views/admin/product/add-product.blade.php ENDPATH**/ ?>