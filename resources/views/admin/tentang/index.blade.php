<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tentang Satgas PPKS
            </div>
            <a href="{{ url('admin/tentang/create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah Data</i>
            </a>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-dark table-bordered table-striped">
                <thead>
                    <tr>
                        <th width ="100px">No</th>
                        <th width ="150px">Aksi</th>
                        <th>Title</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $list_tentang as $tentang )
                    <tr>
                        <td>{{$loop ->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('admin/tentang', $tentang->id) }}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{ url('admin/tentang/edit', $tentang->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <x-button.delete id="{{ $tentang->id }}" />
                            </div>
                        </td>
                        <td>
                            {{$tentang -> title}}
                        </td>
                        <td>
                            {{$tentang -> deskripsi}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
