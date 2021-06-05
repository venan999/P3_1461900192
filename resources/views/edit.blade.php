@extends('layout/main')
@section('container')
    <section class="">
        <h2>Edit Data Mahasiswa</h2>
        <div class="container">
            {{-- @foreach ($buku as $bk) --}}
            <form action="{{ url('show/' . $buku->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="patch">
                {{-- @method("PUT") --}}
                <div class="row">
                    <div class="col-25">
                        <label>Judul</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="judul" value="{{ $buku->judul }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Tahun terbit</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
            {{-- @endforeach --}}

            {{-- <form action="/store" method="POST">
                @csrf
                <div class="mb-3 col-4">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input name="judul" type="text" class="form-control" id="judul" aria-describedby="judul">
                </div>
                <div class="mb-3 col-4">
                    <label for="tahun" class="form-label">Tahun Terbit</label>
                    <input name="tahun_terbit" type="text" class="form-control" id="tahun">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> --}}
        </div>
    </section>
@endsection
