<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Materi
            </div>
            <a href="{{ url('admin/materi/create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus">Tambah Data</i>
            </a>
        </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table id="example2" class="table table-dark table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width ="100px">No</th>
                            <th width ="150px">Aksi</th>
                            <th>Title</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $list_materi as $materi )
                        <tr>
                            <td>{{$loop ->iteration}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/materi', $materi->id) }}" class="btn btn-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="{{ url('admin/materi/edit', $materi->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $materi->id }}" />
                                </div>
                            </td>
                            <td>
                                {{$materi -> title}}
                            </td>
                            <td>
                                {{$materi -> link}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
</x-app>
