<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                 Berita
            </div>
            <a href="#tambah" data-toggle="modal" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah Berita</i>
            </a>
        </div>
        <table id="example2" class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                    <th width ="100px">No</th>
                    <th width ="150">Aksi</th>
                    <th>Foto</th>
                    <th>Title</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $list_berita as $berita )
                <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ url('admin/berita', $berita->id) }}" class="btn btn-info">
                                <i class="fas fa-info"></i>
                            </a>
                            <a href="#edit{{ $berita->id }}" data-toggle="modal" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <x-button.delete id="{{ $berita->id }}" />
                        </div>
                    </td>
                    <td>
                        <img src="{{ url('public') }}/{{ $berita->foto }}" alt="" style="width: 40px;height:40px" class="image-rounded">
                    </td>
                    <td>
                        {{$berita -> title}}
                    </td>
                    <td>
                        {{$berita -> penulis}}
                    </td>
                    <td>
                        {{$berita -> tanggal}}
                    </td>
                    <td>
                        {{$berita -> deskripsi}}
                    </td>
                </tr>
                <div class="modal fade" id="edit{{ $berita->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ url('admin/berita/edit', $berita->id)}}" enctype="multipart/form-data" method="POST">
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
                                            <div class="form-group row">
                                                <label for="" class="control-label col-md-2">Foto</label>
                                                <div class="col-md-6">
                                                    <img src="{{ url("public/$berita->foto") }}" style="width:50%; height:100%">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" name="foto" class="form-control" accep=".jpg, .png, .jpeg" value="{{ $berita->foto }}">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="control-label">title</label>
                                                <input type="text" name="title" class="form-control" placeholder="" required autocomplete="off" value="{{ $berita->title }}">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="control-label">penulis</label>
                                                <input type="text" name="penulis" class="form-control" placeholder="" required autocomplete="off" value="{{ $berita->penulis }}">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="control-label">tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" placeholder="" required autocomplete="off" value="{{ $berita->tanggal }}">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="control-label">deskripsi</label>
                                                <textarea name="deskripsi" cols="30" rows="10" class="form-control"  value="{{ $berita->deskripsi }}"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="berita_id" value="{{ $berita->id }}">
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
        <form action="{{ url('admin/berita/tambah')}}" enctype="multipart/form-data" method="POST">
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
                                <div class="col-md-10">
                                    <input type="file" name="foto" class="form-control" required accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">title</label>
                                <input type="text" name="title" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">penulis</label>
                                <input type="text" name="penulis" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">tanggal</label>
                                <input type="date" name="tanggal" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">deskripsi</label>
                                <textarea name="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
    </form>
    </div>
  </div>
</x-app>

