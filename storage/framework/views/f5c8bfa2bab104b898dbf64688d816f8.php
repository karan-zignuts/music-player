<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('songs.uploadPost')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="audiofile">Upload Audio</label>
            <input type="file" name="file" id="audiofile">
            <button type="submit">Upload</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/upload.blade.php ENDPATH**/ ?>