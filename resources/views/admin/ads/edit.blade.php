@extends('layouts.admin')

@section('content')
<h4>Edit Iklan</h4>

<form method="POST" action="{{ route('admin.ads.update', $ad->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="title" class="form-control" value="{{ $ad->title }}">
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" value="{{ $ad->price }}">
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="active" {{ $ad->status=='active'?'selected':'' }}>Active</option>
            <option value="inactive" {{ $ad->status=='inactive'?'selected':'' }}>Inactive</option>
        </select>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection
