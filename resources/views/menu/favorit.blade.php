@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2>Menu Favorit ❤️</h2>

        <p class="text-muted">
            Daftar makanan favorit kamu
        </p>

    </div>

</div>

<div class="row">

    @foreach($menus as $menu)

    <div class="col-md-4 mb-4">

        <div class="card food-card shadow p-3">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <h5>

                        {{ $menu->nama_menu }}

                    </h5>

                    <span class="fs-4">

                        ❤️

                    </span>

                </div>

                <span class="badge bg-warning text-dark">

                    {{ $menu->kategori }}

                </span>

                <h4 class="mt-3 text-success">

                    Rp {{ number_format($menu->harga) }}

                </h4>

            </div>

        </div>

    </div>

    @endforeach

</div>

@endsection