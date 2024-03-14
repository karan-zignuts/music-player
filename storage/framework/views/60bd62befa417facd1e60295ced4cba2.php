<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>All Songs</h1>
        <a href="<?php echo e(route('songs.create')); ?>" class="btn btn-primary mb-3">Add Song</a>

        <div class="row">
            <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-3">
                    <div class="card shadow music-card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($song->title); ?></h5>
                            <p class="card-text">Artist: <?php echo e($song->artist->name); ?></p>
                            <p class="card-text">Category: <?php echo e($song->artist->category); ?></p>
                            <div class="d-flex align-items-center mb-3 gap-2">
                                <audio controls class="mr-2">
                                    <source src="<?php echo e(asset($song->file_path)); ?>" type="audio/mp3">
                                </audio>
                                <button class="btn btn-secondary btn-sm"><i class="fas fa-heart"></i> Like</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/songs/index.blade.php ENDPATH**/ ?>