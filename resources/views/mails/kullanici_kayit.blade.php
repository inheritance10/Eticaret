<h1>{{config('app.name')}}</h1>
<p>Merhaba {{$kullanici->adSoyad}},</p>
<p>Kaydınız başarılı bir şekilde oluşturuldu</p>
<p>Kaydınızı aktifleştirmek için
    <a href="{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyonAnahtari}}/{{$kullanici->id}}">Tıklayın</a> veya aşağıdaki bağlantıyı tarayıcınızda açın.
</p>
<p>{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyonAnahtari}}/{{$kullanici->id}}</p>
