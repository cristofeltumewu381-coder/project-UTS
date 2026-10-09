@extends("layouts.app")
@section("title", "Buku")
@section("content")
<div class="d-flex justify-content-between mb-3">
    <h3>Daftar Buku</h3>
    <a href="{{ route("books.create") }}" class="btn btn-primary">+ Tambah Buku</a>
</div>
<div class="table-responsive">
<table class="table table-bordered bg-white">
    <thead class="table-dark"><tr><th>#</th><th>Judul</th><th>Penulis</th><th>Kategori</th><th>Tahun</th><th>Stok</th><th>Aksi</th></tr></thead>
    <tbody>
    @forelse ($books as $b)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->title }}</td>
            <td>{{ $b->author }}</td>
            <td>{{ $b->category->name }}</td>
            <td>{{ $b->published_year }}</td>
            <td>{{ $b->stock }}</td>
            <td class="text-nowrap">
                <a href="{{ route("books.edit", $b) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route("books.destroy", $b) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Hapus buku ini?')">
                    @csrf @method("DELETE")
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="7" class="text-center">Belum ada buku.</td></tr>
    @endforelse
    </tbody>
</table>
</div>
@endsection
