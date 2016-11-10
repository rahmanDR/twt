<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(URL::to('/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::to('/css/master.css')); ?>" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
  <div id="header">
  	<div id="lheader">
  		<div id="lcbox">
  			<div id="logo">
  				<img src="img/logol.png">
  			</div>
        <?php if(Auth::guest()): ?>
        <div id="cari">

        </div>
      </div>
        <div id="menu">
    			<ul>
    				<a href="<?php echo e(url('/login')); ?>"><li>Login</li></a>
    				<a href="<?php echo e(url('/register')); ?>"><li>Register</li></a>
    			</ul>
    		</div>
        <?php else: ?>
  			<div id="cari">
  				<input type="text" placeholder="Pencarian">
  			</div>
  		</div>
  		<div id="menu">
  			<ul>
  				<a href="home"><li>Beranda</li></a>
  				<a href="setting"><li>Pengaturan</li></a>
          <a href="href="<?php echo e(url('/logout')); ?>"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();""><li>Keluar</li></a>
  			</ul>
        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
            <?php echo e(csrf_field()); ?>

        </form>
  		</div>
      <?php endif; ?>
  	</div>
  </div>

    <div id="app">

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts
    <script src="/js/app.js"></script>-->
</body>
</html>
