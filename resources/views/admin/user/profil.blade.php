@extends('layouts.admin')

@section('content_admin')
        <h2 class="mb-3  fw-normal text-six">Profil Kasir<span id="explore"></span></h2> 
        
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center align-baseline mb-3">
                        @if($user->foto)
                        <img src="{{ asset('asset/uploads/foto/'.$user->foto) }}" class="img-thumbnail shadow rounded-circle p-0 w-75 zoom"  alt="" alt="">
                    @endif
                    </div>
                    <div class="col-md-12 d-flex justify-content-center m-0">
                        <h5 class="fw-bold">{{ $user->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault01" class="form-label fw-semibold text-one">Nama </label>
                        <input type="text" class="form-control text-two bg-brown" name="nama" id="validationDefault01" required value="{{ $user->name }}" readonly>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault02" class="form-label fw-semibold text-one">Username</label>
                        <input type="text" class="form-control text-two bg-brown" name="username" id="validationDefault02" required value="{{ $user->username }}" readonly>
                    </div>
                    <div class="col-md-6 mb-2 mb-3">
                        <label for="validationDefault03 mb-0" class="form-label fw-semibold text-one">Tanggal Lahir</label>
                        <input type="text" class="form-control text-two bg-brown" name="ttl" id="validationDefault01"  aria-describedby="inputGroupPrepend2" required value="{{ $user->ttl }}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02" class="form-label fw-semibold text-one">Jenis Kelamin</label>
                        <input type="text" class="form-control text-two bg-brown" name="gender" id="validationDefault02" required value="{{ $user->gender }}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01" class="form-label fw-semibold text-one">Email </label>
                        <input type="email" class="form-control text-two bg-brown" name="emaail" id="validationDefault01" required value="{{ $user->email }}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02" class="form-label fw-semibold text-one">Telepon</label>
                        <input type="text" class="form-control text-two bg-brown" name="telepon" id="validationDefault02" required value="{{ $user->telepon }}" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label fw-semibold text-one">Alamat Lengkap</label>
                        <textarea class="form-control text-two bg-brown shadow-sm" placeholder="Leave a comment here" name="alamat" readonly style="min-height: 100px">{{ $user->alamat }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <a href="{{url('edit-user/'.$user->id)}}" class="btn btn-brown w-100" id="change">Ubah</a>
            </div>
        </div>
@endsection