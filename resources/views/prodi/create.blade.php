<html>
    <title>Create prodi </title>
    <body>
        <h2>Create prodi</h2>
        <hr>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ URL('prodi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <th>prodi</th>
                    <td>
                        <input type="text" name="prodi" required>
                    </td>
                </tr>
                <tr>
                    <th>dosen</th>
                    <td>
                        <input type="text" name="dosen" required>
                    </td>
                </tr>
            </table>
            <button type="submit">Save</button>
        </form>
    </body>
</html>