<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <?php if($_SESSION['AUTH']): ?>
      <div class="image">
        <img src="<?php echo e(BASE_URL . '/public/adminlte/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo e($_SESSION['AUTH']['name']); ?></a>
      </div>
      <?php else: ?>
      
      <div class="info">
        
        <a href="<?php echo e(BASE_URL); ?>login" class="d-block"><i class="fa fa-user text-white"></i> Đăng nhập</a>
      </div>
      <?php endif; ?>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="<?php echo e(BASE_URL); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(BASE_URL . 'danh-muc'); ?>" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Danh mục
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'danh-muc'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'danh-muc/add'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(BASE_URL . 'products'); ?>" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Sản phẩm
              <i class="fas fa-angle-left right"></i>
              
            </p>  
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'products'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'products/add'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>
               <li class="nav-item menu-open">
          <a href="<?php echo e(BASE_URL); ?>logout" onclick="return confirm('Bạn có chắc đăng xuất???')" class="nav-link">
            
            <p>
              Đăng xuất
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div><?php /**PATH C:\xampp\htdocs\PHP_2\lesson6\app\views/layouts/sidebar.blade.php ENDPATH**/ ?>