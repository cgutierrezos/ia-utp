@extends('layouts.app')

@section('title', "Bienvenido")

@section('body')

    @include('templates.banner_welcome', [
        'id' => 'inicio',
        'title' => 'Bienvenido',
        'paragraph' => 'Registro exitoso, Intenta loguearte con tu correo y password!',
        'aref' => '',
        'astyle' => 'display:none',
        'atitle' => 'siguiente'
    ])

@endsection
