 

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">My Playlists</h1>
    <a href="<?php echo e(route('playlists.create')); ?>" class="btn btn-primary mb-3">Create Playlist</a>

    <div class="row">
        <?php $__currentLoopData = $playlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $playlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">
            <div class="card shadow playlist-card">
                <?php if($playlist->image_url): ?>
                <img src="<?php echo e($playlist->image_url); ?>" class="card-img-top" alt="Playlist Image">
                <?php else: ?>
                <img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Placeholder Image">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($playlist->title); ?></h5>
                    <p class="card-text">Songs: <?php echo e($playlist->songs_count); ?></p>
                    <div class="d-flex justify-content-between align-items-center gap-2">
                        <a href="<?php echo e(route('playlists.show', $playlist)); ?>" class="btn btn-primary">View Playlist</a>                     
                        <a href="<?php echo e(route('playlists.create')); ?>" class="btn btn-secondary"><i class="fa-solid fa-pen"></i> Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php echo e($playlists->links()); ?>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/playlists/index.blade.php ENDPATH**/ ?>