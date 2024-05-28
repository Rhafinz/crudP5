@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            {{ __('Guru') }}
                        </div>
                        <div class="float-end">
                            <a href="{{ route('guru.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-content">
                            <img src="{{ asset('storage/gurus/' . $guru->image) }}" class="w-50 rounded"
                                style="display: block;
                            margin-left: auto;
                            margin-right: auto;">
                            <hr>
                            <h4>{{ $guru->nama_guru }}</h4>
                            <h4>{{ $guru->nip }}</h4>
                            <p class="mt-3">
                                @if ($guru->jk === 0)
                                    Laki-laki
                                @else
                                    Perempuan
                                @endif
                            </p>
                            <hr>
                            <p class="mt-3">
                                {{ $guru->agama }}
                            </p>
                            <hr>
                            <p class="mt-3">
                                {{ $guru->tmpt }}
                            </p>
                            <hr>
                            <p class="mt-3">
                                {{ $guru->tgl }}
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
