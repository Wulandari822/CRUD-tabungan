
@extends('hello.snippets')
@section('container')

<table class="table table-dark table-striped">
                <table class="table table-dark table-striped">
  <thead>
    <tr >
      <th scope="col ">Date</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Rayon</th>
      <th scope="col">Money</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
                </table>

                @endsection
