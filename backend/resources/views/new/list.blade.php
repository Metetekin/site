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
        <div class="row mt-3 ph-list-filter-buttonbox">
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
        <div class="row mt-3">
            <div class="col d-flex">

                <select class="custom-select cs-advise-select">
                    <option selected>Tasvsiye edilen</option>
                    <option value="10000">10000+</option>
                    <option value="100000">100000+</option>
                    <option value="1000000">100000+</option>
                </select>
            </div>
        </div>
        <div class="ph-product-list mt-3 ">
            <div class="card">
                <div class="ph-card-header">
                    <img src="{{ asset('assets/images/Userpic.png') }}" alt="">
                    <div>
                        <p class="ph-card-header-text">İbrahim Göktuğ</p>
                        <p class="ph-card-header-text">İnşaat Müh.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-star" style="color: #fca549;"></i>
                        <span>4.5</span>
                    </div>
                </div>
                <div class="ph-card-image">
                    <img src="{{ asset('assets/images/lisrCard.png') }}" class="card-img-top" alt="">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Mimari Proje Çizimleri Yaparım</h5>
                    <p class="card-text">Ben, Mimari Proje Çizimlerinizi Yaparım</p>
                    <div class="ph-card-pricebox">
                        <p>
                            FİYAT
                            <span>
                                90 TL
                            </span>
                        </p>
                        <a href="#" class="btn btn-primary">İlanı incele</a>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="ph-card-header">
                    <img src="{{ asset('assets/images/Userpic.png') }}" alt="">
                    <div>
                        <p class="ph-card-header-text">İbrahim Göktuğ</p>
                        <p class="ph-card-header-text">İnşaat Müh.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-star" style="color: #fca549;"></i>
                        <span>4.5</span>
                    </div>
                </div>
                <div class="ph-card-image">
                    <img src="{{ asset('assets/images/lisrCard.png') }}" class="card-img-top" alt="">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Mimari Proje Çizimleri Yaparım</h5>
                    <p class="card-text">Ben, Mimari Proje Çizimlerinizi Yaparım</p>
                    <div class="ph-card-pricebox">
                        <p>
                            FİYAT
                            <span>
                                90 TL
                            </span>
                        </p>
                        <a href="#" class="btn btn-primary">İlanı incele</a>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="ph-card-header">
                    <img src="{{ asset('assets/images/Userpic.png') }}" alt="">
                    <div>
                        <p class="ph-card-header-text">İbrahim Göktuğ</p>
                        <p class="ph-card-header-text">İnşaat Müh.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-star" style="color: #fca549;"></i>
                        <span>4.5</span>
                    </div>
                </div>
                <div class="ph-card-image">
                    <img src="{{ asset('assets/images/lisrCard.png') }}" class="card-img-top" alt="">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Mimari Proje Çizimleri Yaparım</h5>
                    <p class="card-text">Ben, Mimari Proje Çizimlerinizi Yaparım</p>
                    <div class="ph-card-pricebox">
                        <p>
                            FİYAT
                            <span>
                                90 TL
                            </span>
                        </p>
                        <a href="#" class="btn btn-primary">İlanı incele</a>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="ph-card-header">
                    <img src="{{ asset('assets/images/Userpic.png') }}" alt="">
                    <div>
                        <p class="ph-card-header-text">İbrahim Göktuğ</p>
                        <p class="ph-card-header-text">İnşaat Müh.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-star" style="color: #fca549;"></i>
                        <span>4.5</span>
                    </div>
                </div>
                <div class="ph-card-image">
                    <img src="{{ asset('assets/images/lisrCard.png') }}" class="card-img-top" alt="">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Mimari Proje Çizimleri Yaparım</h5>
                    <p class="card-text">Ben, Mimari Proje Çizimlerinizi Yaparım</p>
                    <div class="ph-card-pricebox">
                        <p>
                            FİYAT
                            <span>
                                90 TL
                            </span>
                        </p>
                        <a href="#" class="btn btn-primary">İlanı incele</a>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="ph-card-header">
                    <img src="{{ asset('assets/images/Userpic.png') }}" alt="">
                    <div>
                        <p class="ph-card-header-text">İbrahim Göktuğ</p>
                        <p class="ph-card-header-text">İnşaat Müh.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-star" style="color: #fca549;"></i>
                        <span>4.5</span>
                    </div>
                </div>
                <div class="ph-card-image">
                    <img src="{{ asset('assets/images/lisrCard.png') }}" class="card-img-top" alt="">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Mimari Proje Çizimleri Yaparım</h5>
                    <p class="card-text">Ben, Mimari Proje Çizimlerinizi Yaparım</p>
                    <div class="ph-card-pricebox">
                        <p>
                            FİYAT
                            <span>
                                90 TL
                            </span>
                        </p>
                        <a href="#" class="btn btn-primary">İlanı incele</a>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="ph-card-header">
                    <img src="{{ asset('assets/images/Userpic.png') }}" alt="">
                    <div>
                        <p class="ph-card-header-text">İbrahim Göktuğ</p>
                        <p class="ph-card-header-text">İnşaat Müh.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-star" style="color: #fca549;"></i>
                        <span>4.5</span>
                    </div>
                </div>
                <div class="ph-card-image">
                    <img src="{{ asset('assets/images/lisrCard.png') }}" class="card-img-top" alt="">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Mimari Proje Çizimleri Yaparım</h5>
                    <p class="card-text">Ben, Mimari Proje Çizimlerinizi Yaparım</p>
                    <div class="ph-card-pricebox">
                        <p>
                            FİYAT
                            <span>
                                90 TL
                            </span>
                        </p>
                        <a href="#" class="btn btn-primary">İlanı incele</a>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="ph-card-header">
                    <img src="{{ asset('assets/images/Userpic.png') }}" alt="">
                    <div>
                        <p class="ph-card-header-text">İbrahim Göktuğ</p>
                        <p class="ph-card-header-text">İnşaat Müh.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-star" style="color: #fca549;"></i>
                        <span>4.5</span>
                    </div>
                </div>
                <div class="ph-card-image">
                    <img src="{{ asset('assets/images/lisrCard.png') }}" class="card-img-top" alt="">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Mimari Proje Çizimleri Yaparım</h5>
                    <p class="card-text">Ben, Mimari Proje Çizimlerinizi Yaparım</p>
                    <div class="ph-card-pricebox">
                        <p>
                            FİYAT
                            <span>
                                90 TL
                            </span>
                        </p>
                        <a href="#" class="btn btn-primary">İlanı incele</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
