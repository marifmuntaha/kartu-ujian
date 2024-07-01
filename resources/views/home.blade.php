@extends('layout.master', ['page' => 'Dashboard'])
@section('cssplugin')
    <link rel="stylesheet" href="{{asset('assets/css/plugins/datepicker-bs5.min.css')}}">
@endsection
@section('jsplugin')
    <script src="{{asset('assets/js/plugins/datepicker-full.min.js')}}"></script>
@endsection
@section('script')
    <script>
        (function () {
            const d_week = new Datepicker(document.querySelector('#birthdate'), {
                buttonClass: 'btn',
                dateFormat: 'dd/mm/yyyy'
            });
        })();
    </script>
@endsection
@section('content')
    <div class="auth-main v2">
        <div class="bg-overlay bg-dark"></div>
        <div class="auth-wrapper">
            <div class="auth-sidecontent">
                <div class="text-start px-3 px-md-5">
                    <h2 class="text-white">PONPES DARUL HIKMAH MENGANTI</h2>
                    <p class="text-white mt-md-2">
                        RT 01 RW 01, Ds. Menganti, Kec. Kedung, Kabupaten Jepara, Jawa Tengah 59463
                    </p>
                </div>
            </div>
            <div class="auth-form">
                <div class="card my-5 mx-3">
                    <div class="card-header bg-dark">
                        <h4 class="text-center text-white mb-0 f-w-500">Masukkan identitas anda</h4>
                    </div>
                    <div class="card-body">
                        @if($errors)
                            {!! implode('', $errors->all("<div class='alert alert-danger' role='alert'>:message</div>")) !!}
                        @endif
                        <form method="post" action="{{route('student.find')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                       name="register"
                                       placeholder="Nomor Pendaftaran">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="birthdate"
                                       name="birthdate"
                                       placeholder="Tanggal Lahir">
                            </div>
                            <div class="d-grid mt-2">
                                <button type="submit" class="btn btn-primary">CARI</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer border-top">
                        <div class="d-flex justify-content-between align-items-end">
                            <div>
                                <h6 class="f-w-500 mb-0">Lupa Nomor Pendaftaran?</h6>
                                <a href="{{route('student.list')}}" class="link-primary">Lihat disini</a>
                            </div>
                            <a href="#"><img src="{{asset('assets/images/logo2.png')}}" alt="img" width="40px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
