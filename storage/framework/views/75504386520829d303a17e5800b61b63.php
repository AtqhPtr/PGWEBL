<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-earth-americas"></i><?php echo e($title); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>"><i class="fa-solid fa-house"></i></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('map')); ?>"><i class="fa-solid fa-map-location-dot"></i>Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('table')); ?>"><i class="fa-solid fa-table"></i>Table</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-database"></i>Data
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="<?php echo e(route('api.points')); ?>" target="_blank">Points</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('api.polylines')); ?>" target="_blank">Polylines</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('api.polygons')); ?>" target="_blank">Polygons</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="nav-link text-danger" type="submit"><i class="fa-solid fa-right-from-bracket"></i>Logout</button>
                    </form>
                </li>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item"></li>
                        <a class="nav-link text-primary" href="<?php echo e(route('login')); ?>"><i class="fa-solid fa-right-from-bracket"></i>Login</a>
                    </form>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Atika Putri\Documents\KULIAH VIBES\SMSTR 4\PGWEBL\pgwebl2\resources\views/components/navbar.blade.php ENDPATH**/ ?>