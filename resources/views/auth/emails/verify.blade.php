@extends('layouts.app')

@section('title', 'Verificacion')

@section('body')

	@include('templates.banner_welcome', [
        'id' => 'inicio',
        'title' => 'Verificacion de Correo',
        'paragraph' => 'Gracias por crear tu cuenta.
			            Por favor sigue el link de verificacion de email que a aparece a continuacion 
			            <a HREF="/register/verify.$confirmation_code"> Confirmar</a>',
        'aref' => '',
        'astyle' => 'display:none',
        'atitle' => 'siguiente'
    ])

@endsection