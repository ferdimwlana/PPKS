<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Deskripsi
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('admin/deskripsi/edit', $deskripsi->id) }}">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" cols="30" rows="10" class="form-control">{{ $deskripsi->deskripsi }}</textarea>
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
