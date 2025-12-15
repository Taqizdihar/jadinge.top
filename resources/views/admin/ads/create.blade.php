@extends('layouts.admin')

@section('content')
<h4>Tambah Iklan</h4>

<form method="POST" action="{{ route('admin.ads.store') }}">
    @csrf

    <div class="mb-3">
        <label>Judul Iklan</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control">
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection
