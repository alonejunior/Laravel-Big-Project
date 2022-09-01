
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resim Upload Sayfası</title>
  </head>
  <body>
        <form  action="{{route('yukle')}}" method="post" enctype="multipart/form-data">
          @csrf
          <label >resim seçiniz</label> <br> <br>
                <input type="file" name="resim"> <br> <br>
                <input type="submit" name="ilet" value="Resim yükle">
        </form>
  </body>
</html>
