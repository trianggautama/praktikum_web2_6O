@extends('layouts.main')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Home</a></li>
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
                    <div class="col-2">
                        <img src="{{asset('img/student.png')}}" alt="" width="100%">
                    </div>
                    <div class="col-10">
                        <h2>Hallo Mahasiswa {{Auth::user()->nama}}</h2>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, repellendus? Tempora, culpa dolorum eaque cum voluptates voluptate. Sunt optio perspiciatis natus fuga. Cumque et sunt a explicabo ipsum architecto placeat!
                        </p>
                    </div>
                </div>
              </div>
            </div>         
          </div>
        </div>
      </div>
    </div>
@endsection