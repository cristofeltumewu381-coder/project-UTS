@extends("layouts.app")
@section("title", "Tambah Kategori")
@section("content")
<h3>Tambah Kategori</h3>
<form action="{{ route("categories.store") }}" method="POST">
    @include("categories._form")
</form>
@endsection
