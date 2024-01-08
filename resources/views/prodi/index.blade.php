<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prodi</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Daftar Prodi</h2>
        <hr>
        <a href="{{ URL('prodi/create') }}" class="btn btn-primary mb-3">Create Prodi</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prodi</th>
                    <th>Dosen</th>
                </tr>
            </thead>
            <tbody>
                @forelse($prodi as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->prodi }}</td>
                        <td>{{ $data->dosen }}</td>
                        <td>
                            <a href="{{ URL('prodi/' . $data->id . '/edit') }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ URL('prodi/' . $data->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Daftar Prodi Empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>