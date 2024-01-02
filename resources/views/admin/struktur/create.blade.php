<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('struktur') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            <input type="text" name="foto" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control">
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
</x-app>
