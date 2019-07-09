<!DOCTYPE html>
<html>
<head> <title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="containner">
<h1>Edit Data Siswa</h1>
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="row">
<div class="col-lg-12">
<form action="/tugas/{{$tugas->id}}/update" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Siswa</label>
    <input name='nama_siswa' type="text" class="form-control" id="nama_siswa" aria-describedby="emailHelp" placeholder="Nama Siswa" value="{{$tugas->nama_siswa}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <input name='kelas' type="text" class="form-control" id="kelas" aria-describedby="emailHelp" placeholder="Kelas" value="{{$tugas->kelas}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jurusan</label>
    <input name='jurusan' type="text" class="form-control" id="jurusan" aria-describedby="emailHelp" placeholder="Jurusan" value="{{$tugas->jurusan}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input name='alamat' type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat" value="{{$tugas->alamat}}">
  </div>
  <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>