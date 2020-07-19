@extends ('layouts.master')

@section('content')
  <div class="main">
      <div class="main-content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                        <div class="panel">
								            <div class="panel-heading">
									            <h3 class="panel-title">Edit Data Siswa</h3>
								            </div>
								            <div class="panel-body">
                                <form action="/siswa/{{ $siswa->id }}/update" method="POST">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                      <label>Nama Depan</label>
                                      <input value="{{ $siswa->nama_depan }}" type="text" class="form-control" name="nama_depan" placeholder="Ketik nama depan anda disini">
                                    </div>
                                    <div class="form-group">
                                      <label>Nama Belakang</label>
                                      <input value="{{ $siswa->nama_belakang }}" type="text" class="form-control" name="nama_belakang" placeholder="Ketik nama belakang anda disini">
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" \>
                                        <option selected>Pilih Jenis Kelamin...</option>
                                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Agama</label>
                                      <select name="agama" class="form-control">
                                        <option selected>Pilih Agama...</option>
                                        <option value="Islam" @if($siswa->agama == 'Islam') selected @endif>Islam</option>
                                        <option value="Kristen" @if($siswa->agama == 'Kristen') selected @endif>Kristen</option>
                                        <option value="Katolik" @if($siswa->agama == 'Katolik') selected @endif>Katolik</option>
                                        <option value="Hindu" @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>
                                        <option value="Buddha" @if($siswa->agama == 'Buddha') selected @endif>Buddha</option>
                                        <option value="Konghuchu" @if($siswa->agama == 'Konghuchu') selected @endif>Konghuchu</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea name="alamat" class="form-control" rows="3">{{$siswa->alamat}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                </form>
                            </div>
							          </div>
                  </div>  
              </div>  
          </div>  
      </div>  
  </div>  
@stop