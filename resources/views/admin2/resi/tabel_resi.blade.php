@extends('admin2.v_template')
@section('title')
<title>Tabel Resi Pembayaran</title>
@endsection

@section('content')
<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data Resi Pembayaran</h4>
              <div class="row">
                <div class="col-12"></div>
                  <div class="table-responsive">
                  <a class="btn btn-outline-success" href="{{ url('tbl_resi/create') }}">Tambah Data</a>
                    <br>
                    <br>
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>ID Pemesanan</th>
                            <th>ID User</th>
                            <th>ID Wisata</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Fasilitas</th>
                            <th>Jumlah</th>
                            <th>Tagihan</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($datas as $value)
                        <tr>
                            <td>{{ $value->ID_Pemesanan }}</td>
                            <td>{{ $value->ID_User }}</td>
                            <td>{{ $value->ID_Wisata }}</td>
                            <td>{{ $value->Tanggal_Kunjungan }}</td>
                            <td>{{ $value->fasilitas }}</td>
                            <td>{{ $value->jumlah }}</td>
                            <td>{{ $value->tagihan }}</td>
                            <td>
                              <a class="btn btn-outline-warning" href="{{ url('tbl_resi/'.$value->ID_ResiPembayaran.'/edit') }}">Update</a>
                              <form action="{{ url('tbl_resi/'.$value->ID_ResiPembayaran) }}" method="post">
                                @csrf 
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-outline-danger" type="submit">Delete</button>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection