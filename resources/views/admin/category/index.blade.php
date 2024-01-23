@section('title', 'Quản Lý Danh Mục')
@extends('admin.layouts.master')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Quản Lý Danh Mục</h6>
                </nav>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Danh Sách Danh Mục</h6>
                            </div>
                            <br>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <a href="{{ route('category.create') }}" class="btn btn-success">+ Thêm mới Danh Mục</a>
                            <a href="{{ route('category.trash') }}" class="btn btn-primary">Thùng Rác</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-secondary opacity-7">STT</th>
                                            <th class="text-secondary opacity-7">Tên Danh Mục</th>
                                            <th class="text-secondary opacity-7">Danh Mục Cha</th>
                                            <th class="text-secondary opacity-7">Ngày Tạo</th>
                                            <th class="text-secondary opacity-7">Tùy Chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->parent_id }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('category.edit', $item) }}"
                                                        class="btn btn-success">Sửa</a>
                                                    <form action="{{ route('category.destroy', $item) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">Xóa</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <span>Chưa Có Dữ Liệu</span>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
