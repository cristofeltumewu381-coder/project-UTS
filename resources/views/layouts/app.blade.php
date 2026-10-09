<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini-Perpus - @yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route("books.index") }}">Mini-Perpus</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route("books.index") }}">Buku</a>
            <a class="nav-link" href="{{ route("categories.index") }}">Kategori</a>
        </div>
    </div>
</nav>
<div class="container">
    @if (session("success")) <div class="alert alert-success">{{ session("success") }}</div> @endif
    @if (session("error")) <div class="alert alert-danger">{{ session("error") }}</div> @endif
    @yield("content")
</div>
</body>
</html>
