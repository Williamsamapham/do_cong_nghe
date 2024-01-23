@section('title', 'Chỉnh Sửa Danh Mục')
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
                                <h6 class="text-white text-capitalize ps-3">Chỉnh Sửa Danh Mục</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <form action="{{ route('category.store') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="p-4">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Tên Danh Mục</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $category->name }}">
                                        @error('name')
                                            <span class="help-block" style="color: #d9534f;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">Chọn Danh Mục Cha</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="parent_id">
                                            <option>Chọn Danh Mục Cha</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $category->parent_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm Mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
