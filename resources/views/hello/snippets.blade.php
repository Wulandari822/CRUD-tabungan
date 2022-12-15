<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">
<!------ Include the above in your HEAD tag ---------->

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        border: 0px;
        color: black;
        background-color: #d9edf7;
        padding: 17px 0px;
        font-size: 14px;
    }

    td,
    th {
        border: 1px solid #bce8f1;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #fff;


    }

</style>
<div class="container wrapper" style="width: 50%;">
    <div class="row cart-head">
        <div class="container">
            <div class="row">
                <p></p>
            </div>
            <div class="row">
                <p></p>
            </div>
        </div>
    </div>
    <div class="row cart-body">
        <form class="form-horizontal" method="POST" action="{{ route('store') }}">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6 ">
                @yield('container')

            </div>


            <div style="text-align: center; justify-items: center;">

                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading"><b> TABUNGAN ONLINE</div>
                    <div class="panel-body">
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <strong>NIS:</strong>
                                <input type="text" name="nis" class="form-control" value="" minLength="8" maxLength="8">
                            </div>
                            <div class="span1"></div>
                            <div class="col-md-6 col-xs-12">
                                <strong>Nama:</strong>
                                <input type="text" name="nama" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <strong>Rayon:</strong>
                                <input type="text" name="rayon" class="form-control" value="" />
                            </div>
                            <div class="span1"></div>
                            <div class="col-md-6 col-xs-12">
                                <strong>Money:</strong>
                                <input type="text" name="uang" class="form-control"  value="" />
                            </div>
                            <div class="col-md-6 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-submit-fix mt-4 ">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

            <table class="table table-stripped text-center">
                <tr style="color: #31708f;">
                    <td style="width: 200px;"><b>NIS</td>
                    <td style="width: 200px;"><b>Nama</td>
                    <td style="width: 240px;"><b>Rayon</td>
                    <td style="width: 280px;"><b>Saldo Anda</td>
                    <td style="width: 200px;"><b>Action</td>
                </tr>
                @foreach($datas as $data)
                <tr>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->rayon }}</td>
                    <td>Rp. {{ number_format($data->uang, 2, ',','.') }}</td>
                    <td>
                        <!-- <a href="{{ route('indexEditActivity', $data->id) }}" class="btn btn-warning" style="width: 100px; margin-top: 5px;">Take saldo</a> -->
                        <a href="{{route('indexEditActivity', $data->id)}}" class="btn btn-warning">Add saldo</a>
                        <!-- <a href="{{route('deleteActivity', $data->id)}}" class="btn btn-warning">Delete</a> -->

                        <form action="{{ route('deleteActivity', $data->id) }}" method="POST">
                            @csrf
                            <a class="btn btn-primary"  href="{{route('indexEditActivity', $data->id)}}">Add saldo</a>
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>

                    </td>
                </tr>
                @include('hello.modal')
                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                @endforeach
