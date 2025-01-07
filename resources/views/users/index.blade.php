@extends('layouts.app')
@section('title', 'users')

@section('content')
    <h2> hello from users page </h2>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">Show</th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <th scope="row">{{ $user['id'] }}</th>
                        <td> {{ $user['name'] }}</td>
                        <td>{{ $user['country'] }}</td>
                        <td><a class="btn btn-primary" href="{{ route('users.show', ['user' => $user['id']]) }}">Show</a>
                            {{-- the 'user' is the id parameter that i need to send in the show function (laravel choses to nae it user) --}}
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
