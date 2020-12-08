@extends('layouts.app')
@section('content')
    @foreach ($data as $datum)
        {{ $datum['text'] }}
    @endforeach
@endsection