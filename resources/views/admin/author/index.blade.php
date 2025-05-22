@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Penulis</h3>
        <a href="{{ route('admin.author.create') }}" class="btn btn-primary">Tambah Penulis</a>
    </div>
    <div class="box-body">
        <table id="datTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nama</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#datTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.author.data') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                ]
            });
        });
    </script>
@endpush
