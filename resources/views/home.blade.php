@extends('layouts.master')

@section('content')

<div><h1>TITLE</h1></div>

<div class="grid grid-cols-4 gap-4">

@foreach ($blogs as $blog )

@if ($blog['status'])
<div>
    <div class="card">
        <div class="card-body">
            <h2>{{$blog['title']}}</h2>
            <p>{{$blog['body']}}</p>
        </div>
    </div>
</div>
@else
<div>
    <div class="card">
        <div class="card-body">
            <h2>{{$blog['title']}}</h2>
            <p>{{$blog['body']}}</p>
            <p>PENDING</p>
        </div>
    </div>
</div>
@endif
@endforeach

@php
    $i = "";
@endphp

@switch($i)
    @case(1)
        <div class="alert">Danger</div>
        @break
    @case(2)
    <div class="alert">Success</div>
    @break
    @default
    <div class="alert alert-warning">
        Warning
    </div>

@endswitch

@isset($data)
    <div class="alert">Success</div>
@endisset

@empty($i)
    <div class="alert">This is Empty</div>
@endempty

</div>

@endsection
