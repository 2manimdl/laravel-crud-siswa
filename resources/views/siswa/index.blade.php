<h2>Data Siswa</h2>
<a href="{{ route('siswa.create') }}" class="btn-tambah">Tambah Siswa</a>

<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
    justify-self: center;
  }

  h2 {
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
  }

  .btn-tambah {
    display: inline-block;
    padding: 8px 14px;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    margin-bottom: 15px;
  }

  .btn-tambah:hover {
    background-color: #218838;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  th, td {
    padding: 10px 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:hover {
    background-color: #f9f9f9;
  }

  .btn-edit {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 4px;
    text-decoration: none;
    margin-right: 5px;
  }

  .btn-edit:hover {
    background-color: #0056b3;
  }


  button {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #c82333;
  }

  form {
    display: inline;
  }
</style>

<table border="1">
  <tr>
    <th>NO</th><th>Nama</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>Aksi</th>
  </tr>
  @foreach ($data as $siswa)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $siswa->nama }}</td>
    <td>{{ $siswa->kelas }}</td>
    <td>{{ $siswa->jurusan }}</td>
    <td>
      <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn-edit">Edit</a>
      <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
        @csrf @method('DELETE')
      <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
      </form>
    </td> 
  </tr>
  @endforeach
</table>