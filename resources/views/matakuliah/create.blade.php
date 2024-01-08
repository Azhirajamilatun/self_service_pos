<html>
    <title>Create mata kuliah</title>
    <body>
        <h2>Create mata kuliah</h2>
        <hr>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ URL('matakuliah') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <th>mata kuliah</th>
                    <td>
                        <input type="text" name="mata_kuliah" required>
                    </td>
                </tr>
                <tr>
                    <th>sks</th>
                    <td>
                        <input type="number" name="sks" required>
                    </td>
                </tr>
                <tr>
                    <th>nilai</th>
                    <td>
                        <input type="number" name="nilai" required>
                    </td>
                </tr>
            </table>
            <button type="submit">Save</button>
        </form>
    </body>
</html>