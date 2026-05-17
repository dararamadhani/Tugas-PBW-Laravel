@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2>Dashboard Menu</h2>

        <p class="text-muted">
            Atur menu makanan mingguanmu 🍜
        </p>

    </div>

    <a href="{{ route('menu.create') }}"
    class="btn btn-warning text-white">

        <i class="bi bi-plus-circle"></i>
        Tambah Menu

    </a>

</div>

<!-- DASHBOARD -->

<div class="row mb-4">

    <!-- TOTAL MENU -->

    <div class="col-md-4">

        <div class="dashboard-card bg-primary shadow">

            <h5>Total Menu</h5>

            <h2>{{ $menus->count() }}</h2>

        </div>

    </div>

    <!-- TOTAL BUDGET -->

    <div class="col-md-4">

        <div class="dashboard-card bg-success shadow">

            <h5>Total Budget</h5>

            <h2>

                Rp {{ number_format($menus->whereNotNull('harga')->sum('harga')) }}

            </h2>

        </div>

    </div>

    <!-- FAVORIT -->

    <div class="col-md-4">

        <div class="dashboard-card bg-danger shadow">

            <h5>Menu Favorit</h5>

            <h2>

                {{ $menus->where('is_favorite', true)->count() }}

            </h2>

        </div>

    </div>

</div>

<!-- MENU -->

<div class="row">

    @foreach($menus as $menu)

    <div class="col-md-4 mb-4">

        <div class="card food-card shadow p-3">

            <div class="card-body">

                <!-- HEADER CARD -->

                <div class="d-flex justify-content-between align-items-start mb-2">

                    <div>

                        <h5 class="mb-1">

                            {{ $menu->nama_menu }}

                        </h5>

                        <span class="badge bg-warning text-dark">

                            {{ $menu->kategori }}

                        </span>

                    </div>

                    <!-- FAVORIT -->

                    <a href="/favorite/{{ $menu->id }}"
                    class="text-danger fs-4 text-decoration-none">

                        @if($menu->is_favorite)

                            ❤️

                        @else

                            🤍

                        @endif

                    </a>

                </div>

                <!-- HARGA -->

                <h4 class="mt-3 text-success">

                    @if($menu->harga)

                        Rp {{ number_format($menu->harga) }}

                    @else

                        <span class="text-muted fs-6">
                            Tidak ada budget
                        </span>

                    @endif

                </h4>

                <!-- BUTTON -->

                <div class="mt-4 d-flex gap-2">

                    <!-- EDIT -->

                    <a href="{{ route('menu.edit', $menu->id) }}"
                    class="btn btn-warning text-white w-100">

                        Edit

                    </a>

                    <!-- DELETE -->

                    <form action="{{ route('menu.destroy', $menu->id) }}"
                    method="POST"
                    class="w-100">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger w-100">

                            Hapus

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

    @endforeach

</div>

@endsection