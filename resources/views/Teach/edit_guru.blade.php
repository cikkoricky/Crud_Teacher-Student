<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<title>Document</title>
</head>
<body style="background-color:Turquoise">
    <div class="container">
        <table class="table table-bordered">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary  text-white">
                        <h2>Edit Data Guru</h2>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="/teachers/{{$dataguru->id}}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                Foto :
                                <input type="file" name="photo" class="choose" value="{{$dataguru->photo}}" onchange="readURL(this)">
                                <img id="blah" width="80" height="100" />
                            </div>
                            <div class="form-group">
                                NIK :
                                <input type="text" name="nik" class="form-control" value="{{$dataguru->nik}}">
                            </div>
                            <div class="form-group">
                                Nama :
                                <input type="text" name="name" class="form-control" value="{{$dataguru->name}}">
                            </div>
                            <div class="form-group">
                                Jenis Kelamin :
                                <select  class="form-control" name="gender" value="{{$dataguru->gender}}">
                                    <option value="{{$dataguru->gender}}">{{$dataguru->gender}}</option>
                                    <option value="L" >L</option>
                                    <option value="P" >P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                Mapel :
                                <input type="text" name="subject" class="form-control" value="{{$dataguru->subject}}">
                            </div>
                            <div class="form-group">
                                Agama :
                                <input type="text" name="religion" class="form-control" value="{{$dataguru->religion}}">
                            </div>
                            <div class="form-group">
                                Alamat :
                                <input type="text" name="address" class="form-control" value="{{$dataguru->address}}">
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-info">Simpan</button>
                            <div class="modal-footer">
                                    <a href="/teacher">
                                        <button class="btn btn-warning">Batal</button>
                                    </a>
                        </div>
                        </form>
                    </div>

            </div>
        </table>
    </div>
</body>

</html>
