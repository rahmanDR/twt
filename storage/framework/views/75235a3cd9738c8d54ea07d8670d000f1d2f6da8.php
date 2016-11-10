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
			<h3 style="float:left;">Pengaturan Umum Akun</h3>
			<p style="float:right; margin-top:30px;"><a href="esetting">Ubah</a></p>
			<div class="clear"></div>
			<div id="border"></div>
			<div id="tabel">
			<table>
				<tr>
					<td>Nama</td>
					<td><span><?php echo e($data->name); ?></span></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><span><?php echo e($data->email); ?></span></td>
				</tr>
			</table><br>
			</div>
		</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>