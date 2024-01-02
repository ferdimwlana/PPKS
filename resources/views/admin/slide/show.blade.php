<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Foto</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Tampilan Slide</dt>
                    </dl>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('public') }}/{{ $slide->foto }}" alt="" style="width: 400px;height:400px" class="image-rounded">
                </div>
            </div>
        </div>
    </div>
</x-app>
