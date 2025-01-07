@extends('layouts.app')
@section('title', 'show')

@section('content')
    {{ $user['id'] }}
    {{ $user['name'] }}
    {{ $user['country'] }}
@endsection
