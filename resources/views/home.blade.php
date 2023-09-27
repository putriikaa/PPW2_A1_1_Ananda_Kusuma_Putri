@extends('master')
@section('isi')
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">ID Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Stok Barang</th>
      <th scope="col">ID Supplier</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_gudang as $gudangbarang)
    <tr>
      <td>{{ $gudangbarang->id_barang }}</td>
      <td>{{ $gudangbarang->nama_barang }}</td>
      <td>{{ $gudangbarang->harga_barang }}</td>
      <td>{{ $gudangbarang->stok_barang }}</td>
      <td>{{ $gudangbarang->id_supplier }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
