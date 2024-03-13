<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>All Artists</h1>
        <a href="<?php echo e(route('artists.create')); ?>" class="btn btn-primary mb-3">Add Artist</a>

        <ul class="list-group">
            <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item"><?php echo e($artist->name); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/artists/index.blade.php ENDPATH**/ ?>