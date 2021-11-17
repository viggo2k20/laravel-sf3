@extends('dashboard.master')
@section('content')
    <h6>Create Publication</h6>
    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.posts._form')
    </form>
@endsection
