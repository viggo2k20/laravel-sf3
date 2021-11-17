@extends('dashboard.master')
@section('content')
    <h6>Edit Publication</h6>
    <form action="{{ route('post.update' , $post -> id) }}" method="post">
        @method('PUT')
        @include('dashboard.posts._form')
    </form>
@endsection
