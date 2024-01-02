<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail File</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>
                            <dd>{{ $lapor->nama_lengkap_pelapor }}</dd>
                            <dd>{{ $lapor->email}}</dd>
                            <dd>{{ $lapor->no_handphone_pelapor}}</dd>
                            <dd>{{ $lapor->status_pelapor}}</dd>
                            <dd>{{ $lapor->kategori}}</dd>
                            <dd>{{ $lapor->nama_lengkap_korban}}</dd>
                            <dd>{{ $lapor->alamat}}</dd>
                            <dd>{{ $lapor->no_handphone_korban}}</dd>
                            <dd>{{ $lapor->jenis_kelamin}}</dd>
                            <dd>{{ $lapor->status_korban}}</dd>
                            <dd>{{ $lapor->nama_lengkap_pelaku }}</dd>
                            <dd>{{ $lapor->no_handphone_pelaku }}</dd>
                            <dd>{{ $lapor->status_pelaku }}</dd>
                            <dd>{{ $lapor->jenis_kejahatan }}</dd>
                        </dt>
                    </dl>
                </div>
                <div class="col-md-6">
                    @php

                        $contains = Str::contains($lapor->file, '.mp4');
                    @endphp
                    @if ($contains)

                    <video width="320" height="240" controls>
                        <source src="{{ url('public') }}/{{ $lapor->file }}" type="video/mp4">
                        <source src="{{ url('public') }}/{{ $lapor->file }}g" type="video/ogg">
                      Your browser does not support the video tag.
                      </video>
                        @else
                        <img src="{{ url('public') }}/{{ $lapor->file }}" alt="" style="width: 400px;height:400px" class="image-rounded">
                    @endif


                </div>
            </div>
        </div>
    </div>
</x-app>
