<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Materi Satgas PPKS POLITAP</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dd>{{ $materi->title }}</dd>
                        <dd>{{ $materi->link }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app>
