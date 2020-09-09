<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">


    <div class="row mt-2">
      <form action="#">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="nama" name="" value="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">NIP</label>
          <input type="text" class="form-control" id="nip" name="" value="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kantor</label>
          <input type="text" class="form-control" id="kantor" name="" value="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Homebase</label>
          <input type="text" class="form-control" id="homebase" name="" value="">
        </div>
        <input type="button" class="btn btn-primary" value="Tambah" id="tambahPegawai"> 
      </form>
      <div id="error-status"></div>
    </div>


    <div class="row mt-2">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">NIP</th>
            <th scope="col">Kantor</th>
            <th scope="col">Homebase</th>
          </tr>
        </thead>
        <tbody id="dataPegawai">
        </tbody>
      </table>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="/js/crud.js"></script>
</body>

</html>