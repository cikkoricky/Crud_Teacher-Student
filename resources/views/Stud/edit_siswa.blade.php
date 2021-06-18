<!DOCTYPE html>
<html lang="en">
    @extends('navbar')

    @section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:Turquoise">
    <div class="container">
        <table class="table table-bordered">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary  text-white">
                        <h2>Edit Data Siswa</h2>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="/students/{{$datasiswa->id}}">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                Photo :
                                <input type="file" name="photo" class="form-control" value="{{$datasiswa->photo}}">
                            </div>
                            <div class="form-group">
                                NIS :
                                <input type="text" name="nis" class="form-control" value="{{$datasiswa->nis}}">
                            </div>
                            <div class="form-group">
                                Nama :
                                <input type="text" name="name" class="form-control" value="{{$datasiswa->name}}">
                            </div>
                            <div class="form-group">
                                Jenis Kelamin :
                                <select  class="form-control" name="gender" value="{{$datasiswa->gender}}">
                                    <option value="{{$datasiswa->gender}}">{{$datasiswa->gender}}</option>
                                    <option value="L" >L</option>
                                    <option value="P" >P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                Kelas :
                                <input type="text" name="class" class="form-control" value="{{$datasiswa->class}}">
                            </div>
                            <div class="form-group">
                                Agama :
                                <input type="text" name="religion" class="form-control" value="{{$datasiswa->religion}}">
                            </div>
                            <div class="form-group">
                                Alamat :
                                <input type="text" name="address" class="form-control" value="{{$datasiswa->address}}">
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-info">Simpan</button>
                            <div class="modal-footer">
                                    <a href="/student">
                                        <button class="btn btn-warning">Batal</button>
                                    </a>
                        </div>
                        </form>
                    </div>

            </div>
        </table>
    </div>
</body>
@endsection
</html>
