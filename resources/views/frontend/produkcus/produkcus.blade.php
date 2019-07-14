@extends('frontend.default')

@section('content')
            <div class="page-title">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Produk <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
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
                       
                        @foreach($produkcus as $produkcus)
                        <tr>
                          <th>No</th>
                          <th>Gambar</th>
                          <th>Nama Product</th>
                          <th>Rasa</th>
                          <th>Harga</th>
                          <th>Aksi</th>
                          </tr>
                            <!-- <a href="" class="btn btn-success btn-sm"><i class="fa fa-info"> Info </i></a> -->
                            <a href="{{route('produkcus.pesan', $produkcus->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"> Simpan </i></a>
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
      </div>
    </div>
  </div>
</div>
@endsection