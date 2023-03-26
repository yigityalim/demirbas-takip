@extends('app')

@section('title', 'Anasayfa')

@section('content')
    <div class="container">
        <form method="post" class="needs-validation my-2" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Email</label> <br>
                <input type="text" value="@getData('username')" class="@hasError('username')" id="username"
                       placeholder="Kullanıcı adı" name="username">
                @getError('username')
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Şifre</label> <br>
                <input type="password" class="@hasError('password')" id="password" placeholder="Parola"
                       name="password">
                @getError('password')
            </div>
            <div class="mb-3">
                <label for="password_again" class="form-label">Şifre tekrar</label> <br>
                <input type="password" class="@hasError('password_again')" id="password_again"
                       placeholder="Parola (Tekrar)" name="password_again">
                @getError('password_again')
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <h3 class="text-start">Ürünler Tablosu</h3>
        <table class="table table-striped border">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ürün Adı</th>
                <th scope="col">Departman Numarası</th>
                <th scope="col">Kategori ID</th>
                <th scope="col">Seri Numarası</th>
                <th scope="col">Açıklama</th>
                <th scope="col">Satın Alma Tarihi</th>
                <th scope="col">Satın Alma Maliyeti</th>
                <th scope="col">Elden Çıkarma Tarihi</th>
                <th scope="col">Oluturulma Tarihi</th>
                <th scope="col">Güncelleme Tarihi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($demirbaslar as $demirbas)
                <tr>
                    <th scope="row">{{ $demirbas->id }}</th>
                    <td>{{ $demirbas->ad }}</td>
                    <td>{{ $demirbas->departman_id }}</td>
                    <td>{{ $demirbas->kategori_id }}</td>
                    <td>{{ $demirbas->seri_no }}</td>
                    <td>{{ $demirbas->aciklama }}</td>
                    <td>{{ $demirbas->sati_nalma_tarihi }}</td>
                    <td>{{ $demirbas->satin_alma_maliyeti }}</td>
                    <td>{{ $demirbas->elden_cikarma_tarihi ?? 'Çıkarılmamış' }}</td>
                    <td>{{ $demirbas->olusturulma_tarihi }}</td>
                    <td>{{ $demirbas->guncelleme_tarihi }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <hr>

        <h3 class="text-start">Kullanıcıları Tablosu</h3>
        <table class="table table-striped border">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kullanıcı Adı</th>
                <th scope="col">Kullanıcı Email</th>
                <th scope="col">Kullanıcı Şifre</th>
                <th scope="col">Kullanıcı Oluşturulma Tarihi</th>
                <th scope="col">Kullanıcı Güncelleme Tarihi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($kullanicilar as $kullanici)
                <tr>
                    <th scope="row">{{ $kullanici->id }}</th>
                    <td>{{ $kullanici->ad }}</td>
                    <td>{{ $kullanici->email }}</td>
                    <td>{{ $kullanici->sifre }}</td>
                    <td>{{ $kullanici->olusturulma_tarihi }}</td>
                    <td>{{ $kullanici->guncelleme_tarihi }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <hr>

        <h3 class="text-start">Departmanları Tablosu</h3>

        <table class="table table-striped border">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Departman Adı</th>
                <th scope="col">Departman Oluşturulma Tarihi</th>
                <th scope="col">Departman Güncelleme Tarihi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($departmanlar as $departman)
                <tr>
                    <th scope="row">{{ $departman->id }}</th>
                    <td>{{ $departman->ad }}</td>
                    <td>{{ $departman->olusturulma_tarihi }}</td>
                    <td>{{ $departman->guncelleme_tarihi }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

