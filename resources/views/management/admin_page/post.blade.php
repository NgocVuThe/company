@extends('management.layout.app')

@section('page_title', 'Trang Admin')
@section('body_class', 'page-admin-list')
@section('heading_title', 'Trang Quản Trị Admin')

@section('content')
<div class="container">
    <div class="table-title">
        <h3>Danh Sách Bài Viết</h3>
    </div>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu Đề</th>
                <th>Miêu Tả</th>
                <th>Ngày Tạo</th>
                <th>Tên BST Ảnh</th>
                <th><button type="submit" class="btn btn-primary">Create New Post</button></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key => $post )
                <tr>
                    <td>{{ $key + 1 }}</a></td>
                    <td>{{ $post->titles }}</td>
                    <td>{{ $post->description }}</a></td>
                    <td>{{ $post->created_at}}</a></td>
                    <td>{{ $post->user_id }}</a></td>
                    <td>
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
<style>
    .table a{
        color: black;
    }
</style>
@endsection