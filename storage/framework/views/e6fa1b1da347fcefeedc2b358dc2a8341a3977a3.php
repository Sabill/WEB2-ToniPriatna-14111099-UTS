<?php $__env->startSection('content'); ?>: 
<br>
    <div class="content">
        <div class="title m-b-md">
            Ini Halaman Utama
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
<br>
<?php $__env->stopSection(); ?>
                
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>