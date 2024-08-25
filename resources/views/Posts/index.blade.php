@extends('layouts.app')
@section('container')

<div class="container mt-3">
    <div class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success">create Post</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted by</th>
                <th scope="col">Created at</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post['id'] }}</th>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['posted_by'] }}</td>
                    <td>{{ $post['created_at'] }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="{{route('posts.show', $post['id'])}}">view</a>
                        <a type="button" class="btn btn-secondary">Edit</a>
                        <a type="button" class="btn btn-success">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection