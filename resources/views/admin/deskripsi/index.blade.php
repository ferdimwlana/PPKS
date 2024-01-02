<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Deskripsi
            </div>
                <a href="{{url ('admin/deskripsi/create') }}" class="btn btn-primary float-right">
                    <i class="fas fa-plus">Tambah Data</i>
                </a>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-dark table-bordered table-striped">
                <thead>
                    <tr>
                        <th width ="100px">No</th>
                        <th width ="150px">Aksi</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $list_deskripsi as $deskripsi )
                    <tr>
                        <td>{{$loop ->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('admin/deskripsi', $deskripsi->id) }}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{ url('admin/deskripsi/edit', $deskripsi->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{ $deskripsi->id }}" />
                            </div>
                        </td>
                        <td>
                            {{$deskripsi -> deskripsi}}
                        </td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
