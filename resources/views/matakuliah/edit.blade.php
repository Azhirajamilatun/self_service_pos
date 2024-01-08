<html>
    <title>Edit Matakuliah</title>
    <body>
        <h2>Edit Matakuliah</h2>
        <hr>
        @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
      <form action="{{ URL ('matakuliah') }}/{{ $matakuliah->id }}" method="POST" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
        <table>
               <tr>
                    <th>mata_kuliah</th>
                    <td>
                        <input type="text" name="mata_kuliah" value="{{ $matakuliah->mata_kuliah }}" required>
                    </td>
                </tr>
                <tr>
                    <th>sks</th>
                    <td>
                        <input type="number" name="sks" value="{{ $matakuliah->sks }}"required>
                    </td>
                </tr>
                <tr>
                    <th>nilai</th>
                    <td>
                        <input type="number" name="nilai" value="{{ $matakuliah->nilai}}"required>
                    </td>
                </tr>
        </table>
        <button type="submit">Save</button>
      </form>  
    </body>
</html>