@extends('layouts.admin')

@section('content')
<h4>Pembayaran Pending</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Invoice</th>
            <th>User</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
        <tr>
            <td>{{ $payment->invoice }}</td>
            <td>{{ $payment->user->name ?? '-' }}</td>
            <td>Rp {{ number_format($payment->amount) }}</td>
            <td>
                <a href="{{ route('admin.payments.approve', $payment->id) }}" class="btn btn-success btn-sm">Approve</a>
                <a href="{{ route('admin.payments.reject', $payment->id) }}" class="btn btn-danger btn-sm">Reject</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
