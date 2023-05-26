@extends('new.layouts.app')

@section('content')
    <div class="cs-management-main">
        <div class="cs-management-left">
            <div class="cs-left-1">
                <img src="{{ asset('assets/images/other/userpicbig.png') }}">
                <h3 class="cs-title">İbrahim Göktuğ</h3>
                <p class="cs-username">@ibrahimgoktug</p>
                <span class="cs-connections">10 Bağlantı</span>
                <a href="" class="cs-left1-edit">Düzenle</a>
            </div>

            <div class="cs-left-2">
                <div class="cs-left2-content">
                    <p class="cs-content-reason">Son Görülme</p>
                    <p class="cs-content-result1">Çevrimiçi</p>
                </div>
                <div class="cs-left2-content">
                    <p class="cs-content-reason">Ort. Yanıt Süresi</p>
                    <p class="cs-content-result2">4 dk.</p>
                </div>
                <div class="cs-left2-content">
                    <p class="cs-content-reason">Üyelik Tarihi</p>
                    <p class="cs-content-result2">16.03.2023</p>
                </div>
            </div>
            <div class="cs-left-3">
                <div class="cs-left-glo-content">
                    <p class="cs-left-glo-reason">Hakkında</p>
                    <a href="" class="cs-left-glo-result">Düzenle</a>
                </div>
                <p class="cs-desc">Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                    vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti
                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur
                    tempus urna at turpis condimentum lobortis.</p>
            </div>
            <div class="cs-left-4">
                <div class="cs-left-glo-content">
                    <p class="cs-left-glo-reason">Uzmanı Olduğu Alanlar/Araçlar</p>
                    <a href="" class="cs-left-glo-result">Düzenle</a>
                </div>
                <div class="cs-left4-content">
                    <span>UI/UX Design</span>
                    <span>Grafik Tasarım</span>
                    <span>Photoshop</span>
                    <span>Figma</span>
                    <span>Illustrator</span>
                </div>
            </div>
            <div class="cs-left-5">
                <div class="cs-left-glo-content">
                    <p class="cs-left-glo-reason">Eğitim ve Sertifika Bilgileri</p>
                    <a href="" class="cs-left-glo-result">Düzenle</a>
                </div>
                <h5 class="cs-title">Yaşar Üniversitesi</h5>
                <h6 class="cs-desc">Grafik Tasarımı, 2022</h6>
            </div>
        </div>
        <div class="cs-management-right">
            <div id="main">
                <div class="container">
                    <div class="accordion" id="faq">
                        <div class="card cs-accordion-card">
                            <div class="card-header" style="padding: 0;" id="faqhead1">
                                <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">Portfolyo</a>
                            </div>

                            <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                <div class="card-body">
                                    <div class="cs-first-main-area">
                                        <a href="" class="cs-first-content">
                                            <i class="fa-regular fa-heart cs-like-btn"></i>
                                            <img src="{{ asset('assets/images/other/infopage1.png') }}">
                                            <h4 class="cs-head">
                                                Sıhhi Projeler
                                            </h4>
                                            <p class="cs-content">
                                                Ben, premium Sıhhi Projeler yapıyorum
                                            </p>
                                        </a>
                                        <a href="" class="cs-first-content">
                                            <i class="fa-regular fa-heart cs-like-btn"></i>
                                            <img src="{{ asset('assets/images/other/infopage1.png') }}">
                                            <h4 class="cs-head">
                                                Kalorifer Tesisat Projesi
                                            </h4>
                                            <p class="cs-content">
                                                Ben, premium Kalorifer Tesisat Projesi yapıyorum
                                            </p>
                                        </a>
                                        <a href="" class="cs-first-content">
                                            <i class="fa-regular fa-heart cs-like-btn"></i>
                                            <img src="{{ asset('assets/images/other/infopage1.png') }}">
                                            <h4 class="cs-head">
                                                Isınma Projesi
                                            </h4>
                                            <p class="cs-content">
                                                Ben, premium Isınma Projesi tasarımları yaparım
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card cs-accordion-card">
                            <div class="card-header" style="padding:0" id="faqhead2">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq2" aria-expanded="true" aria-controls="faq2">Belgelerim</a>
                            </div>

                            <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                <div class="card-body">
                                    <div class="cs-second-main-title">
                                        <h4 class="cs-head">Cari Hesap Ekstreleri</h4>
                                        <a class="cs-link" href="">Tümünü Gör</a>
                                    </div>
                                    <ul class="cs-second-main-list">
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">ekstre-1.pdf</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">ibrahimgoktug</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">berkaysezer</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">ekstre-2.pdf</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">ekstre-1.pdf</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="cs-second-main-title">
                                        <h4 class="cs-head">Belgeler</h4>
                                    </div>
                                    <ul class="cs-second-main-list">
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">ekstre-1.pdf</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">ibrahimgoktug</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">berkaysezer</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">ekstre-1.pdf</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">ibrahimgoktug</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                        <li class="cs-second-list-item">
                                            <div class="cs-left">
                                                <img style="width: 45px;" src="{{ asset('assets/images/other/pdf.png') }}">
                                                <div class="cs-left-text">
                                                    <p class="cs-file-name">berkaysezer</p>
                                                    <p class="cs-file-info">16.03.2023 - 19:40 • 3 MB</p>
                                                </div>
                                            </div>
                                            <a class="cs-right-button" href="">
                                                <i class="fa-solid fa-cloud-arrow-down"
                                                    style="color:#4e73f8;font-size: 18px;"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card cs-accordion-card">
                            <div class="card-header" style="padding: 0;" id="faqhead3">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq3" aria-expanded="true" aria-controls="faq3">Dosya
                                    Yönetimi
                                    <span class="cs-third-info">15 dosya mevcut</span>
                                    <button class="cs-buying-third">
                                        <i class="fa-solid fa-cart-shopping" style="color:white"></i>
                                        Alan Satın Al
                                    </button>
                                </a>

                            </div>

                            <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                <div class="card-body">
                                    <div class="cs-third-content">
                                        <div class="cs-titlebox" style="flex:1">
                                            <span class="cs-title">Mevcut Alan</span>
                                            <h6>1 GB</h6>
                                        </div>
                                        <div class="cs-range-wrapper">
                                            <div class="cs-value">50</div>
                                            <input value="30" style="accent-color: #F39200" type="range" />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card cs-accordion-card">
                            <div class="card-header" style="padding: 0;" id="faqhead4">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq4" aria-expanded="true" aria-controls="faq4">Değerlendirmeler
                                    <p class="cs-rate-title1">
                                        186 Sipariş
                                        <span class="cs-rate-title1">143 Değerlendirme</span>
                                    </p>
                                    <div>
                                        <button class="cs-fourth-btn1">Freelancer</button>
                                        <button class="cs-fourth-btn1 active">Alıcı</button>
                                    </div>
                                </a>
                            </div>
                            <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                <div class="card-body">
                                    <div class="cs-fourth-1">
                                        <div class="cs-rate1">
                                            <i class="fa-solid fa-award cs-icon1"></i>
                                            <div class="cs-textbox-rate">
                                                <span class="cs-head">Hizmet Kalitesi</span>
                                                <span class="cs-ratestar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cs-rate1">
                                            <i class="fa-regular fa-clock cs-icon1"></i>
                                            <div class="cs-textbox-rate">
                                                <span class="cs-head">Zamanlama</span>
                                                <span class="cs-ratestar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cs-rate1">
                                            <i class="fa-regular fa-message cs-icon1"></i>
                                            <div class="cs-textbox-rate">
                                                <span class="cs-head">İletişim</span>
                                                <span class="cs-ratestar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cs-rate2">
                                            <h5 class="cs-head1">5.00</h5>
                                            <span class="cs-head2">5 üzerinden</span>
                                        </div>
                                    </div>
                                    <div class="cs-fourth-2">
                                        <div class="cs-4-maintitle-area">
                                            <div class="cs-4-left">
                                                <img src="{{ asset('assets/images/Userpic1.png') }}">
                                                <h5 class="cs-name">berkaysezer</h5>
                                                <span class="cs-desc"><i class="fa-solid fa-star"
                                                        style="color:#FCA549;margin-right: 4px;"></i>4.7</span>
                                            </div>
                                            <h6 class="cs-righttext">1 gün önce</h6>
                                        </div>
                                        <div class="cs-4-info">
                                            Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                            vulputate libero et velit interdum, ac aliquet odio mattis.
                                            Class aptent taciti sociosqu ad litora torquent per conubia
                                            nostra, per inceptos himenaeos. Curabitur tempus urna at turpis
                                            condimentum lobortis.
                                        </div>
                                    </div>
                                    <div class="cs-fourth-2">
                                        <div class="cs-4-maintitle-area">
                                            <div class="cs-4-left">
                                                <img src="{{ asset('assets/images/Userpic1.png') }}">
                                                <h5 class="cs-name">berkaysezer</h5>
                                                <span class="cs-desc"><i class="fa-solid fa-star"
                                                        style="color:#FCA549;margin-right: 4px;"></i>4.7</span>
                                            </div>
                                            <h6 class="cs-righttext">1 gün önce</h6>
                                        </div>
                                        <div class="cs-4-info">
                                            Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                            vulputate libero et velit interdum, ac aliquet odio mattis.
                                            Class aptent taciti sociosqu
                                        </div>
                                    </div>
                                    <a href="" class="cs-4-readmore">Daha fazla göster</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
