<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Tentang Satgas PPKS
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('admin/tentang/edit', $tentang->id) }}">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Title</label>
                            <input type="text" name="title" value="{{ $tentang->title }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" cols="30" rows="10" class="form-control">{{ $tentang->deskripsi }}</textarea>
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
