<?php $__env->startSection('title','Beranda'); ?>
<?php $__env->startSection('content'); ?>

<div id="wrapper">
	<div id="left">
		<div id="lprof">
			<div id="lproffoto">
				<img src="img/<?php echo e(Auth::user()->foto); ?>">
			</div>
			<div id="lprofnama"><br>
				<h3><?php echo e(Auth::user()->name); ?></h3>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="right">
		<div id="rpost">
			<?php if(count($errors) > 0 ): ?>
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<?php echo e($error); ?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			<?php endif; ?>
			<form class="" action="home" method="post">
				<textarea name="pos" rows="8" cols="40"></textarea>
				<input type="hidden" name="id_user" value="<?php echo e(Auth::user()->id); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="submit" value="Post">
			</form>
			<div class="clear"></div>
		</div>
    <!--kiri-->
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <?php if($datas->id_user == Auth::user()->id): ?>

		<div id="rpost">
			<div id="hpost">
				<div id="hpostfoto">
					<img src="img/<?php echo e(Auth::user()->foto); ?>">
				</div>
				<div id="hpostnama">
					<h3><?php echo e(Auth::user()->name); ?></h3>
					<span><?php echo e($datas->created_at); ?></span>
				</div>
			</div><div class="clear"></div>
		<div id="dpost">
			<p><?php echo e($datas->posting); ?></p>
		</div>
		</div>
    <?php else: ?>
    <!--kanan-->
    <div id="rpost">
			<div id="hrpost">
				<div id="hrpostfoto">
					<img src="img/user.png">
				</div>
				<div id="hrpostnama">
					<h3><?php echo e($datas->id_user); ?></h3>
					<span><?php echo e($datas->created_at); ?></span>
				</div>
			</div><div class="clear"></div>
		<div id="dpost">
			<p><?php echo e($datas->posting); ?></p>
		</div>
		</div>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</div>
<div class="clear"></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>