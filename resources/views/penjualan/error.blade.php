@extends('layouts.master')

@section('title')
    Transaksi Gagal
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Transaksi Gagal</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body">
                <div class="alert alert-danger alert-dismissible">
                    <i class="fa fa-times icon"></i>
                    {{ $message }}
                </div>
            </div>
            <div class="box-footer">
                <a href="{{ route('transaksi.baru') }}" class="btn btn-primary btn-flat">Coba Lagi</a>
            </div>
        </div>
    </div>
</div>
@endsection
