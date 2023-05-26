@extends('new.layouts.app')

@section('content')
    <div class="wrapper">
        <!-- Static Tables Start -->
        <div class="row clearfix">
            <div class="col-12">
                <div class="card mg-b-30 cs-main-titlebox">
                    <div class="card-body">
                        <p class="lead mb-0 cs-main-title">
                            Kasam
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-till-main">
            <div class="cs-till-left">
                <a href="" class="cs-till-left-content active">
                    <div class="cs-content1">
                        <h6>Hesabım</h6>
                        <p>10.000 TL</p>
                    </div>
                    <span><i class="fa-solid fa-wallet" style="color: #3AC348;"></i></span>
                </a>
                <a href="" class="cs-till-left-content">
                    <div class="cs-content1">
                        <h6>Aktif İlanlarım</h6>
                        <p>1</p>
                    </div>
                    <span><i class="fa-regular fa-file-lines" style="color: #4E73F8;font-size: 16px;"></i></span>
                </a>
                <a href="" class="cs-till-left-content">
                    <div class="cs-content1">
                        <h6>Başarılı Satışlarım</h6>
                        <p>1</p>
                    </div>
                    <span><i class="fa-regular fa-square-check" style="color: #3AC348;font-size: 16px;"></i></span>
                </a>
                <a href="" class="cs-till-left-content">
                    <div class="cs-content1">
                        <h6>Değerlendirmelerim</h6>
                        <p>4.5/5</p>
                    </div>
                    <span><i class="fa-solid fa-star" style="color:#F39200"></i></span>
                </a>
                <a href="" class="cs-till-button1" data-toggle="modal" data-target="#paraCekModal">Para
                    Çek</a>
                <!-- Modal -->
                <div class="modal fade" id="paraCekModal" tabindex="-1" role="dialog" aria-labelledby="paraCekModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content cs-paracek-modal-content">
                            <div class="modal-body cs-paracek-modal">
                                <img class="cs-paracekmodal-img" src="{{ asset('assets/images/other/mark1.png') }}">
                                <h2 class="cs-paracekmodal-head">Heading</h2>
                                <p class="cs-paracekmodal-desc">Torem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nunc vulputate
                                    libero et velit interdum, ac aliquet odio mattis. Class aptent taciti
                                    sociosqu.</p>
                                <button class="cs-paracekmodal-btn">Text</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-till-right">
                <ul class="cs-till-right-main">
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #3AC348;transform: rotate(180deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Deposit</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #FF1F00;transform: rotate(270deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Cash Withdrawal</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #3AC348;transform: rotate(180deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Deposit</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #FF1F00;transform: rotate(270deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Cash Withdrawal</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #3AC348;transform: rotate(180deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Deposit</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #FF1F00;transform: rotate(270deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Cash Withdrawal</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #3AC348;transform: rotate(180deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Deposit</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #FF1F00;transform: rotate(270deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Cash Withdrawal</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #3AC348;transform: rotate(180deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Deposit</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>
                    <li class="cs-till-right-content">
                        <div class="cs-till-right-content-1">
                            <span><i class="fa-solid fa-arrow-up-right-from-square"
                                    style="color: #FF1F00;transform: rotate(270deg);font-size: 20px;"></i></span>
                            <div class="cs-till-right-content2">
                                <h5>Cash Withdrawal</h5>
                                <span>13 Apr, 2022 at 3:30 PM</span>
                            </div>
                        </div>
                        <p class="cs-price">$20,129</p>
                    </li>

                </ul>
            </div>
        </div>
        <div class="cs-till-bottom">
            <p style="color: #757D8A;">49 kayıttan 1 - 10 arası kayıtlar gösteriliyor.</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">İlk</a></li>
                    <li class="page-item"><a class="page-link" href="#">Önceki</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
                    <li class="page-item"><a class="page-link" href="#">Son</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
