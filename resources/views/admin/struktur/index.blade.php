<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Struktur SIPPKS
            </div>
            <a href="#tambah" data-toggle="modal" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah Foto</i>
            </a>
        </div>
        <table id="example2" class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                    <th width ="100px">No</th>
                    <th width ="150px">Aksi</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $list_struktur as $struktur )
                <tr>
                    <td><center>{{$loop ->iteration}}</center></td>
                    <td>
                        <center>
                            <div class="btn-group">
                                <a href="{{ url('admin/struktur', $struktur->id) }}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="#edit{{ $struktur->id }}" data-toggle="modal" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{ $struktur->id }}" />
                            </div>
                        </center>
                    </td>

                    <td>
                        <img src="{{ url('public') }}/{{ $struktur->foto }}" alt="" style="width: 40px;height:40px" class="image-rounded">
                    </td>
                    <td>
                        {{ $struktur->nama }}
                    </td>
                    <td>
                        {{ $struktur->jabatan }}
                    </td>
                </tr>

                <div class="modal fade" id="edit{{ $struktur->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ url('admin/struktur/edit', $struktur->id)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Foto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="control-label">Foto</label>
                                                <input type="file" name="foto" class="form-control" placeholder="Foto" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="struktur_id" value="{{ $struktur->id }}">
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" placeholder="" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="struktur_id" value="{{ $struktur->id }}">
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="control-label">Jabatan</label>
                                                <select name="jabatan" id="jabatan" class="form-control">
                                                    <option value=""></option>
                                                    <option value="Ketua">Ketua</option>
                                                    <option value="Sekretaris">Sekretaris</option>
                                                    <option value="Tendik">Tendik</option>
                                                    <option value="Anggota">Anggota</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="struktur_id" value="{{ $struktur->id }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
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
        <form action="{{ url('admin/struktur/tambah')}}" enctype="multipart/form-data" method="POST">
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
                                <label for="" class="control-label">Foto</label>
                                <input type="file" name="foto" class="form-control" placeholder="Foto" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Jabatan</label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                    <option value=""></option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Tendik">Tendik</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
    </form>
    </div>
  </div>
</x-app>


