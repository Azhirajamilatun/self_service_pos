<html>
    <title>Create Dosen</title>
    <body>
        <h2>Create Dosen</h2>
        <hr>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ URL('dosen') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <th>Nama</th>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <th>jenis_kelamin</th>
                    <td>
                        <input type="text" name="jenis_kelamin" required>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>
                        <input type="text" name="alamat" required>
                    </td>
                </tr>
                <tr>
                    <th>email</th>
                    <td>
                        <input type="text" name="email" required>
                    </td>
            </table>
            <button type="submit">Save</button>
        </form>
    </body>
</html>