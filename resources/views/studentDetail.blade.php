@extends('layout.master', ['page' => 'Data Pendaftar'])
@section('content')
    <div class="auth-main v1">
        <div class="bg-overlay bg-dark"></div>
        <div class="auth-wrapper">
            <div class="auth-form">
                <div class="card user-card">
                    <div class="card-body">
                        <div class="user-cover-bg">
                            <img src="{{asset('assets/images/user/img-user-cover-1.jpg')}}" alt="image"
                                 class="img-fluid w-100">
                        </div>
                        <div class="chat-avtar card-user-image">
                            <img src="{{asset('assets/images/user/avatar-1.jpg')}}" alt="user-image"
                                 class="img-thumbnail rounded-circle ">
                            <i class="chat-badge bg-success"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-1">{{$student->name}}</h6>
                                <p class="text-muted text-sm mb-0">No. Pendaftaran
                                    <a href="#" class="text-primary">{{$student->register}}</a>
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <form method="post" action="{{route('print')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$student->id}}">
                                    <button type="submit" class="btn btn-primary btn-sm">Cetak</button>
                                </form>
                            </div>
                        </div>
                        <div class="row g-3 my-2 text-center">
                            <div class="col-4">
                                <h5 class="mb-0">{{$student->birthplace}}</h5>
                                <small class="text-muted">Tempat Lahir</small>
                            </div>
                            <div class="col-4 border border-top-0 border-bottom-0">
                                <h5 class="mb-0">{{\Carbon\Carbon::create($student->birthdate)->translatedFormat('d F Y')}}</h5>
                                <small class="text-muted">Tanggal Lahir</small>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">{{$student->gender == 'L' ? 'Laki-laki' : 'Perempuan'}}</h5>
                                <small class="text-muted">Jenis Kelamin</small>
                            </div>
                        </div>
                        <div class="saprator my-2 mt-4">
                        </div>
                        <div class="row g-3 my-2 text-center">
                            <div class="col-4">
                                <h5 class="mb-0">{{$student->ladder == '1' ? 'MTS' : "MA"}}</h5>
                                <small class="text-muted">Jenjang</small>
                            </div>
                            <div class="col-4 border border-top-0 border-bottom-0">
                                <h5 class="mb-0">{{$student->program == '1' ? "Tahfidz" : 'Kitab'}}</h5>
                                <small class="text-muted">Program</small>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">{{$student->room}}</h5>
                                <small class="text-muted">Ruangan Ujian</small>
                            </div>
                        </div>
                        <div class="saprator my-2">
                            <span>Alamat</span>
                        </div>
                        <div class="text-center">
                            {{$student->address}}
                        </div>
                        <div class="saprator my-2 mt-4">
                        </div>
                        <div class="row g-3 my-2 text-center">
                            <div class="col-4">
                                <h5 class="mb-0">{{$student->father}}</h5>
                                <small class="text-muted">Nama Ayah</small>
                            </div>
                            <div class="col-4 border border-top-0 border-bottom-0">
                                <h5 class="mb-0">{{$student->school}}</h5>
                                <small class="text-muted">Asal Sekolah</small>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">{{$student->phone}}</h5>
                                <small class="text-muted">Nomor Whatsapp</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
