@extends('layouts.admin')
@section('title', 'Member')
@section('content_admin')
            <h3 class="mb-3 mt-3 text-six">Data Member <span id="explore"></span></h3>
            <div class="my-2">              
                    <a href="tambah-member" class="btn btn-brown me-1 mb-3" id="change-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <i class='bx bx-plus fw-bolder me-2' ></i>
                            <span>Tambah</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row table-data">
                <div class="col-12">
                    <div class="data_table" style="font-size: rem;">
                        <table id="example" class="table ">
                            <thead class="text-six">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($member as $item)
                                <tr>
                                    <td class="fw-bold">{{$no++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{asset('asset/uploads/member/'.$item->foto)}}" class="cate-image" alt="foto member" style="width: 4vw; height: 100%;"></td>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->telpon}}</td>
                                    <td>{{$item->jk}}</td>
                                    <td>{{$item->alamat_lengkap}}</td>
                                    <td>
                                        <div class="action d-flex justify-content-start align-items-center">
                                            <a href="{{url('edit-member/'.$item->id)}}"><i class='bx bx-edit text-green fs-3'></i></a>
                                            <a href="{{url('hapus-member/'.$item->id)}}"><i class='bx bxs-trash text-red fs-3' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection