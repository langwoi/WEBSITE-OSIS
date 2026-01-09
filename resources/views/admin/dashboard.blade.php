<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin OSIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4">Dashboard Pengaturan</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white">Edit Statistik</div>
        <div class="card-body">
            <div class="row">
                @foreach($stats as $s)
                <div class="col-md-6 mb-3">
                    <form action="{{ route('admin.stat.update', $s->id) }}" method="POST" class="border p-3 rounded">
                        @csrf
                        <div class="mb-2">
                            <label>Label</label>
                            <input type="text" name="label" class="form-control" value="{{ $s->label }}">
                        </div>
                        <div class="mb-2">
                            <label>Jumlah</label>
                            <input type="number" name="target_count" class="form-control" value="{{ $s->target_count }}">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success w-100">Simpan</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">Daftar Misi</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($missions as $index => $m)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $m->title }}</td>
                        <td>{{ $m->description }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Data misi kosong. Silakan lakukan seeding.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>