@extends('layouts.app')

@section('content')

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
			<h3 style="float:left;">Ubah Foto</h3>
			<div class="clear"></div>
			<div id="border"></div>
			<div id="tabel">
			<img style="width:200px;" src="img/{{ $data->foto }}"><br><br>
			<form action="foto/{{ $data->id }}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<input type="hidden" name="_method" value="PUT">
				<input type="file" name="foto" value="">
				<input type="submit" name="name" value="Ubah Foto">
			</form><br>
			</div>
		</div>
@endsection
