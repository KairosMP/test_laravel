@extends('master')

@section('content')
    <h2>Create</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.store')}}" method="post">
        @csrf
        <input type="text" name="firstName" placeholder="Your firstName" value="Alexandre">
        <input type="text" name="lastName" placeholder="Your lastName" value="Cardoso">
        <input type="text" name="email" placeholder="Your email" value="xandecarhotmail.com">
        <input type="text" name="email" placeholder="Your password" value="123">

        <button type="submit">Update</button>
    </form>
@endsection