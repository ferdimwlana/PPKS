<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data User
            </div>
            <a href="{{ url('admin/user/create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i> Tambah User
            </a>
        </div>
        <div class="card-body" >
            <table id="example2" class="table table-dark table-bordered table-striped">
                <thead>
                    <th width="100px">No</th>
                    <th width="150px">Aksi</th>
                    <th>Username</th>
                </thead>
                <tbody>
                    @foreach ($list_user as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/user', $user->id) }}" class="btn btn-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="{{ url('admin/user/edit', $user->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $user->id }}" />

                                </div>
                            </td>
                            <td> {{ $user->username }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- @push('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    @endpush
    @push('script')
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#TableFerdy');
    </script>
    @endpush --}}
</x-app>
