@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Chỉnh sửa sản phẩm</h2>
    <form action="{{ route('products.update', $product['id']) }}" method="POST">
        @csrf
        @method('PATCH')
        <input
            type="datetime-local"
            name="createdAt"
            required
            class="form-control mb-3">
        <input
            type="text"
            name="name"
            value="{{ $product['name'] }}"
            required
            class="form-control mb-3">

        <input
            type="url"
            name="avatar"
            value="{{ $product['avatar'] }}"
            required
            class="form-control mb-3">

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection