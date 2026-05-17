@extends('layouts.app')

@section('content')

<div class="card shadow p-4">

    <h2 class="mb-4">
        Edit Planner
    </h2>

    <form action="{{ route('planner.update', $planner->id) }}"
    method="POST">

        @csrf
        @method('PUT')

        <!-- HARI -->

        <div class="mb-3">

            <label>Hari</label>

            <select name="hari"
            class="form-control">

                <option value="Senin"
                {{ $planner->hari == 'Senin' ? 'selected' : '' }}>
                Senin
                </option>

                <option value="Selasa"
                {{ $planner->hari == 'Selasa' ? 'selected' : '' }}>
                Selasa
                </option>

                <option value="Rabu"
                {{ $planner->hari == 'Rabu' ? 'selected' : '' }}>
                Rabu
                </option>

                <option value="Kamis"
                {{ $planner->hari == 'Kamis' ? 'selected' : '' }}>
                Kamis
                </option>

                <option value="Jumat"
                {{ $planner->hari == 'Jumat' ? 'selected' : '' }}>
                Jumat
                </option>

                <option value="Sabtu"
                {{ $planner->hari == 'Sabtu' ? 'selected' : '' }}>
                Sabtu
                </option>

                <option value="Minggu"
                {{ $planner->hari == 'Minggu' ? 'selected' : '' }}>
                Minggu
                </option>

            </select>

        </div>

        <!-- SARAPAN -->

        <div class="mb-3">

            <label>Sarapan</label>

            <select name="sarapan_id"
            class="form-control">

                <option value="">
                    -- Pilih Menu --
                </option>

                @foreach($menus as $menu)

                <option value="{{ $menu->id }}"
                {{ $planner->sarapan_id == $menu->id ? 'selected' : '' }}>

                    {{ $menu->nama_menu }}

                </option>

                @endforeach

            </select>

        </div>

        <!-- SIANG -->

        <div class="mb-3">

            <label>Makan Siang</label>

            <select name="siang_id"
            class="form-control">

                <option value="">
                    -- Pilih Menu --
                </option>

                @foreach($menus as $menu)

                <option value="{{ $menu->id }}"
                {{ $planner->siang_id == $menu->id ? 'selected' : '' }}>

                    {{ $menu->nama_menu }}

                </option>

                @endforeach

            </select>

        </div>

        <!-- MALAM -->

        <div class="mb-3">

            <label>Makan Malam</label>

            <select name="malam_id"
            class="form-control">

                <option value="">
                    -- Pilih Menu --
                </option>

                @foreach($menus as $menu)

                <option value="{{ $menu->id }}"
                {{ $planner->malam_id == $menu->id ? 'selected' : '' }}>

                    {{ $menu->nama_menu }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="d-flex gap-2">

            <button class="btn btn-success">

                Update Planner

            </button>

            <a href="{{ route('planner.index') }}"
            class="btn btn-secondary">

                Cancel

            </a>

        </div>

    </form>

</div>

@endsection