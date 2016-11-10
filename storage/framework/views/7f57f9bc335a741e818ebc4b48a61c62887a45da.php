<?php $__env->startSection('content'); ?>

<div id="wrapper">
	<div id="left">
		<div id="boxpmenu">
			<a href="setting"><div id="pmenu">Akun<img src="img/kanan.png";></div></a>
			<a href="foto"><div id="pmenu">Foto<img src="img/kanan.png";></div></a>
		</div>
		<div class="clear"></div>
	</div>
	<div id="right">
		<div id="pengaturan">
			<h3 style="float:left;">Ubah Pengaturan Umum Akun</h3>
			<div class="clear"></div>
			<div id="border"></div>

			<div id="tabel">
				<table>
					<form action="setting/<?php echo e($data->id); ?>" method="post" accept-charset="utf-8">
					<tr>
						<td><p>Nama</p></td>
						<td><span><input type="text" name="nama" value="<?php echo e($data->name); ?>"></span>
							<?php if($errors->has('nama')): ?>
									<p><?php echo e($errors->first('nama')); ?></p>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td><p>Email</p></td>
						<td><span><input type="text" name="email" value="<?php echo e($data->email); ?>"></span>
							<?php if($errors->has('email')): ?>
									<p><?php echo e($errors->first('email')); ?></p>
							<?php endif; ?>
						</td>
						<?php echo e(csrf_field()); ?>

					</tr>
						<td><p><input type="hidden" name="_method" value="PUT"></p></td>
						<td><input type="submit" value="Ubah Data"></td>
					</tr>
					</form>
				</table><br>
			</div>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>