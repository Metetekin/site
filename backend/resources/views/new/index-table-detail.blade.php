@extends('new.layouts.app')

@section('content')
    <div class="wrapper">
        <!-- Static Tables Start -->
        <div class="row clearfix">
            <div class="col-12">
                <div class="card mg-b-30 cs-main-titlebox">
                    <div class="card-body cs-tabled-detail-box">
                        <div class="cs-tabled-detail-box-left">
                            <h6 class="lead mb-0 cs-main-title">
                                Emre Menteşe Villa
                            </h6>
                            <a href="" class="cs-main-titlebox-item active">
                                100,000 TL
                            </a>
                            <a href="" class="cs-main-titlebox-item">
                                35 Ada
                            </a>
                            <a href="" class="cs-main-titlebox-item">
                                10 Parsel
                            </a>
                            <a href="" class="cs-main-titlebox-item">
                                917/918 Sk.
                            </a>
                        </div>
                        <div class="cs-tabled-detail-box-right">
                            <a href="" class="cs-button1"><i class="fa-solid fa-paperclip mr-1"></i>Dosya
                                Ekle</a>
                            <a href="" data-toggle="modal" data-target="#kisiata" class="cs-button2"><i
                                    class="fa-solid fa-user-plus mr-1"></i>Kişi
                                Ata</a>
                            <!-- Modal -->
                            <div class="modal fade" id="kisiata" tabindex="-1" aria-labelledby="kisiataLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="cs-kisiata-head">
                                            <h5 style="color: #1A1A1A;">Kişi Ekleme</h5>
                                            <a href=""><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                        <div class="cs-kisiata-body">
                                            <div class="cs-modal-top">
                                                <div class="cs-modal-top-1">
                                                    <label for="cs-name">Kişi</label>
                                                    <input id="cs-name" value="İbrahim Göktuğ">
                                                </div>
                                                <div class="cs-modal-top-2">
                                                    <label for="cs-kdvselect">Ücret</label>
                                                    <select id="cs-kdvselect">
                                                        <option>3000 TL</option>
                                                        <option>2000 TL</option>
                                                        <option>1000 TL</option>
                                                        <option>500 TL</option>
                                                    </select>
                                                </div>
                                                <div class="cs-modal-top-3">
                                                    <label for="cs-kdvselect">Tarih</label>
                                                    <input id="datepickertabledetail1" width="180" />
                                                </div>
                                                <div class="cs-modal-top-4">
                                                    <label for="cs-kdvselect">İş Tanımı</label>
                                                    <select id="cs-kdvselect">
                                                        <option>Mekanik</option>
                                                        <option>Elektronik</option>
                                                        <option>Lorem</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="cs-modal-top">
                                                <div class="cs-modal-top-1">
                                                    <label for="cs-name">Kişi</label>
                                                    <input id="cs-name" value="">
                                                </div>
                                                <div class="cs-modal-top-2">
                                                    <label for="cs-kdvselect">Ücret</label>
                                                    <select id="cs-kdvselect">
                                                        <option>3000 TL</option>
                                                        <option>2000 TL</option>
                                                        <option>1000 TL</option>
                                                        <option>500 TL</option>
                                                    </select>
                                                </div>
                                                <div class="cs-modal-top-3">
                                                    <label for="cs-kdvselect">Tarih</label>
                                                    <input id="datepickertabledetail2" width="180" />
                                                </div>
                                                <div class="cs-modal-top-4">
                                                    <label for="cs-kdvselect">İş Tanımı</label>
                                                    <select id="cs-kdvselect">
                                                        <option>Mekanik</option>
                                                        <option>Elektronik</option>
                                                        <option>Lorem</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="cs-modal-top">
                                                <div class="cs-modal-top-1">
                                                    <label for="cs-name">Kişi</label>
                                                    <input id="cs-name" value="">
                                                </div>
                                                <div class="cs-modal-top-2">
                                                    <label for="cs-kdvselect">Ücret</label>
                                                    <select id="cs-kdvselect">
                                                        <option>3000 TL</option>
                                                        <option>2000 TL</option>
                                                        <option>1000 TL</option>
                                                        <option>500 TL</option>
                                                    </select>
                                                </div>
                                                <div class="cs-modal-top-3">
                                                    <label for="cs-kdvselect">Tarih</label>
                                                    <input id="datepickertabledetail3" width="180" />
                                                </div>
                                                <div class="cs-modal-top-4">
                                                    <label for="cs-kdvselect">İş Tanımı</label>
                                                    <select id="cs-kdvselect">
                                                        <option>Mekanik</option>
                                                        <option>Elektronik</option>
                                                        <option>Lorem</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="cs-modal-bottom">
                                                <label for="cs-modalarea">Açıklama</label>
                                                <textarea id="cs-modalarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="cs-teklifolustur-footer">
                                            <a class="cs-button1" href="">Onayla</a>
                                            <a class="cs-button2" href="">Vazgeç</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Basic Table Start -->
            <div class="col-md-12 col-lg-12">
                <div class="card mg-b-30" style="border: none;">
                    <div class="card-body pd-0 cs-table-detail-body">
                        <table class="table cs-t-detail-table">
                            <thead>
                                <tr>
                                    <th class="cs-table-main-title">Sorumlu</th>
                                    <th class="cs-table-main-title">Meslek</th>
                                    <th class="cs-table-main-title">Tarih</th>
                                    <th class="cs-table-main-title">Ücret</th>
                                    <th class="cs-table-main-title">Durum</th>
                                    <th class="cs-table-main-title"></th>
                                </tr>
                            </thead>
                            <tbody class="cs-table-tbody-1">
                                <tr>
                                    <td>
                                        <div class="cs-tablebox">
                                            <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                            <div class="cs-table-textbox">
                                                <h5 class="cs-table-textbox-title">Ertan Kolcuoğlu
                                                </h5>
                                                <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="cs-table-item">Takım Proje</p>
                                    </td>
                                    <td>
                                        <p class="cs-table-item">13.03.2023</p>
                                    </td>
                                    <td>
                                        <p class="cs-table-item">100.000 TL <i class="fa-solid fa-square-check"
                                                style="color: rgb(146, 152, 161); font-size: 16px;"></i></p>
                                    </td>
                                    <td><span class="cs-continues-check">Devam Ediyor</span></td>
                                    <td>
                                        <div class="cs-icongroups">
                                            <a href=""><i class="fa-solid fa-hand-holding-dollar"
                                                    style="color: #3AC348; font-size: 16px;"></i></a>
                                            <a href=""><i class="fa-solid fa-file"
                                                    style="color: #757d8a;font-size: 16px;"></i></a>
                                            <a href=""><i class="fa-solid fa-trash"
                                                    style="color: #ff1e01;font-size: 16px;"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="cs-t-detail-files-main cs-files-main">
            <p class="cs-files-main-title"><i class="fa-regular fa-folder mr-2" style="color:#4E73F8"></i>Dosyalarım</p>
            <a href="" class="cs-files-main-text">116 Dosya</a>
        </div>
        <div class="cs-t-detail-files-list">
            <a class="cs-filearea1" href=""><span class="cs-image-bg"><img
                        src="{{ asset('assets/images/other/file1.svg') }}"></span>arsa-resmi.png</a>
            <a class="cs-filearea1" href=""><span class="cs-image-bg"><img
                        src="{{ asset('assets/images/other/file1.svg') }}"></span>arsa-resmi2.png</a>
            <a class="cs-filearea1" href=""><span class="cs-image-bg"><img
                        src="{{ asset('assets/images/other/file1.svg') }}"></span>arsa-resmi2.png</a>
            <a class="cs-filearea1" href=""><span class="cs-image-bg"><img
                        src="{{ asset('assets/images/other/file2.svg') }}"></span>arsa.pdf</a>
            <a class="cs-filearea1" href=""><span class="cs-image-bg"><img
                        src="{{ asset('assets/images/other/file2.svg') }}"></span>emrementese.pdf</a>
            <a class="cs-filearea1" href=""><span class="cs-image-bg"><img
                        src="{{ asset('assets/images/other/file3.svg') }}"></span>mimari.dwg</a>
        </div>
    </div>
@endsection
