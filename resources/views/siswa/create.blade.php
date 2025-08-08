<h2>Tambah Siswa</h2>
  <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f8f8;
    padding: 40px;
  }

  h2 {
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
  }

  form {
    background-color: #fff;
    padding: 20px;
    max-width: 400px;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  }

  input[type="text"] {
    width: 100%;
    padding: 8px 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  button {
    padding: 8px 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #45a049;
  }
</style>
  <form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br>
    Kelas: <input type="text" name="kelas"><br>
    Jurusan: <input type="text" name="jurusan"><br>   
    <button type="submit">Simpan</button>
  </form>