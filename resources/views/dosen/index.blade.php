<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Daftar Dosen</h2>
        <hr>
        <a href="{{ URL('dosen/create') }}" class="btn btn-primary mb-3">Create Dosen</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>jenis_kelamin</th>
                    <th>alamat</th>
                    <th>email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dosen as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <a href="{{ URL('dosen/' . $data->id . '/edit') }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ URL('dosen/' . $data->id) }}" method="POST"
                                style="display: inline-block;">
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Daftar Dosen  Empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>