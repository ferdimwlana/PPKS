<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Dokumentasi Satgas PPKS</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>
                            <dd>{{ $dokumentasi->title }}</dd>
                        </dt>
                    </dl>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('public') }}/{{ $dokumentasi->foto }}" alt="" style="width: 400px;height:400px" class="image-rounded">
                </div>
            </div>
        </div>
    </div>
</x-app>
