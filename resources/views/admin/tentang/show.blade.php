<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Tentang PPKS</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dd>{{ $tentang->title }}</dd>
                        <dd>{{ $tentang->deskripsi }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app>
