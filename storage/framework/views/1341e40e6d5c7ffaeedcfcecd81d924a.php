<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">All Artists</h1>
    <a href="<?php echo e(route('artists.create')); ?>" class="btn btn-primary mb-3">Add Artist</a>

    <div class="row">
        <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($artist->name); ?></h5>
                    <div class="btn-group" role="group" style="row-gap: 2">
                        <!-- Edit Button -->
                        <a href="<?php echo e(route('artists.edit', $artist)); ?>" class="btn btn-info btn-sm mr-2">Edit</a>
                        <!-- Delete Button -->
                        <form action="<?php echo e(route('artists.destroy', $artist)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this artist?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/artists/index.blade.php ENDPATH**/ ?>