<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Berita PPKS</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dd>{{ $berita->title }}</dd>
                        <dd>{{ $berita->penulis }}</dd>
                        <dd>{{ $berita->tanggal }}</dd>
                        <dd>{{ $berita->deskripsi }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('public') }}/{{ $berita->foto }}" alt="" style="width: 400px;height:400px" class="image-rounded">
                </div>
            </div>
        </div>
    </div>
</x-app>
