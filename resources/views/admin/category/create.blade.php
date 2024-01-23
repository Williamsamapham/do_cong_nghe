@section('title', 'Thêm Mới Danh Mục')
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
                                <h6 class="text-white text-capitalize ps-3">Thêm Mới Danh Mục</h6>
                            </div>
                            <br>
                            <a href="{{ route('admin.category.list') }}" class="btn btn-success">Quay Lại Trang Quản Lý</a>
                        </div>
                        <form action="{{ route('admin.category.store') }}" method="post">
                            @csrf
                            <div class="card-body px-0 pb-2">
                                <div class="p-4">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Tên Danh Mục</label>
                                        <input type="text" class="form-control" name="name">
                                        @error('name')
                                            <span class="help-block" style="color: #d9534f;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm Mới</button>
                                </div>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
