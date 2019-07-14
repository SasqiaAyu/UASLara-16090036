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
                          <th>Nama Customer</th>
                          <th>Email</th>
                          <th>Avatar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1 ?>
                        @foreach($customer as $customer)
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$customer->nama}}</td>
                          <td>{{$customer->email}}</td>
                          <th><img src="{{asset('uploads/customer/'.$customer->avatar)}}" width="70" height="70"></th>
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