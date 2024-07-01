@extends('layout.master', ['page' => 'Data Pendaftar'])
@section('cssplugin')
    <link rel="stylesheet" href="{{asset('assets/css/plugins/dataTables.bootstrap5.min.css')}}">
@endsection
@section('jsplugin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/dataTables.bootstrap5.min.js')}}"></script>
@endsection
@section('script')
    <script>
        let total, pageTotal;
        const table = $('#dom-jqry').DataTable();
        $('#colum-render').DataTable({
            columnDefs: [
                {
                    render: function (data, type, row) {
                        return data + ' (' + row[3] + ')';
                    },
                    targets: 0
                },
                {
                    visible: false,
                    targets: [3]
                }
            ]
        });
    </script>
@endsection
@section('content')
    <div class="auth-main v1">
        <div class="bg-overlay bg-dark"></div>
        <div class="auth-wrapper">
            <div class="auth-form">
                <div class="card" style="max-width: 1080px">
                    <div class="card-header bg-dark">
                        <h4 class="text-center text-white mb-0 f-w-500">DATA PENDAFTAR</h4>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>No Pendaftaran</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Jenjang</th>
                                    <th>Program</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->register}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->ladder == '1' ? "MTS" : "MA"}}</td>
                                        <td>{{$student->program == '1' ? "Tahfidz" : "Kitab"}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#"><img src="{{asset('assets/images/logo2.png')}}" alt="img" width="40px"></a>
                            <a href="{{route('home')}}" class="link-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
