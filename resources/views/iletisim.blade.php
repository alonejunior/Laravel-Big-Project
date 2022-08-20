
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>iletişim Formu</title>
  </head>
  <body>
        <form  action="{{route('sonuc')}}" method="post">
          @csrf
              <label>Ad Soyad</label> <br>
              <input type="text" name="ad soyad" > <br>

              <label>Telefon</label> <br>
              <input type="text" name="telefon" > <br>

              <label>E-mail</label> <br>
              <input type="text" name="mail" > <br>

              <label>Mesaj</label> <br>
              <input type="text" name="ad soyad" > <br>
              <textarea name="metin" style="width:300px; height:200px" ></textarea> <br>
              <input type="submit" name="ilet" value="Gönder">


        </form>
  </body>
</html>
