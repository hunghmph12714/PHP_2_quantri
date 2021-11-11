

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table class="table table-stripped">
                    <thead>
                        <th>ID</th>
                        <th>Tên Sản phẩm</th>
                        
                        <th> Ảnh anhr ph</th>
                        
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->products->name); ?></td>
                               
                                <td><img width="100px" src="<?php echo e($item->image); ?>" alt=""></td>
                                

                                
                                <td>
                                    <a href="<?php echo e(BASE_URL . 'product/edit-product/'.$item->id); ?>" class="btn btn-sm btn-primary">Sửa</a>
                                    <a href="<?php echo e(BASE_URL . 'product/delete/'.$item->id); ?>" onclick="return confirm('bạn có chắc muốn xóa??')" class="btn btn-sm btn-danger">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP_2\lesson6\app\views/admin/gallery/index.blade.php ENDPATH**/ ?>