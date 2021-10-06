@extends('layouts.plantilla')

@section('title','curso ', $curso)

@section('content')
<h1>Bienvenido al curso {{$curso}}</h1> <!--doble corchetes es para imprimir variables php-->
@endsection
