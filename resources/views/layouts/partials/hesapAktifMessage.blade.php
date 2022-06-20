@if(session()->has('aktiflestir'))
    alertify.success({{session('hesapAktif')}});
@endif
