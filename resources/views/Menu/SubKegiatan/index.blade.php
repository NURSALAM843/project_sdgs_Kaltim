@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Subkegiatan Provinsi TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                 {{-- <a href="/menu/subkegiatan/create" class="btn btn-success">Tambah Data</a> --}}
            </div>
            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    @include('Menu.SubKegiatan.table')
                </div>
            </div>
        </div>

    </div>


@endsection