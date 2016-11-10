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
			<h3 style="float:left;">Ubah Pengaturan Umum Akun</h3>
			<div class="clear"></div>
			<div id="border"></div>

			<div id="tabel">
				<table>
					<form action="setting/{{ $data->id }}" method="post" accept-charset="utf-8">
					<tr>
						<td><p>Nama</p></td>
						<td><span><input type="text" name="nama" value="{{ $data->name }}" ></span>
							@if ($errors->has('nama'))
									<p>{{ $errors->first('nama') }}</p>
							@endif
						</td>
					</tr>
					<tr>
						<td><p>Email</p></td>
						<td><span><input type="text" name="email" value="{{ $data->email }}"></span>
							@if ($errors->has('email'))
									<p>{{ $errors->first('email') }}</p>
							@endif
						</td>
						{{csrf_field()}}
					</tr>
						<td><p><input type="hidden" name="_method" value="PUT"></p></td>
						<td><input type="submit" value="Ubah Data"></td>
					</tr>
					</form>
				</table><br>
			</div>

		</div>
	</div>
@endsection
