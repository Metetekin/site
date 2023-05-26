@extends('new.layouts.app')

@section('content')
    <div class="cs-payment-comleted-top">
        <h3 class="cs-title">Ödeme işlemi tamamlandı</h3>
        <p class="cs-desc">Ödeme şu an havuz hesabında. Ücretini sipariş tamamlandığında alacaksın.</p>
    </div>
    <div class="cs-payment-comleted-bottom">
        <div class="cs-title-top">Sipariş</div>
        <div class="cs-comp-bottom-mid">
            <div class="cs-comp-1">
                <img src="{{ asset('assets/images/other/completedpayment.png') }}">
                <div class="cs-textbox">
                    <h6 class="cs-title1">Şantiye Şefliği yaparım</h6>
                    <p class="cs-title2">Kendi şehrinde, Şantiye şefliği</p>
                    <span class="cs-title1">5000 TL</span>
                </div>
            </div>
            <div class="cs-comp-2">
                <p class="cs-title">
                    Alıcı
                </p>
                <div class="cs-textbox2">
                    <img src="{{ asset('assets/images/Userpic1.png') }}">
                    <div class="cs-text-area">
                        <h6>İbrahim Göktuğ</h6>
                        <span class="cs-title1">İnşaat Müh.</span>
                    </div>
                </div>
            </div>
            <div class="cs-comp-2">
                <p class="cs-title">
                    Sipariş Tarihi
                </p>
                <div class="cs-textbox2">
                    <img src="{{ asset('assets/images/other/sepet.png') }}">
                    <div class="cs-text-area">
                        <h6>19 Mart 2023</h6>
                        <span class="cs-title1">16:49</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-comp-bot-bottom">
            <table class="table">
                <thead>
                    <tr style="background: #F8F8F8;
                              border-radius: 8px;">
                        <th scope="col"
                            style="color: #1a1a1a;
                                    font-weight: 700;
                                    font-size: 15px;">
                            Detaylar</th>
                        <th scope="col" style="color: #1a1a1a; font-size:12px">Adet</th>
                        <th scope="col" style="color: #1a1a1a; font-size:12px">Süre</th>
                        <th scope="col" style="color: #1a1a1a; font-size:12px">Tutar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>1</td>
                        <td>14 Gün</td>
                        <td>5000 TL</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cs-comp-buttons2">
            <a href="" class="cs-button-cancel">Siparişi İptal Et</a>
            <a href="" class="cs-button-completed">Siparişi Tamamladım</a>
        </div>
    </div>
@endsection
