<x-app>
    <div class="card text-white bg-dark mb-12" style="max-width: 63rem;">
        <div class="card-header">
            <div class="card-title">
                Tambah Tentang Satgas PPKS POLITAP
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('admin/tentang') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" cols="30" rows="10" class="form-control"></textarea>
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
