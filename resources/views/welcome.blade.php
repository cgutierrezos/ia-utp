@extends('layouts.app')

@section('title', 'home')

@section('body')

    @include('templates.banner_welcome', [
        'id' => 'inicio',
        'title' => 'Inteligencia Artificial',
        'paragraph' => 'la inteligencia exhibida por máquinas',
        'aref' => '',
        'astyle' => 'display:none',
        'atitle' => 'siguiente'
    ])
@endsection
