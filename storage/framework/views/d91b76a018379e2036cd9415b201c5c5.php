<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('songs.index')); ?>" class="btn btn-sm btn-primary"> <i class="fa-solid fa-arrow-left"></i> </a>
        <div class="card mt-4 shadow">
            <div class="card-header  text-dark">
                <h3 class="mb-0">Add Song</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('songs.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter song title">
                    </div>
                    <div class="form-group">
                        <label for="artist_id">Artist</label>
                        <select class="form-control" id="artist_id" name="artist_id">
                            <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($artist->id); ?>"><?php echo e($artist->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="song_file">Song File</label>
                        <br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file_path" name="file_path">
                            <label class="custom-file-label" for="file_path"></label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Add Song</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/songs/create.blade.php ENDPATH**/ ?>