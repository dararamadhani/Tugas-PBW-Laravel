@extends('layouts.app')

@section('content')

<div class="card shadow p-4">

    <h2 class="mb-4">
        Tambah Planner Mingguan
    </h2>

    <form action="{{ route('planner.store') }}"
    method="POST">

        @csrf

        <!-- HARI -->

        <div class="mb-3">

            <label>Hari</label>

            <select name="hari"
            class="form-control"
            required>

                <option value="">
                    -- Pilih Hari --
                </option>

                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>

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

                <option value="{{ $menu->id }}">

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

                <option value="{{ $menu->id }}">

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

                <option value="{{ $menu->id }}">

                    {{ $menu->nama_menu }}

                </option>

                @endforeach

            </select>

        </div>

        <!-- BUTTON -->

        <div class="d-flex gap-2">

            <button class="btn btn-success">

                Simpan Planner

            </button>

            <a href="{{ route('planner.index') }}"
            class="btn btn-secondary">

                Cancel

            </a>

        </div>

    </form>

</div>

@endsection