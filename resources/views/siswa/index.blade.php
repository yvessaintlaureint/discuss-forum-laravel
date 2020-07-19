@extends('layouts.master')

@section('content')
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="panel">
								<div class="panel-heading">
                  <h3 class="panel-title">Data Siswa</h3>
                  <div class="right">
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" ><i class="lnr lnr-plus-circle"></i></button>
                  </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>NAMA DEPAN</th>
												<th>NAMA BELAKANG</th>
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>ALAMAT</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
                    @foreach($data_siswa as $siswa)
                    <tr>
                      <td><a href="/siswa/{{$siswa->id}}/profile">{{ $siswa->nama_depan }}</a></td>
                      <td><a href="/siswa/{{$siswa->id}}/profile">{{ $siswa->nama_belakang }}</a></td>
                      <td>{{ $siswa->jenis_kelamin }}</td>
                      <td>{{ $siswa->agama }}</td>
                      <td>{{ $siswa->alamat }}</td>
                      <td>
                        <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/{{ $siswa->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Delete</a>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/siswa/create" method="POST">
              {{csrf_field()}}

                <div class="form-group">
                  <label>Nama Depan</label>
                  <input type="text" class="form-control" name="nama_depan" placeholder="Ketik nama depan anda disini">
                </div>
                <div class="form-group">
                  <label>Nama Belakang</label>
                  <input type="text" class="form-control" name="nama_belakang" placeholder="Ketik nama belakang anda disini">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control">
                    <option selected>Pilih Jenis Kelamin...</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Agama</label>
                  <select name="agama" class="form-control">
                    <option selected>Pilih Agama...</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghuchu">Konghuchu</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" rows="3"></textarea>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
@stop