@extends('templates.default')

@section('content')
            <div class="page-title">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                      <a href=" {{ route('produk.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah </i></a>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Gambar</th>
                          <th>Nama Product</th>
                          <th>Rasa</th>
                          <th>Harga</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1 ?>
                        @foreach($produk as $produk)
                        <tr>
                          <td>{{$no}}</td>
                          <td><img src="{{asset('uploads/produk/'.$produk->gambar)}}" width="100" height="100"></td>
                          <td>{{$produk->nama_produk}}</td>
                          <td>{{$produk->rasa}}</td>
                          <td>{{$produk->harga}}</td>
                          <td>
                            <!-- <a href="" class="btn btn-success btn-sm"><i class="fa fa-info"> Info </i></a> -->
                            <a href="{{route('produk.edit', $produk->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit </i></a>
                            <a href="{{route('produk.hapus', $produk->id)}}" onclick="return confirm('apakah anda yakin akan menghapus?')" class="btn btn-danger  btn-sm"><i class="fa fa-trash-o"> Hapus </i></a>
                          </td>
                        </tr>
                        <?php $no++ ?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection