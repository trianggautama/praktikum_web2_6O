@extends('layouts.main')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Mahasiswa</h1>
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
                <form action="{{Route('mahasiswa.store')}}" method="post">
                  @csrf
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" name="nik" class="form-control">
                        @error('nik')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">NPM</label>
                        <input type="text" name="npm" class="form-control">
                        @error('npm')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                        @error('npm')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" class="form-control">
                        @error('nomor_telepon')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                          <option value="">- pilih jenis kelamin -</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                          <option value="">- pilih jurusan -</option>
                          <option value="Teknik Informatika">Teknik Informatika</option>
                          <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                        @error('jurusan')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row">
                      <div class="col-md">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control">
                            @error('username')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
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