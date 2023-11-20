@extends('layouts.admin')
@section('title', 'User')
@section('content_admin')
            <h3 class="mb-3 mt-3 text-six">Data User <span id="explore"></span></h3>
            <div class="my-2">
                <a href="tambah-user" class="btn btn-brown me-1" id="change-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <i class='bx bx-plus fw-bolder me-2' ></i>
                        <span>Tambah</span>
                    </div>
                </a>
            </div>
            <div class="row table-data">
                <div class="col-12">
                    <div class="data_table" style="font-size: rem;">
                        <table id="example" class="table ">
                            <thead class="text-six">
                                <tr>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userdt as $item)
                                <tr>
                                    <td style="width: 100px;">{{$item->name}}</td>
                                    <td><img src="{{asset('asset/uploads/foto/'.$item->foto)}}" style="width: 5vw; height: 100%;" alt="image here" ></td>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->gender}}</td>
                                    <td>{{$item->ttl}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->level}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>
                                        <div class="action d-flex justify-content-center align-items-center">
                                            <a href="{{url('edit-user/'.$item->id)}}"><i class='bx bx-edit text-green fs-3'></i></a>
                                            <a href="{{url('delete-user/'.$item->id)}}"><i class='bx bxs-trash text-red fs-3' ></i></a>
                                        
                                        </div>

                                    </td>
                                    @endforeach
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endsection