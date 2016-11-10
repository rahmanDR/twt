@extends('layouts.app')

@section('title','Beranda')
@section('content')

<div id="wrapper">
	<div id="left">
		<div id="lprof">
			<div id="lproffoto">
				<img src="img/{{Auth::user()->foto}}">
			</div>
			<div id="lprofnama"><br>
				<h3>{{ Auth::user()->name }}</h3>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="right">
		<div id="rpost">
			@if (count($errors) > 0 )
							@foreach ($errors->all() as $error)
								{{ $error }}
							@endforeach
			@endif
			<form class="" action="home" method="post">
				<textarea name="pos" rows="8" cols="40"></textarea>
				<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
				{{csrf_field()}}
				<input type="submit" value="Post">
			</form>
			<div class="clear"></div>
		</div>
    <!--kiri-->
    @foreach ($data as $datas)
    @if ($datas->id_user == Auth::user()->id)

		<div id="rpost">
			<div id="hpost">
				<div id="hpostfoto">
					<img src="img/{{Auth::user()->foto}}">
				</div>
				<div id="hpostnama">
					<h3>{{ Auth::user()->name }}</h3>
					<span>{{$datas->created_at}}</span>
				</div>
			</div><div class="clear"></div>
		<div id="dpost">
			<p>{{$datas->posting}}</p>
		</div>
		</div>
    @else
    <!--kanan-->
    <div id="rpost">
			<div id="hrpost">
				<div id="hrpostfoto">
					<img src="img/user.png">
				</div>
				<div id="hrpostnama">
					<h3>{{ $datas->id_user }}</h3>
					<span>{{ $datas->created_at }}</span>
				</div>
			</div><div class="clear"></div>
		<div id="dpost">
			<p>{{ $datas->posting }}</p>
		</div>
		</div>
      @endif
    @endforeach
	</div>
<div class="clear"></div>
</div>
@endsection
