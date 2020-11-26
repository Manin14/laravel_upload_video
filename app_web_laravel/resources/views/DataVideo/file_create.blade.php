<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
     <!-- alert -->
     <div class="container"> 
         <div class="col-md-3-mt-12">
             @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
             </div>
             @endif
          </div> 
      </div>

      

<h2> create </h2>


<!-- Main content -->
<div class="container">
           <h1>  Upload </h1>
            <hr>

            <form enctype="multipart/form-data" action="{{ url('simpan-video') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nama">Keterangan :</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" required="">
                </div>
                <div class="form-group">
                    <label for="email">File: Format Harus JPG, JPEG, PNG</label>
                    <input type="file" class="form-control" id="foto" name="file" required="">
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-md btn-primary"> 
                         <i class="fas fa-upload"></i>
                             Submit
                    </button>
                    
                </div>
            </form>
      </div>
 
</body>
</html>