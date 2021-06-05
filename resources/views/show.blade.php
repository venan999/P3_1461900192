@extends('layout/main')
@section('container')
    <section class="database">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    {{-- <a href="{{ route('mahasiswa.create') }}" class="tambah">Tambah Data</a> --}}
                    <h3>Data Buku</h3>

                    <form class="d-flex" action="/show" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            value="{{ request()->get('query') }}" name="query">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <br>
                    <a type="button" class="btn btn-primary" href="/tambah">Tambah Data</a>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($buku as $bk)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $bk->judul }}</td>
                                    <td>{{ $bk->tahun_terbit }}</td>
                                    <td>
                                        <a type="button" class="btn btn-success"
                                            href="{{ url('show/' . $bk->id . '/edit') }}">Edit</a>
                                        {{-- <a type="button" class="btn btn-danger"
                                            href="{{ url('show/' . $bk->id) }}">Hapus</a> --}}
                                        <form action="{{ url('show/' . $bk->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
