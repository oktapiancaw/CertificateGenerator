@extends('layout.main')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card shadow">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h3>Halaman Utama</h3>
                    <div class="text-right">
                        <a href="" class="btn px-4 btn-primary">Add Data</a>
                        <a href="{{ route('main.generate') }}" class="btn px-4 btn-primary">Generate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-7">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Data List</h5>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Default Template</h5>
                </div>
                <div class="card-body">
                    <img src="{{ asset('images/Dummy4.jpg') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection