@extends('new.layouts.app')

@section('content')
    <div class="cs-ph-messages-main">
        <div class="cs-messages-list">
            <h3 class="cs-main-title">MESAJLARIM</h3>
            <div class="cs-list-top1">
                <div class="cs-images-area">
                    <img style="border-radius: 50%; width: 32px;height:32px" src="{{ asset('assets/images/Userpic1.png') }}">
                    <div class="cs-baloon"></div>
                </div>
                <div class="cs-list-right">
                    <div class="cs-list-text1">
                        <h6 class="cs-title1">Berkay Sezer</h6>
                        <span class="cs-desc1">az önce</span>
                    </div>
                    <div class="cs-list-text2">
                        <h6 class="cs-title1">Sana bir dosya gönderdi.</h6>
                        <h5 class="cs-desc1">12</h5>
                    </div>
                    <div class="cs-list-text3">
                        <img style="border-radius: 50%; width: 32px;height:32px" src="{{ asset('assets/images/Userpic.png') }}">
                        <img style="border-radius: 50%; width: 32px;height:32px" src="{{ asset('assets/images/Userpic.png') }}">
                        <img style="border-radius: 50%; width: 32px;height:32px" src="{{ asset('assets/images/Userpic.png') }}">
                        <a href="" class="cs-link" style="color: #4E73F8;">+6 daha</a>
                    </div>
                </div>
            </div>
            <div class="cs-list-top1 active">
                <div class="cs-images-area">
                    <img style="border-radius: 50%; width: 32px;height:32px" src="{{ asset('assets/images/Userpic1.png') }}">
                    <span class="cs-baloon2"></span>
                </div>
                <div class="cs-list-right">
                    <div class="cs-list-text1">
                        <h6 class="cs-title1">Pars Ragıp</h6>
                        <span class="cs-desc1">19:31 PM</span>
                    </div>
                    <div class="cs-list-text2">
                        <h6 class="cs-title1">Lorem ipsum sit dolor</h6>
                        <h5 class="cs-desc1">365</h5>
                    </div>
                </div>
            </div>
            <div class="cs-list-top1">
                <div class="cs-images-area">
                    <img style="border-radius: 50%; width: 32px;height:32px" src="{{ asset('assets/images/Userpic1.png') }}">
                </div>
                <div class="cs-list-right">
                    <div class="cs-list-text1">
                        <h6 class="cs-title1">Hande Yener</h6>
                        <span class="cs-desc1">23:56 PM</span>
                    </div>
                    <div class="cs-list-text2">
                        <h6 class="cs-title1">Lorem ipsum sit dolor</h6>
                        <i class="fa-solid fa-check" style="color:#4E73F8"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-messages-right-area">
            <div class="cs-top-area">
                <img style="border-radius: 50%;width:40px;height: 40px;" src="{{ asset('assets/images/Userpic1.png') }}">
                <div class="cs-messages-textbox">
                    <h6 class="cs-title1">İbrahim Göktuğ <span>19:31 • Düzenlendi</span><i
                            class="fa-solid fa-check-double ml-2" style="color: #4E73F8;"></i></h6>
                    <p class="cs-desc1">Cari hesap extremizi ekte paylaşıyorum. Kolay gelsin, iyi çizimler
                        dilerim.
                    </p>
                    <a href="" class="cs-messages-file-area">
                        <img src="{{ asset('assets/images/other/pdf.png') }}">
                        <div class="cs-textbox2">
                            <span class="cs-tit1">ekstre.pdf</span>
                            <span class="cs-tit2">19:31 • 43 MB</span>
                        </div>
                        <i class="fa-solid fa-cloud-arrow-down" style="color:#4E73F8;font-size: 22px;"></i>
                    </a>
                    <div class="d-flex align-items-center" style="gap:20px">
                        <img src="{{ asset('assets/images/credit.png') }}">
                        <video id="creditVideo" width="225" height="128" autoplay muted
                            style="object-fit: cover;border-radius: 8px; cursor: pointer;" onclick="playPause()">
                            <source src="https://www.w3schools.com/html/movie.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

            </div>
            <div class="cs-bottom-area">
                <div class="cs-firstarea">
                    <a href=""><i class="fa-solid fa-camera mr-1" style="color: #757D8A; font-size: 17px;"></i></a>
                    <a href=""><i class="fa-solid fa-image mr-1" style="color: #757D8A;font-size: 17px;"></i></a>
                    <a href=""><i class="fa-solid fa-paperclip" style="color: #757D8A;font-size: 17px;"></i></a>
                </div>
                <div class="cs-secondarea">
                    <input placeholder="lorem ipsum">
                </div>
                <div class="cs-thirdarea">
                    <a href=""><i class="fa-solid fa-microphone mr-1"
                            style="color: #757D8A;font-size: 17px;"></i></a>
                    <a href=""><i class="fa-solid fa-paper-plane" style="color: #757D8A;font-size: 17px;"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
