@extends('layouts.main')

@section('title', 'HDC Events')
    
@section('content')

<h1>oiii</h1>
<img src="/img/image.png" alt="Banner">
<p>{{ $nome }} tem {{$idade}} anos</p> 

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2)
    <p>O i é 2</p>
    @endif
@endfor

@foreach($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{ $nome }}</p>
@endforeach 

@php 
    $name = "Heitor";
    echo $name;
@endphp

<!-- Comentário do HTML -->
{{-- Comentário do Blade--}}

@endsection