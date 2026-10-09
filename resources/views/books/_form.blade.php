@csrf
<div class="mb-3">
    <label class="form-label">Kategori</label>
    <select name="category_id" class="form-select @error("category_id") is-invalid @enderror">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $c)
            <option value="{{ $c->id }}" @selected(old("category_id", $book->category_id ?? "") == $c->id)>{{ $c->name }}</option>
        @endforeach
    </select>
    @error("category_id") <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" name="title" class="form-control @error("title") is-invalid @enderror" value="{{ old("title", $book->title ?? "") }}">
    @error("title") <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Penulis</label>
    <input type="text" name="author" class="form-control @error("author") is-invalid @enderror" value="{{ old("author", $book->author ?? "") }}">
    @error("author") <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Tahun Terbit</label>
        <input type="text" name="published_year" class="form-control @error("published_year") is-invalid @enderror" value="{{ old("published_year", $book->published_year ?? "") }}">
        @error("published_year") <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Stok</label>
        <input type="text" name="stock" class="form-control @error("stock") is-invalid @enderror" value="{{ old("stock", $book->stock ?? 0) }}">
        @error("stock") <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
<button class="btn btn-primary">Simpan</button>
<a href="{{ route("books.index") }}" class="btn btn-secondary">Batal</a>
