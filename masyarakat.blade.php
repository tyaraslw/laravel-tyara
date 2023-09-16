<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <title>masyarakat</title>
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
              <th scope="col">nik</th>
              <th scope="col">nama</th>
              <th scope="col">username</th>
              <th scope="col">password</th>
              <th scope="col">telp</th>
              <th scope="col">opsi</th>
            </tr>

              @foreach ($masyarakat as $masyarakat)
            <tr>
              <td>{{$masyarakat->nik}}</td>  
              <td>{{$masyarakat->nama}}</td>  
              <td>{{$masyarakat->username}} </td>
              <td>{{$masyarakat->password}}</td>  
              <td>{{$masyarakat->telp}}</td>
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

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <title>masyarakat</title>
</head>
<body>
    @include('layouts.nav') 
   <table class="center" border="1">
    <tr>
        <th>nik</th>
        <th>nama</th>
        <th>username</th>
        <th>password</th>
        <th>telp</th>
    </tr>

    @foreach($masyarakat as $masyarakat)
    <tr>
        <td>{{$masyarakat->nik}}</td>
        <td>{{$masyarakat->nama}}</td>
        <td>{{$masyarakat->username}}</td>
        <td>{{$masyarakat->password}}</td>
        <td>{{$masyarakat->telp}}</td>
    </tr>
    @endforeach
   </table>
</body>
</html> --}}