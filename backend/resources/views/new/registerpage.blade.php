@extends('new.layouts.app')

@section('content')
    <div class="cs-ph-register-main">
        <img class="cs-bottomimage" src="{{ asset('assets/images/other/bottom-img.png') }}">
        <div class="cs-left-area">
            <img src="{{ asset('assets/images/other/leftbg.png') }}">
        </div>
        <div class="cs-right-area">
            <div class="cs-right-top">
                <ul>
                    <li><a href="">Hakkımızda</a></li>
                    <li><a href="">S.S.S.</a></li>
                    <!-- Button trigger modal -->
                    <a href="" class="cs-kayitolbtn" data-toggle="modal" data-target="#kayitol">Kayıt Ol</a>
                </ul>
            </div>
            <div class="cs-right-bottom">
                <img src="{{ asset('assets/images/other/logo2.png') }}">
                <p class="cs-title">Projemhavuzda ile meslektaşlarını ekle, iş al-ver, ön muhasebeni kolayca tut.</p>
                <a href="" class="cs-hemenbaslabtn">Hemen Başla</a>
                <button class="btn cs-girisbtn" data-toggle="modal" data-target="#girisyap">Giriş Yap</button>
                <button class="btn" data-toggle="modal" data-target="#sifrebelirle">Şifre Belirle</button>
                <button class="btn" data-toggle="modal" data-target="#sifremiunuttum">Şifremi Unuttum</button>
                <button class="btn" data-toggle="modal" data-target="#sifredogrula">Şifre Doğrula</button>
            </div>
        </div>
        <!-- Şifremi Unuttum Modal -->
        <div class="modal fade" id="sifremiunuttum" tabindex="-1" role="dialog" aria-labelledby="sifredogrulaLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border:none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets/images/other/minilogo.png') }}">
                        <h2 class="cs-title1">Şifremi Unuttum</h2>
                        <span class="cs-desc1">Şifrenizi sıfırlamak için E-Posta adresinize bir sıfırlama kodu
                            gönderilecektir.</span>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="sifrenew">E-Posta Adresi</label>
                                <input type="text" class="form-control" id="sifrenew" placeholder="E-Posta adresiniz">
                            </div>
                        </div>

                        <button class="cs-girisyapbtn2">Gönder</button>
                        <button class="cs-girisyapbtn3">Vazgeç</button>
                        <span class="cs-desc2">Kodunuz size ulaşmadı mı? <a href=""
                                style="color: #1A1A1A;font-weight: 700;">Tekrar Gönder</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Şifre Doğrula Modal -->
        <div class="modal fade" id="sifredogrula" tabindex="-1" role="dialog" aria-labelledby="sifredogrulaLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border:none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets/images/other/minilogo.png') }}">
                        <h2 class="cs-title1">Şifremi Unuttum</h2>
                        <span class="cs-desc1">Şifrenizi sıfırlamak için E-Posta adresinize gönderilen 6 haneli
                            sıfırlama kodunu giriniz.</span>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="sifrenew">Sıfırlama Kodu</label>
                                <input type="text" class="form-control" id="sifrenew" placeholder="Yeni Şifre">
                            </div>
                        </div>

                        <button class="cs-girisyapbtn2">Doğrula</button>
                        <button class="cs-girisyapbtn3">Vazgeç</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Şifre Belirle Modal -->
        <div class="modal fade" id="sifrebelirle" tabindex="-1" role="dialog" aria-labelledby="girisyapLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border:none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets/images/other/minilogo.png') }}">
                        <h2 class="cs-title1">Şifre Belirle</h2>
                        <span class="cs-desc1">Lütfen yeni şifrenizi belirleyin.</span>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="sifrenew">Yeni Şifre</label>
                                <input type="text" class="form-control" id="sifrenew" placeholder="Yeni Şifre">
                            </div>
                        </div>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="sifrenew2">Yeni Şifre</label>
                                <input type="password" class="form-control" id="sifrenew2" placeholder="Yeni Şifre">
                            </div>
                        </div>

                        <button class="cs-girisyapbtn2">Güncelle</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Giriş Yap Modal -->
        <div class="modal fade" id="girisyap" tabindex="-1" role="dialog" aria-labelledby="girisyapLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border:none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets/images/other/minilogo.png') }}">
                        <h2 class="cs-title1">Giriş Yap</h2>
                        <span class="cs-desc1">ProjemHavuzda’ya hoş geldin!</span>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="username2">Kullanıcı Adı</label>
                                <input type="text" class="form-control" id="username2"
                                    placeholder="8+ karakter, büyük ve küçük harf">
                            </div>
                        </div>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="sifre3">Şifre</label>
                                <input type="password" class="form-control" id="sifre3"
                                    placeholder="Şifrenizi Giriniz">
                            </div>
                        </div>
                        <div class="cs-modal-duo" style="justify-content: space-between;">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="benihatirla_check">
                                <label class="form-check-label" for="benihatirla_check">Beni hatırla</label>
                            </div>
                            <a href="" style="text-decoration: underline; white-space: nowrap;">Şifremi unuttum</a>
                        </div>
                        <button class="cs-girisyapbtn2">Giriş Yap</button>
                        <span class="cs-desc2">Üye değil misiniz? <a href=""
                                style="color: #1A1A1A;font-weight: 700;">Hemen kayıt ol!</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!--Kayit Ol Modal -->
        <div class="modal fade" id="kayitol" tabindex="-1" role="dialog" aria-labelledby="kayitolLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border:none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="cs-title1">ProjemHavuzda’ya hoşgeldin!</h2>
                        <span class="cs-desc1">Kişisel hesabınızı doğrulayabilmeniz ve profilinizi oluşturmaya
                            başlayabilmeniz için tüm alanları doldurun.</span>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="isim">İsim</label>
                                <input type="text" class="form-control" id="isim" placeholder="İsim">
                            </div>
                            <div class="form-group">
                                <label for="soyisim">Soyisim</label>
                                <input type="text" class="form-control" id="soyisim" placeholder="Soyisim">
                            </div>
                        </div>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="username">Kullanıcı Adı</label>
                                <input type="text" class="form-control" id="username"
                                    placeholder="Kullanıcı Adınız">
                            </div>
                            <div class="form-group">
                                <label for="eposta1">E-Posta Adresi</label>
                                <input type="email" class="form-control" id="eposta1"
                                    placeholder="E-Posta Adresiniz">
                            </div>
                        </div>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="sifre">Şifre</label>
                                <input type="password" class="form-control" id="sifre"
                                    placeholder="8+ karakter, büyük ve küçük harf">
                            </div>
                            <div class="form-group">
                                <label for="sifre2">Şifreni Onayla</label>
                                <input type="password" class="form-control" id="sifre2"
                                    placeholder="Lütfen şifrenizi onaylayın">
                            </div>
                        </div>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="phone">Telefon Numarası</label>
                                <input type="tel" class="form-control" id="phone"
                                    placeholder="Telefon Numaranız">
                            </div>
                            <div class="form-group">
                                <label for="meslek">Meslek Seçiniz</label>
                                <select class="form-control" id="meslek">
                                    <option>Mühendis</option>
                                    <option>Doktor</option>
                                    <option>Doktor</option>
                                </select>
                            </div>
                        </div>
                        <div class="cs-modal-duo">
                            <div class="form-group">
                                <label for="sehirselect">Yaşadığınız Şehir</label>
                                <select class="form-control" id="sehirselect">
                                    <option>Ankara</option>
                                    <option>İstanbul</option>
                                    <option>İzmir</option>
                                    <option>Eskişehir</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Evet, e-posta gönderimini
                                onaylıyorum.</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2"><a href=""
                                    style="color: #0779FF;">Üyelik Sözleşmesini</a>
                                okudum ve kabul ediyorum.</label>
                        </div>
                        <button class="btn cs-mainkayitol">Kayıt Ol</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
