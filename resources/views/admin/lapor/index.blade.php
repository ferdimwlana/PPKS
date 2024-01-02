<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Lapor
            </div>
            <a href="#tambah" data-toggle="modal" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah Data</i>
            </a>
        </div>
                    <div class="card-body">
                        <table class="table table-dark table-bordered table-stripped table-responsive ">
                            <thead >
                                <tr>
                                    <th width ="100px">No</th>
                                    <th width ="150px">Aksi</th>
                                    <th>Nama Lengkap Pelapor</th>
                                    <th>Email</th>
                                    <th>No Handphone Pelapor</th>
                                    <th>Status Pelapor</th>
                                    <th>Kategori</th>
                                    <th>Nama Lengkap Korban</th>
                                    <th>Alamat</th>
                                    <th>No Handphone Korban</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status Korban</th>
                                    <th>Nama Lengkap Pelaku</th>
                                    <th>No Handphone Pelaku</th>
                                    <th>Status Pelaku</th>
                                    <th>Jenis_Kejahatan</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                        <tbody>
                            @foreach ( $list_lapor as $lapor )
                                <tr>
                                    <td>{{$loop ->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/lapor', $lapor->id) }}" class="btn btn-info">
                                                <i class="fas fa-info"></i>
                                            </a>
                                            <a href="#edit{{ $lapor->id }}" data-toggle="modal" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <x-button.delete id="{{ $lapor->id }}" />
                                        </div>
                                    </td>
                                    <td>
                                        {{$lapor->nama_lengkap_pelapor}}
                                    </td>
                                    <td>
                                        {{$lapor->email}}
                                    </td>
                                    <td>
                                        {{$lapor->no_handphone_pelapor}}
                                    </td>
                                    <td>
                                        {{$lapor->status_pelapor}}
                                    </td>
                                    <td>
                                        {{$lapor->kategori}}
                                    </td>
                                    <td>
                                        {{$lapor->nama_lengkap_korban}}
                                    </td>
                                    <td>
                                        {{$lapor->alamat}}
                                    </td>
                                    <td>
                                        {{$lapor->no_handphone_korban}}
                                    </td>
                                    <td>
                                        {{$lapor->jenis_kelamin}}
                                    </td>
                                    <td>
                                        {{$lapor->status_korban}}
                                    </td>
                                    <td>
                                        {{$lapor->nama_lengkap_pelaku}}
                                    </td>
                                    <td>
                                        {{$lapor->no_handphone_pelaku}}
                                    </td>
                                    <td>
                                        {{$lapor->status_pelaku}}
                                    </td>
                                    <td>
                                        {{$lapor->jenis_kejahatan}}
                                    </td>
                                    <td>
                                        {{$lapor->file}}
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit{{ $lapor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ url('admin/lapor/edit', $lapor->id)}}" enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Lengkap Pelapor</label>
                                                                <input type="varchar" name="nama_lengkap_pelapor" class="form-control" placeholder="" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Email</label>
                                                                <input type="varchar" name="email" class="form-control" placeholder="" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">No Handphone Pelapor</label>
                                                                <input type="varchar" name="no_handphone_pelapor" class="form-control" placeholder="" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Status Pelapor</label>
                                                                <select name="status_pelapor" id="status_pelapor" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                                    <option value="Dosen">Dosen</option>
                                                                    <option value="Teknisi">Teknisi</option>
                                                                    <option value="Satpam">Satpam</option>
                                                                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Kategori</label>
                                                                <select name="kategori" id="kategori" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="Pelecehan Seksual">Pelecehan Seksual</option>
                                                                    <option value="Pemerkosaan">Pemerkosaan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Lengkap Korban</label>
                                                                <input type="varchar" name="nama_lengkap_korban" class="form-control" placeholder="" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Alamat</label>
                                                                <input type="varchar" name="alamat" class="form-control" placeholder="" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">No Handphone Korban</label>
                                                                <input type="varchar" name="no_handphone_lapor" class="form-control" placeholder="" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Jenis_Kelamin</label>
                                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Status Korban</label>
                                                                <select name="status_korban" id="status_korban" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                                    <option value="Dosen">Dosen</option>
                                                                    <option value="Teknisi">Teknisi</option>
                                                                    <option value="Satpam">Satpam</option>
                                                                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Lengkap Pelaku</label>
                                                                <input type="varchar" name="nama_lengkap_pelaku" class="form-control" placeholder="" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">No Handphone Pelaku</label>
                                                                <input type="varchar" name="no_handphone_pelaku" class="form-control" placeholder="" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Status Pelaku</label>
                                                                <select name="status_pelaku" id="status_pelaku" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                                    <option value="Dosen">Dosen</option>
                                                                    <option value="Teknisi">Teknisi</option>
                                                                    <option value="Satpam">Satpam</option>
                                                                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Jenis Kejahatan</label>
                                                                <select name="jenis_kejahatan" id="jenis_kejahatan" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="Pemerkosaan">Pemerkosaan</option>
                                                                    <option value="Kekerasan Seksual">Kekerasan Seksual</option>
                                                                    <option value="Pelecehan Seksual">Pelecehan Seksual</option>
                                                                    <option value="Lain-lain">Lain-lain</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">File</label>
                                                                <input type="file" name="file" class="form-control" placeholder="Foto" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary"> Simpan </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



 <!-- Modal -->
 <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ url('admin/lapor/tambah')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Lengkap Pelapor</label>
                                <input type="varchar" name="nama_lengkap_pelapor" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="varchar" name="email" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">No Handphone Pelapor</label>
                                <input type="varchar" name="no_handphone_pelapor" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Status Pelapor</label>
                                <select name="status_pelapor" id="status_pelapor" class="form-control">
                                    <option value=""></option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Teknisi">Teknisi</option>
                                    <option value="Satpam">Satpam</option>
                                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                                </select>
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value=""></option>
                                    <option value="Pelecehan Seksual">Pelecehan Seksual</option>
                                    <option value="Pemerkosaan">Pemerkosaan</option>
                                </select>
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Lengkap Korban</label>
                                <input type="varchar" name="nama_lengkap_korban" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Alamat</label>
                                <input type="varchar" name="alamat" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">No Handphone Korban</label>
                                <input type="varchar" name="no_handphone_korban" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value=""></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Status Korban</label>
                                <select name="status_korban" id="status_korban" class="form-control">
                                    <option value=""></option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Teknisi">Teknisi</option>
                                    <option value="Satpam">Satpam</option>
                                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                                </select>
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Lengkap Pelaku</label>
                                <input type="varchar" name="nama_lengkap_pelaku" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">No Handphone Pelaku</label>
                                <input type="varchar" name="no_handphone_pelaku" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Status Pelaku</label>
                                <select name="status_pelaku" id="status_pelaku" class="form-control">
                                    <option value=""></option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Teknisi">Teknisi</option>
                                    <option value="Satpam">Satpam</option>
                                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                                </select>
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Kejahatan</label>
                                <select name="jenis_kejahatan" id="jenis_kejahatan" class="form-control">
                                    <option value=""></option>
                                    <option value="Pemerkosaan">Pemerkosaan</option>
                                    <option value="Kekerasan Seksual">Kekerasan Seksual</option>
                                    <option value="Pelecehan Seksual">Pelecehan Seksual</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">File</label>
                                <input type="file" name="file" class="form-control" placeholder="Foto" required autocomplete="off">
                            </div>
                        </div>
                    </div>
               <input type="hidden" name="lapor_id" value="{{ session('laporId') }}">

                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</x-app>
