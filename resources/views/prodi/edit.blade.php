<html>
    <title>Edit Prodi</title>
    <body>
        <h2>Edit Prodi</h2>
        <hr>
        @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
      <form action="{{ URL ('prodi') }}/{{ $prodi->id }}" method="POST" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
        <table>
               <tr>
                    <th>prodi</th>
                    <td>
                        <input type="text" name="prodi" value="{{ $prodi->prodi }}" required>
                    </td>
                </tr>
                <tr>
                    <th>dosen</th>
                    <td>
                        <input type="text" name="dosen" value="{{ $prodi->dosen }}"required>
                    </td>
                </tr>
        </table>
        <button type="submit">Save</button>
      </form>  
    </body>
</html>