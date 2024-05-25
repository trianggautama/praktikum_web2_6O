@extends('layouts.main')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Mahasiswa</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form action="{{Route('mahasiswa.update',$mahasiswa->id)}}" method="post">
                  @csrf
                  @method('put')
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{$mahasiswa->nik}}">
                    </div>
                    <div class="form-group">
                        <label for="">NPM</label>
                        <input type="text" name="npm" class="form-control" value="{{$mahasiswa->npm}}">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" class="form-control" value="{{$mahasiswa->nomor_telepon}}">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                          <option value="">- pilih jenis kelamin -</option>
                          <option value="Laki-laki" {{$mahasiswa->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}} >Laki-laki</option>
                          <option value="Perempuan" {{$mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : ''}} >Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                          <option value="">- pilih jurusan -</option>
                          <option value="Teknik Informatika" {{$mahasiswa->jurusan == 'Teknik Informatika' ? 'selected' : ''}}>Teknik Informatika</option>
                          <option value="Sistem Informasi" {{$mahasiswa->jurusan == 'Sistem Informasi' ? 'selected' : ''}}>Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$mahasiswa->user->email}}">
                    </div>
                    <div class="row">
                      <div class="col-md">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" value="{{$mahasiswa->user->username}}">
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                            <small class="text-danger">isi jika ingin merubah password</small>
                        </div>
                      </div>
                    </div>
                    <div class="text-right">
                      <a href="{{Route('mahasiswa.index')}}" class="btn btn-light"><i class="fa fa-arrow-back"></i> Kembali</a>
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                    </div>
                </form>
              </div>
            </div>         
          </div>
        </div>
      </div>
    </div>
@endsection