@extends('templates.banner')


@section('content')

	<header>
		<h2><?php echo $title ?></h2>
		<p><?php echo $paragraph ?></p>
	</header>
	<span class="image"><img src="{{ asset('imagenes/ia.jpg') }}" alt="" /></span>

@endsection


@section('scrolly')

	<a href="#one" class="goto-next scrolly" style='<?php echo $style ?>'><?php echo $atitle ?></a>

@endsection