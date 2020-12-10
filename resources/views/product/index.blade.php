@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                @foreach ($data as $datum)
                    @include('include.card', $datum)
                @endforeach
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection