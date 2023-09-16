<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <title>pengaduan</title>
</head>
<body>
  @include('layouts.nav') 
    <br>
    <br>
      <h3 style="text-align:center;">{{$TextIsi}}</h3>
      <br>
        <div class="container">
          <table class="table"> 
            <tr>
              <th scope="col">tanggal_pengaduan</th>
              <th scope="col">id_pengaduan</th>
              <th scope="col">isi_laporan</th>
              <th scope="col">foto</th>
              <th scope="col">status</th>
              <th scope="col">opsi</th>
            </tr>

              @foreach ($pengaduan as $pengaduan)
            <tr>
              <td>{{$pengaduan->nik}}</td>  
              <td>{{$pengaduan->id_pengaduan}}</td>  
              <td>{{$pengaduan->isi_laporan}} </td>
              <td>{{$pengaduan->foto}}</td>  
              <td>{{$pengaduan->status}}</td>
          <td>
            <a href='halaman_edit.php?id_pengaduan=$pengaduan[id_pengaduan]'>Edit</a>|
            <a href='proseshapus.php?id_pengaduan=$pengaduan[id_pengaduan]'>Delete</a>
          </td>
      </tbody>
          </tr>
         @endforeach
          </table>
       </div> 
</body>
</html>
{{-- {
          echo "<td>" . $pengaduan['status'] . "</td>";
          echo "<td>";
          echo "<td><a href='halaman_edit.php?id_pengaduan=$pengaduan[id_pengaduan]'>Edit</a>|
                  <a href='proseshapus.php?id_pengaduan=$pengaduan[id_pengaduan]'>Delete</a></td></tr>";
          echo "</td>";
        }
        ?>
      </tbody> --}}