<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Dokumentasi Kegiatan Satgas PPKS
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
                    <th>Title</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $list_dokumentasi as $dokumentasi )
                <tr>
                    <td><center>{{$loop ->iteration}}</center></td>
                    <td>
                        <center>
                            <div class="btn-group">
                                <a href="{{ url('admin/dokumentasi', $dokumentasi->id) }}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="#edit{{ $dokumentasi->id }}" data-toggle="modal" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{ $dokumentasi->id }}" />
                            </div>
                        </center>
                    </td>

                    <td>
                        {{ $dokumentasi->title }}
                    </td>
                    <td>
                        <img src="{{ url('public') }}/{{ $dokumentasi->foto }}" alt="" style="width: 40px;height:40px" class="image-rounded">
                    </td>
                </tr>
                <div class="modal fade" id="edit{{ $dokumentasi->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ url('admin/dokumentasi/edit', $dokumentasi->id)}}" enctype="multipart/form-data" method="POST">
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
                                                <label for="" class="control-label">Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="dokumentasi_id" value="{{ $dokumentasi->id }}">
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
                                    <input type="hidden" name="dokumentasi_id" value="{{ $dokumentasi->id }}">
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


<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ url('admin/dokumentasi')}}" enctype="multipart/form-data" method="POST">
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
                                <label for="" class="control-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="" required autocomplete="off">
                            </div>
                        </div>
                    </div>
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
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
    </form>
    </div>
  </div>
</x-app>


