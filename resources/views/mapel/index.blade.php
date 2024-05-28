@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Dasboard') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('mapel.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mapel</th>
                                        <th>Kode Mapel</th>
                                        <th>Nama Guru</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($mapel as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_mapel }}</td>
                                            <td>{{ $data->kode_mapel }}</td>
                                            <td>{{ $data->guru->nama_guru }}</td>
                                            <td>
                                                <form action="{{ route('mapel.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('mapel.edit', $data->id) }}"
                                                        class="btn btn-sm btn-success">Edit</a>
                                                    |
                                                    <button type="submit" onsubmit="return confirm('Are You Sure ?');"
                                                        class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                Data belum tersedia.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
