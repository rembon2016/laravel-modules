@extends('panel::layouts.master')

@section('content')
    <h1>Welcome {{ auth()->user()->name }} to Dashboard Panel</h1>
    <br>
    <a href="{{ route('panel.blog.index') }}">Blog Sections</a>
    <br>
    <form action="{{ route('usr.logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
