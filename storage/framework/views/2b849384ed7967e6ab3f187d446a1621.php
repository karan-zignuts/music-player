<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('artists.index')); ?>" class="btn btn-sm btn-primary"> <i class="fa-solid fa-arrow-left"></i></a>
    <div class="container">
        <h1 class="mb-4">Add Artist</h1>
        <div class="card shadow artist-card">
            <div class="card-body">
                <form action="<?php echo e(route('artists.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter artist name" required>
                    </div>
                    <div class="form-group">
                        <label for="category">category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="" disabled selected>Select category</option>
                            <option value="Rock">Rock</option>
                            <option value="Pop">Pop</option>
                            <option value="Hip Hop">Hip Hop</option>
                            <option value="Electronic">Electronic</option>
                            <option value="Jazz">Jazz</option>
                        </select>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Add Artist</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/artists/create.blade.php ENDPATH**/ ?>