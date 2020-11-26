<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1> ad </h1>

  <!-- <video  controls preload="metadata" src="{{ asset('video/1605238325171.mp4') }}" height="200px" width="100%"> </video> -->
  @foreach ($data as $g)

  <!-- <video  controls preload="metadata" src="{{ asset('video/1605238325171.mp4') }}" height="200px" width="100%"> </video> -->

  <video controls preload="metadata"  src="{{ asset('video/'.  $g->file ) }}" height="200px" width="50%">  </video>
 <p> {{ $g->keterangan}}</p>
  @endforeach
</body>
</html>