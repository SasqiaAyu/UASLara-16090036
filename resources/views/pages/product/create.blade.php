@extends ('templates.default')

@section ('content')

 <div class="page-title">
              <div class="title_left">
                <h3>Tambah Product</h3>
              </div>

              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('produk.store')}}" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_produk" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Rasa<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="rasa">
                            <option>Original</option>
                            <option>Coklat</option>
                            <option>Strawberry</option>
                            <option>Mocca</option>
                            <option>Keju</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="last-name" name="harga" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gambar<span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" id="last-name" name="gambar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success btn-sm">Save</button>
                          <!-- <a href="" class="btn btn-success btn-sm"><i class="fa fa-plus"> Tambah </i></a> -->
                          <!-- <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"> Batal </i></a> -->
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>

@endsection