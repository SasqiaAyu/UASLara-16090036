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
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pembeli</th>
                          <th>Pesanan</th>
                          <th>Harga</th>
                          <th>Tanggal pembelian</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1 ?>
                        @foreach($pesanan as $pesanan)
                        <tr>
                          <td>{{$no}}</td>

                          @foreach($customer as $cus)
                            @if($cus->id == $pesanan->id_customer)
                              <td>{{$cus->nama}}</td>
                            @endif
                          @endforeach


                          @foreach($produk as $p)
                            @if($p->id == $pesanan->id_produk)
                              <td>{{$pesanan->id_produk}}</td>
                            @endif
                          @endforeach
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