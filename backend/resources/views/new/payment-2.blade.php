@extends('new.layouts.app')

@section('content')
    <div class="cs-payment2-main">
        <div class="cs-payment-comleted-bottom m-0">
            <div class="cs-title-top">Siparişi Tamamla</div>
            <div class="cs-comp-bottom-mid">
                <div class="cs-comp-1">
                    <img src="{{ asset('assets/images/other/completedpayment.png') }}">
                    <div class="cs-textbox">
                        <h6 class="cs-title1">Şantiye Şefliği yaparım</h6>
                        <p class="cs-title2">Kendi şehrinde, Şantiye şefliği</p>
                        <span class="cs-title1">5000 TL</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-comp-buttons2">
            <h6>Özet</h6>
            <div class="cs-textbox">
                <h6>Toplam Fiyat</h6><span>80 TL</span>
            </div>
            <div class="cs-textbox">
                <h6>Toplam Teslim Süresi</h6><span>2 gün</span>
            </div>
            <a href="" class="cs-button-completed" data-toggle="modal" data-target="#siparis-tamamla-modal">Siparişi
                Tamamla</a>

            <!-- Modal -->
            <div class="modal fade" id="siparis-tamamla-modal" tabindex="-1" role="dialog"
                aria-labelledby="siparis-tamamla-modalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content cs-siparistamamlamod-content">

                        <div class="modal-body cs-siparistamamlamod-body">
                            <div class="cs-siparistamamla-inputarea">
                                <span class="cs-siparistamamla-name">Kartın Üzerindeki İsim</span>
                                <input type="text">
                            </div>
                            <div class="cs-siparistamamla-inputarea">
                                <span class="cs-siparistamamla-name">Kart Numarası</span>
                                <input type="text">
                            </div>
                            <div class="siparistamamla-duo">
                                <div class="cs-siparistamamla-inputarea">
                                    <span class="cs-siparistamamla-name">Ay</span>
                                    <select>
                                        <option>Seçiniz</option>
                                        <option>Ocak</option>
                                        <option>Şubat</option>
                                        <option>Mart</option>
                                    </select>
                                </div>
                                <div class="cs-siparistamamla-inputarea">
                                    <span class="cs-siparistamamla-name">Yıl</span>
                                    <select>
                                        <option>Seçiniz</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                    </select>
                                </div>
                                <div></div>
                                <div class="cs-siparistamamla-inputarea">
                                    <span class="cs-siparistamamla-name">CVV</span>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="siparis-tamamla-check1">
                                <label class="form-check-label" for="siparis-tamamla-check1">Sonraki siparişlerim için
                                    hatırla</label>
                            </div>
                            <button class="siparis-tamamla-btn">Siparişi Tamamla</button>
                        </div>

                    </div>
                </div>
            </div>
            <span>Ödeme sayfasına yönlendirileceksiniz.</span>
        </div>
    </div>
@endsection
