@extends('layout/main')
@section('container')
    <section class="database">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3>Tambah Data Buku</h3>

                    <form action="/store" method="POST">
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
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
