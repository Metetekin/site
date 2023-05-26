@extends('new.layouts.app')

@section('content')
    <div class="wrapper">
        <h2>Yayındaki İlanlar</h2>
        <div class="row ph-filter-area">
            <div class="col">Düzenlenecek alan</div>
            <div class="col">
                <div class="form-check cs-forminput-area">
                    <label class="form-check-label" for="city">
                        Sadece kendi şehrimdekileri göster
                    </label>
                    <input class="form-check-input" checked type="checkbox" value="" id="city">

                </div>
            </div>
            <div class="col">
                <div class="form-check cs-forminput-area">
                    <label class="form-check-label" for="online">
                        Sadece çevrimiçi kişileri göster
                    </label>

                    <input class="form-check-input" checked type="checkbox" value="" id="online">

                </div>
            </div>
            <div class="col ph-added-button">
                <button class="btn "> + </button>
            </div>
        </div>
        <div class="row mt-3 ph-filter-area">
            <div class="cs-searchbar col">
                <i class="ti-search"></i>
                <input class="ph-filter-search" type="search" placeholder="Arama yapın ..." id="example-search-input">
            </div>
            <div class="col d-flex ph-filter-select">
                <i class="fa-regular fa-credit-card"></i>
                <select class="custom-select">
                    <option selected>10000+</option>
                    <option value="10000">10000+</option>
                    <option value="100000">100000+</option>
                    <option value="1000000">100000+</option>
                </select>
            </div>
            <div class="col d-flex ph-filter-select">
                <i class="fa-solid fa-briefcase"></i>
                <select class="custom-select">
                    <option selected>3 Gün</option>
                    <option value="10000">10000+</option>
                    <option value="100000">100000+</option>
                    <option value="1000000">100000+</option>
                </select>
            </div>
            <div class="col d-flex ph-filter-select">
                <!-- <img src="./assets/images/Verctor.png" alt=""> -->
                <i class="fa-solid fa-location-dot"></i>
                <select class="custom-select">
                    <option selected>Lokasyon</option>
                    <option value="10000">10000+</option>
                    <option value="100000">100000+</option>
                    <option value="1000000">100000+</option>
                </select>
            </div>
            <div class="col ph-added-button">
                <button class="btn btn-primary ph-button-filter">FİLTRELE</button>
            </div>
        </div>
        <div class="mt-3 ph-list-filter-buttonbox ph-published-ads-area">
            <button class="col btn">
                Mimari
            </button>
            <button class="col btn">
                Statik
            </button>
            <button class="col btn">
                Takım Proje
            </button>
            <button class="col btn">
                Mekanik
            </button>
            <button class="col btn">
                Elektrik
            </button>
            <button class="col btn active">
                Harita (Hus)
            </button>
            <button class="col btn">
                Zemin Etüdü (Jeoloji)
            </button>
            <button class="col btn">
                Şantiye Şefi
            </button>
            <button class="col btn">
                EKB
            </button>
            <button class="col btn">
                Akustik
            </button>
            <button class="col btn">
                Diğer
            </button>
        </div>
        <div class="mt-3">
            <div class="d-flex">
                <select class="custom-select cs-advise-select">
                    <option selected>Tasvsiye edilen</option>
                    <option value="10000">10000+</option>
                    <option value="100000">100000+</option>
                    <option value="1000000">100000+</option>
                </select>
            </div>
        </div>
        <div class="cs-ph-publishedads-main">
            <div class="cs-top">
                <h6 class="cs-title">Sana Özel İstekler</h6>
                <a href="" class="cs-link">sonraki teklife geç</a>
            </div>
            <div class="cs-published-content">
                <div class="cs-left">
                    <img src="{{ asset('assets/images/Userpic1.png') }}">
                    <h6>Statik Proje Çizim İhtiyacı</h6>
                </div>
                <a href="" class="cs-teklifverbtn">Teklif Ver</a>
            </div>
        </div>
        <p class="cs-published-desc-main">Statik Proje Çizim İhtiyacı vardır, ilgili arkadaşlar teklif
            verebilir.</p>
        <div class="cs-published-content2">
            <span class="cs-time">28.03.2023</span>
            <div class="cs-time-list">
                <h6><i class="fa-regular fa-clock mr-1" style="color:#F43C3C;"></i>2 günde teslim</h6>
                <h6><i class="fa-solid fa-wallet mr-1" style="color:#F43C3C;"></i>250 TL Bütçe</h6>
                <h6 style="color: #757d8a;">Güncel Teklif: <span class="cs-offer">14</span></h6>
            </div>
        </div>
    </div>
@endsection
