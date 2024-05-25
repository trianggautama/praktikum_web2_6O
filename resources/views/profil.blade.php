@extends('layouts.main')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profil Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Profil</a></li>
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
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('img/student.png')}}" alt="" width="100%">
                    </div>
                    <div class="col-9">
                        <table class="table">
                            <tr>
                                <td width="25%">Nama</td>
                                <td width="2%">:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td width="2%">:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td width="2%">:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td width="2%">:</td>
                                <td>-</td>
                            </tr>
                        </table>
                    </div>
                </div>
              </div>
            </div>         
          </div>
        </div>
      </div>
    </div>
@endsection