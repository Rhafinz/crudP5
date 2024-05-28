@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Dashboard') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('guru.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">NIP</label>
                                <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip"
                                    value="{{ old('nip', $guru->nip) }}" placeholder="NIP" required>
                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Guru</label>
                                <input type="text" class="form-control @error('nama_guru') is-invalid @enderror"
                                    name="nama_guru" value="{{ old('nama_guru', $guru->nama_guru) }}"
                                    placeholder="Nama Guru" required>
                                @error('nama_guru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label><br>
                                <div>
                                    <input type="radio" id="laki" name="jk"
                                        class="@error('jk') is-invalid @enderror" value="0"
                                        {{ old('jk', $guru->jk) == 0 ? 'checked' : '' }}>
                                    <label for="laki">Laki-laki</label>
                                </div>
                                <div>
                                    <input type="radio" id="perempuan" name="jk"
                                        class="@error('jk') is-invalid @enderror" value="1"
                                        {{ old('jk', $guru->jk) == 1 ? 'checked' : '' }}>
                                    <label for="perempuan">Perempuan</label>
                                </div>
                                @error('jk')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <input type="text" class="form-control @error('agama') is-invalid @enderror"
                                    name="agama" value="{{ old('agama', $guru->agama) }}" placeholder="Agama" required>
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl"
                                    value="{{ old('tgl', $guru->tgl) }}" placeholder="Tanggal Lahir" required>
                                @error('tgl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control @error('tmpt') is-invalid @enderror"
                                    name="tmpt" value="{{ old('tmpt', $guru->tmpt) }}" placeholder="Tempat Lahir"
                                    required>
                                @error('tmpt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
