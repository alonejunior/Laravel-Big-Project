
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Örnek Form Sayfası</title>
  </head>
  <body>
        <form  action="{{route('sonuc')}}" method="post">
          @csrf

              <textarea name="metin" style="width:300px; height:200px" ></textarea> <br>
              <input type="submit" name="ilet" value="Gönder">


        </form>
  </body>
</html>
