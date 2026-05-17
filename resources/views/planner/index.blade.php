@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-4">

    <div>

        <h2>Planner Mingguan</h2>

        <p class="text-muted">
            Atur jadwal makanan mingguan 🍴
        </p>

    </div>

    <a href="{{ route('planner.create') }}"
    class="btn btn-primary">

        Tambah Planner

    </a>

</div>

<div class="card shadow p-4">

    <table class="table table-bordered">

        <thead class="table-dark">

            <tr>

                <th>Hari</th>
                <th>Sarapan</th>
                <th>Siang</th>
                <th>Malam</th>
                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach($planners as $planner)

            <tr>

                <td>{{ $planner->hari }}</td>

                <td>
                    {{ $planner->sarapan->nama_menu ?? '-' }}
                </td>

                <td>
                    {{ $planner->siang->nama_menu ?? '-' }}
                </td>

                <td>
                    {{ $planner->malam->nama_menu ?? '-' }}
                </td>

                <td>

                    <div class="d-flex gap-2">

                        <!-- EDIT -->

                        <a href="{{ route('planner.edit', $planner->id) }}"
                        class="btn btn-warning btn-sm text-white">

                            Edit

                        </a>

                        <!-- DELETE -->

                        <form action="{{ route('planner.destroy', $planner->id) }}"
                        method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">

                                Hapus

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection