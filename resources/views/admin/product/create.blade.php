@section('title', 'Quản Lý Sản Phẩm')
@extends('admin.layouts.master')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Quản Lý Sản Phẩm</h6>
                </nav>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Thêm Mới Sản Phẩm</h6>
                            </div>
                            <br>
                            <a href="{{ route('product.index') }}" class="btn btn-success">Quay Lại Trang Quản Lý</a>
                        </div>
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            <div class="card-body px-0 pb-2">
                                @csrf
                                <div class="p-4">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Tên Sản Phẩm</label>
                                        <input type="text" class="form-control" name="name">
                                        @error('name')
                                            <span class="help-block" style="color: #d9534f;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label>Giá</label>
                                        <input type="number" class="form-control" name="price">
                                        @error('price')
                                            <span class="help-block" style="color: #d9534f;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label>Giá Khuyến Mãi</label>
                                        <input type="number" class="form-control" name="sale_price">
                                        @error('name')
                                            <span class="help-block" style="color: #d9534f;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label>Ảnh Sản Phẩm</label>
                                        <input type="file" class="form-control" name="photo">
                                        @error('photo')
                                            <span class="help-block" style="color: #d9534f;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label>Ảnh Mô Tả</label>
                                        <input type="file" class="form-control" name="photos[]" multiple>
                                        @error('photos')
                                            <span class="help-block" style="color: #d9534f;">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group input-group-static mb-4">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea name="decription" class="tinymce" cols="30" rows="10"></textarea>

                                        @error('decription')
                                            <span class="help-block" style="color: #d9534f;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Chọn Danh Mục</label>
                                        <select class="form-control" id="parent_id" name="category_id">
                                            <option value="">Chọn Danh Mục</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm Mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
