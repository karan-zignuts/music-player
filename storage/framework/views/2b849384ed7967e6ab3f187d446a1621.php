<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Add Artist</h1>
        <form action="<?php echo e(route('artists.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter artist name">
            </div>
            <button type="submit" class="btn btn-primary">Add Artist</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/artists/create.blade.php ENDPATH**/ ?>