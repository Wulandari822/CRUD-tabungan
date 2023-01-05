<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <div class="text-center col-md-6" style="position: relative; left: 50%; top: 50%; ">
        <div class="card">
            <form class="form horizontal" method="POST" action="{{ route('store') }}">
                @csrf
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">NIS</label>
                    <input type="text" name="nis"class="form-control" id="validationCustom01" value="" required="" fdprocessedid="ifamh9">
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Nama</label>
                    <input type="text" name="nama"class="form-control" id="validationCustom02" value="" required="" fdprocessedid="pckcm8">
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Rayon</label>
        <input type="text" name="rayon"class="form-control" id="validationCustom02" value="" required="" fdprocessedid="pckcm8">
      </div>
      <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Jumlah uang</label>
          <input type="text" name="uang"class="form-control" id="validationCustom02" value="" required="" fdprocessedid="pckcm8">
        </div>
        <div class="col-12 mt-1" >
            <br>
            <button class="btn btn-primary" type="submit" fdprocessedid="rw9243">Submit</button>
        </div>
    </form>
    
</div>
</div>
    <!-- End Example Code -->
</body>
</html>