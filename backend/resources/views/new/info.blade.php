@extends('new.layouts.app')

@section('content')
    <div class="wrapper">
        <!-- Static Tables Start -->
        <div class="cs-tabs-left-right-main">
            <ul class="nav nav-tabs cs-tabs-menu" id="myTab2" role="tablist">
                <li class="nav-item cs-tabs-menu-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Genel Ayarlar
                    </a>
                </li>
                <li class="nav-item cs-tabs-menu-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Banka ve Ödeme Bilgileri
                    </a>
                </li>
                <li class="nav-item cs-tabs-menu-item">
                    <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab"
                        aria-controls="security" aria-selected="false">Güvenlik
                    </a>
                </li>
                <li class="nav-item cs-tabs-menu-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Bildirim Ayarları
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="cs-general-settings-main">
                    <div class="cs-setting-left">
                        <div class="cs-setting-l-top">
                            <div class="cs-setting-image">
                                <img src="{{ asset('assets/images/other/userpicbig.png') }}">
                            </div>
                            <a href="" class="cs-setting-left-btn1">Değiştir</a>
                            <div class="cs-textbox">
                                <h5 class="cs-set-name">İbrahim Göktuğ</h5>
                                <p class="cs-set-username">@ibrahimgoktug</p>
                            </div>
                            <a href="" class="cs-setting-left-btn2">Form logosu yerleştir</a>
                            <span class="cs-setting-left-item1">
                                <i class="fa-solid fa-paperclip" style="color: #757D8A;"></i>
                                ekstre-logo.png
                            </span>
                        </div>
                        <a href="" class="cs-setting-left-btn3">Hesabımı Askıya Al</a>
                    </div>
                    <div class="cs-setting-right">
                        <h3 class="cs-setting-right-title">İzinler</h3>
                        <div class="cs-setting-right-izinler">
                            <div class="cs-right-izinler-right-1">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="cs-profiligizle">
                                    <label class="form-check-label" for="cs-profiligizle">Profilimi
                                        gizle</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="cs-dosyalarigizle">
                                    <label class="form-check-label" for="cs-dosyalarigizle">Dosyalarımı
                                        gizle</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="cs-iletisimiengelle">
                                    <label class="form-check-label" for="cs-iletisimiengelle">İletişimi
                                        engelle</label>
                                </div>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Karanlık mod</label>
                            </div>
                        </div>
                        <h3 class="cs-setting-right-title">Kişisel Bilgiler</h3>
                        <div class="cs-bankaodemebilgileri">
                            <div class="cs-duoinputgroup">
                                <div class="cs-inputcontent">
                                    <label for="cs-name2">İsim</label>
                                    <input id="cs-name2" placeholder="Berkay">
                                </div>
                                <div class="cs-inputcontent">
                                    <label for="cs-surname2">Soyisim</label>
                                    <input id="cs-surname2" placeholder="Sezer">
                                </div>
                            </div>
                            <div class="cs-duoinputgroup">
                                <div class="cs-inputcontent">
                                    <label for="cs-usernanem2">Kullanıcı Adı</label>
                                    <input id="cs-usernanem2" placeholder="@berkaysezer">
                                </div>
                                <div class="cs-inputcontent">
                                    <label for="cs-eposta2">E-Posta Adresi</label>
                                    <input id="cs-eposta2" placeholder="deneme@gmail.com">
                                </div>
                            </div>
                            <div class="cs-duoinputgroup">
                                <div class="cs-inputcontent">
                                    <label for="cs-telno2">İletişim Numarası</label>
                                    <input id="cs-telno2" placeholder="+90 (555) 999 99 99">
                                </div>
                            </div>

                            <div class="cs-duoinputgroup">
                                <div class="cs-inputcontent-1">
                                    <label for="cs-about2">Hakkında</label>
                                    <textarea id="cs-about2" placeholder="Mesleğiniz ve hobilerinizden bahsedebilirsiniz."></textarea>
                                </div>
                            </div>
                            <button class="cs-bankaodemebilgileri-button">Kaydet</button>
                        </div>
                        <div class="cs-setting-info-main">
                            <div class="cs-setting-info-left">
                                <h3 class="cs-setting-right-title">Uzmanı Olduğu Alanlar/Araçlar</h3>
                                <select>
                                    <option>Kullanıcı</option>
                                    <option>Satıcı</option>
                                </select>
                                <input placeholder="Kullanıcı Arabirimi Tasarımı">
                                <div class="cs-setting-info-btngroup">
                                    <span class="cs-setting-info-btn">AutoCad <a href="">x</a></span>
                                    <span class="cs-setting-info-btn">Sap2000 <a href="">x</a></span>
                                    <span class="cs-setting-info-btn">ideCad <a href="">x</a></span>
                                    <span class="cs-setting-info-btn">Sta4Cad <a href="">x</a></span>
                                </div>
                            </div>
                            <div class="cs-setting-info-right">
                                <h3 class="cs-setting-right-title">Eğitim ve Sertifika Bilgileri</h3>

                                <div class="cs-inputcontent">
                                    <label for="cs-bolum3">Bölüm</label>
                                    <input id="cs-bolum3" placeholder="Grafik Tasarım">
                                </div>
                                <div class="cs-inputcontent">
                                    <label for="cs-okuladi3">Okulun Adı</label>
                                    <input id="cs-okuladi3" placeholder="Yaşar Üniversitesi">
                                </div>
                                <div class="cs-inputcontent">
                                    <label for="cs-mezuniyet3">Mezuniyet Yılı</label>
                                    <select id="cs-mezuniyet3">
                                        <option>2023</option>
                                        <option>2022</option>
                                        <option>2021</option>
                                        <option>2020</option>
                                        <option>2019</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <button class="cs-settinginfo-button">Kaydet</button>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade cs-odemebilgilerimain" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <div class="cs-bankaodemebilgileri">
                    <div class="cs-duoinputgroup">
                        <div class="cs-inputcontent">
                            <label for="cs-name1">İsim</label>
                            <input id="cs-name1" placeholder="Berkay">
                        </div>
                        <div class="cs-inputcontent">
                            <label for="cs-surname1">Soyisim</label>
                            <input id="cs-surname1" placeholder="Sezer">
                        </div>
                    </div>
                    <div class="cs-duoinputgroup">
                        <div class="cs-inputcontent">
                            <label for="cs-tc1">T.C. Kimlik No</label>
                            <input id="cs-tc1" placeholder="12345678911">
                        </div>
                        <div class="cs-inputcontent">
                            <label for="cs-telno1">Cep Telefonu</label>
                            <input id="cs-telno1" placeholder="+90 (553) 441 91 20">
                        </div>
                    </div>
                    <div class="cs-duoinputgroup">
                        <div class="cs-inputcontent">
                            <label for="cs-iban1">IBAN</label>
                            <input id="cs-iban1" placeholder="TR900006400000133870190524">
                        </div>
                    </div>
                    <div class="cs-duoinputgroup">
                        <div class="cs-inputcontent-1">
                            <label for="cs-address1">Adres</label>
                            <textarea id="cs-address1"
                                placeholder="Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit "></textarea>
                        </div>
                        <div class="cs-inputcontent-2">
                            <div class="cs-inputcontent mb-3">
                                <label for="cs-district1">İlçe</label>
                                <input id="cs-district1" placeholder="Bornova">
                            </div>
                            <div class="cs-inputcontent">
                                <label for="cs-city1">İl</label>
                                <input id="cs-city1" placeholder="İzmir">
                            </div>
                        </div>
                    </div>
                    <button class="cs-bankaodemebilgileri-button">Kaydet</button>
                </div>
            </div>

            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            </div>
        </div>
    </div>
@endsection
