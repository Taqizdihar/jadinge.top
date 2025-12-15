@extends('layouts.admin')

@section('content')
<h4>Kelola Iklan</h4>

<a href="{{ route('admin.ads.create') }}" class="btn btn-primary mb-3">Tambah Iklan</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ads as $ad)
        <tr>
            <td>{{ $ad->title }}</td>
            <td>Rp {{ number_format($ad->price) }}</td>
            <td>{{ ucfirst($ad->status) }}</td>
            <td>
                <a href="{{ route('admin.ads.edit', $ad->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('admin.ads.destroy', $ad->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
