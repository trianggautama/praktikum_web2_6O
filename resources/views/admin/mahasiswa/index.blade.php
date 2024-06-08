@extends('layouts.main')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mahasiswa</h1>
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
                <div class="float-right mb-4">
                    <a href="{{Route('mahasiswa.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>NPM</td>
                                <td>Nama</td>
                                <td>Jenis Kelamin</td>
                                <td>Nomor Telepon</td>
                                <td>Jurusan</td>
                                <td>Email</td>
                                <td>aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $data)
                            <tr>
                                <td>{{$data->npm}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->nomor_telepon}}</td>
                                <td>
                                  {{$data->jurusan}}
                                </td>
                                <td>
                                  @if($data->user)
                                    {{$data->user->email}}
                                  @else 
                                    user tidak ada
                                  @endif
                                </td>
                                <td>
                                  <form action="{{Route('mahasiswa.destroy',$data->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{Route('mahasiswa.edit',$data->id)}}" class="btn btn-primary">
                                      <i class="fa fa-edit"></i>
                                      Edit
                                    </a>
                                    @if(!$data->user)
                                      <a href="{{Route('mahasiswa.generate',$data->id)}}" class="btn btn-info">
                                        <i class="fa fa-user-plus"></i>
                                        Generate User
                                      </a>
                                    @endif
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</button>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>         
          </div>
        </div>
      </div>
    </div>
@endsection