<html>
    <title>Edit dosen</title>
    <body>
        <h2>Edit dosen</h2>
        <hr>
        @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
      <form action="{{ URL ('dosen') }}/{{ $dosen->id }}" method="POST" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
        <table>
               <tr>
                    <th>nama</th>
                    <td>
                        <input type="text" name="nama" value="{{ $dosen->nama }}" required>
                    </td>
                </tr>
                <tr>
                    <th>sks</th>
                    <td>
                        <input type="text" name="jenis_kelamin" value="{{ $dosen->jenis_kelamin }}"required>
                    </td>
                </tr>
                <tr>
                    <th>alamat</th>
                    <td>
                        <input type="text" name="alamat" value="{{ $dosen->alamat}}"required>
                    </td>
                </tr>
                <tr>
                    <th>email</th>
                    <td>
                        <input type="text" name="email" value="{{ $dosen->email}}"required>
                    </td>
                </tr>
        </table>
        <button type="submit">Save</button>
      </form>  
    </body>
</html>