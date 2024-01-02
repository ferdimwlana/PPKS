{{-- <x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Identitas Pelaku
            </div>
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('admin/pelaku') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Lengkap Pelaku</label>
                            <input type="text" name="nama_lengkap_pelaku" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">No Handphone Pelaku</label>
                            <input type="varchar" name="no_handphone_pelaku" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
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
                <div class="row">
                    <div class="col-md-6">
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">File</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary float-right">
                            <i class="fas fa-save"></i>Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app> --}}
