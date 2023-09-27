<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP IMPORT AND EXPORT</title>
  </head>
  <body>
    

  <div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h5 class="mb-3">How to import data from Excel (CSV,XLS, XLSX) File to Mysqli in PHP using php suff </h5>
            <hr>
            <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="card card-body shadow">
                    <div class="row">
                        <div class="col-md-2 my-auto">
                            <h5>Select File</h5>
                        </div>
                        <div class="col-md-4">
                            <input type="file" name="import_file" class="form-control" />
                        </div>
                        <div class="col-md-4">
                           <button type="submit" name="import_file_btn" class="btn btn-primary">Upload / Import</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

  <!-- <form action="code.php" method="POST" enctype="multipart/form-data">
                                              
    <input type="file" name="import_file" class="form-control" />              
    <button type="submit" name="import_file_btn" class="btn btn-primary">Upload / Import</button>
            </form>
-->
            

  </body>
</html>
