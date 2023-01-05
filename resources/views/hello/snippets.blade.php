@extends ('layout.main')
@section('container')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">
<!------ Include the above in your HEAD tag ---------->

<style>
    tr{
        border-collapse: collapse;
        border: 1px solid #C0C0C0;
    }
</style>

    

            <table class="table table-hover text-center"  style="text-align: center; justify-items: center;">
                <tr style="color: black;">
                    <td style="width: 200px;"><b>NIS</td>
                    <td style="width: 200px;"><b>Nama</td>
                    <td style="width: 240px;"><b>Rayon</td>
                    <td style="width: 280px;"><b>Saldo</td>
                    <td style="width: 200px;"><b>Opsi</td>
                </tr>
                @foreach($datas as $data)
                <tr>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->rayon }}</td>
                    <td>Rp. {{ number_format($data->uang, 2, ',','.') }}</td>
                    <td>
                        <!-- <a href="{{ route('indexEditActivity', $data->id) }}" class="btn btn-warning" style="width: 100px; margin-top: 5px;">Take saldo</a> -->
                       
                        <!-- <a href="{{route('deleteActivity', $data->id)}}" class="btn btn-warning">Delete</a> -->

                        <form action="{{ route('deleteActivity', $data->id) }}" method="POST">
                            @csrf
                            <a href="{{route('indexEditActivity', $data->id)}}" class="btn btn-warning width:">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            
                        </form>

                    </td>
                </tr>  
                @endforeach
                @endsection