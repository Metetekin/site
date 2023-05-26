@extends('new.layouts.app')

@section('content')

<div class="wrapper">
  <div class="cs-draw-project-main">
    <div class="cs-draw-left">
        <div class="cs-breadcrumb-box d-flex" style="justify-content: space-between;">
            <div class="d-flex">
                <a href="" class="mb-0 mr-1">İlanlar</a> >
                <a href="" class="mb-0 ml-1">Mimari</a>
            </div>
            <a href=""><i class="fa-regular fa-heart"
                    style="color: #757d8a;font-size: 17px;"></i></a>
        </div>
        <h6 class="cs-title1">Mimari Proje Çizimleri</h6>
        <img src="{{ asset('assets/images/other/drawproject.png') }}" class="w-100">
        <div class="cs-textbox2">
            <h5 class="cs-title2">Portfolyo</h5>
            <h6 class="cs-title3">Portfolyosunu Görüntüle</h6>
        </div>
        <img src="{{ asset('assets/images/other/drawproject2.png') }}">
        <p class="cs-head-left">İş İlanı Hakkında</p>
        <p class="cs-desc-left">Ben 50m2 ve 200 m2 yerleri 350 TL ' ye çizebilirim</p>
    </div>
    <div class="cs-draw-right">
        <div class="cs-management-left">
            <div class="cs-left-1">
                <img src="{{ asset('assets/images/other/userpicbig.png') }}">
                <h3 class="cs-title">İbrahim Göktuğ</h3>
                <p class="cs-username">@ibrahimgoktug</p>
                <div class="d-flex" style="gap:5px">
                    <a href="" class="cs-connections">Mesaj Gönder</a>
                    <a href="" class="cs-connections"
                        style="background-color: #F39200;color:white;border-color: transparent;"><i
                            class="fa-solid fa-user-plus mr-1" style="color: white;"></i>Bağlantı
                        Kur</a>
                </div>
            </div>

            <div class="cs-left-2">
                <div class="cs-left2-content">
                    <p class="cs-content-reason"><i class="fa-regular fa-eye mr-1"></i>Son Görülme
                    </p>
                    <p class="cs-content-result1">Çevrimiçi</p>
                </div>
                <div class="cs-left2-content">
                    <p class="cs-content-reason"><i class="fa-regular fa-comment-dots mr-1"></i>Ort.
                        Yanıt Süresi</p>
                    <p class="cs-content-result2">4 dk.</p>
                </div>
                <div class="cs-left2-content">
                    <p class="cs-content-reason">Üyelik Tarihi</p>
                    <p class="cs-content-result2">16.03.2023</p>
                </div>
            </div>
            <div class="cs-left-3">
                <div class="cs-left-glo-content">
                    <p class="cs-left-glo-reason">Temel Paket</p>
                </div>
                <p class="cs-desc">1 adet Post ve Story .jpg veya .png formatında teslim Stock
                    görsel kullanımı</p>
            </div>
            <div class="cs-left-4">
                <div class="cs-left-glo-content">
                    <p class="cs-left-glo-reason">Uzmanı Olduğu Alanlar/Araçlar</p>
                </div>
                <div class="d-flex"
                    style="gap:8px;border-bottom: 1px solid#F4F5F7;padding-bottom: 20px;">
                    <span> <i class="fa-regular fa-clock mr-1" style="color: #f43c3b;"></i>2 günde
                        teslim</span>
                    <span> <img src="{{ asset('assets/images/Union.png') }}"> 1 revizyon hakkı</span>
                    <span> <i class="fa-solid fa-circle-question"
                            style="color: rgba(0, 0, 0, 0.7);;"></i></span>
                </div>
            </div>
            <ul class="m-0 p-0 d-flex" style="list-style: none; flex-direction: column; gap: 3px;">
                <li style="color: #757D8A;"><i class="fa-solid fa-check mr-1"
                        style="font-size: 18px;color:#6DCE6A;"></i>3
                    Platform Sayısı</li>
                <li style="color:#757D8A;"><i class="fa-solid fa-check mr-1"
                        style="font-size: 18px;color:#6DCE6A;"></i>Kaynak Dosya</li>
                <li style="color: #757D8A;"><i class="fa-solid fa-check mr-1"
                        style="font-size: 18px;color:#6DCE6A;"></i>1
                    Tasarım Sayısı</li>
            </ul>
        </div>
        <a href="" class="cs-mainbtn">Devam Et (80 TL)</a>
    </div>
  </div>
</div>
@endsection
  