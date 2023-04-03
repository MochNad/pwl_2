@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Mahasiswa</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Mahasiswa</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Mahasiswa</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success float-right my-2"><i class="fas fa-plus pr-1"></i>Tambah Data</a>
      <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>JK</th>
                <th>HP</th>
                <th>Action</th>
              </tr>
        </thead>
        <tbody>
          @if ($mhs->count() > 0)
            @foreach ($mhs as $i => $m)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$m->nim}}</td>
                <td>{{$m->nama}}</td>
                <td>{{$m->jk}}</td>
                <td>{{$m->hp}}</td>
                <td>
                  <a href="{{ url('/mahasiswa/'.$m->id.'/edit/') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit pr-1"></i>Edit</a>
                  <form method="POST" action="{{ url('/mahasiswa/'.$m->id)}}" class="d-inline pl-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash pr-1"></i>Hapus</button>
                  </form>
                </td>
            </tr>
            @endforeach
          @else
              <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
          @endif
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>JK</th>
            <th>HP</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer Mahasiswa
    </div>
    <!-- /.card-footer-->
  </div>
@endsection
