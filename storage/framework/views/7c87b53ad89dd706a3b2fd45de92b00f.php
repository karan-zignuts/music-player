

<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body style="background-color: rgb(153, 158, 158)">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo e(config('app.name', 'Laravel')); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('playlists.index')); ?>">My Playlists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('songs.index')); ?>">All Songs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('artists.index')); ?>">All Artists</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>
<?php /**PATH /Users/ztlab113/Desktop/project /Laravel/music_player_demo/resources/views/layouts/app.blade.php ENDPATH**/ ?>