@extends('new.layouts.app')

@section('content')
    <div class="wrapper">
        <!-- Static Tables Start -->
        <div class="row clearfix">
            <div class="col-12">
                <div class="card mg-b-30 cs-main-titlebox">
                    <div class="card-body">
                        <p class="lead mb-0 cs-main-title">
                            Projelerim
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-tabs-left-right-main">
            <ul class="nav nav-tabs cs-tabs-menu" id="myTab" role="tablist">
                <li class="nav-item cs-tabs-menu-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Tümü</a>
                </li>
                <li class="nav-item cs-tabs-menu-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Devam Eden İşler</a>
                </li>
                <li class="nav-item cs-tabs-menu-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Biten İşler</a>
                </li>
            </ul>
            <div class="cs-right">
                <button data-toggle="modal" data-target="#projeekle" style="cursor: pointer;"><i class="fa-solid fa-plus"
                        style="cursor: pointer;"></i></button>
                <!-- Modal -->
                <div class="modal fade" id="projeekle" tabindex="-1" aria-labelledby="projeekleLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="cs-projeekle-head">
                                <h5 style="color: #1A1A1A;">Proje Ekleme</h5>
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                            </div>
                            <div class="cs-projeekle-body">
                                <div class="cs-modal-top">
                                    <div class="cs-modal-top-content">
                                        <label for="cs-name">Proje İsmi</label>
                                        <input id="cs-name" value="Emre Menteşe Villa">
                                    </div>
                                    <div class="cs-modal-top-content">
                                        <label for="cs-ada">Ada</label>
                                        <input id="cs-ada" value="35">
                                    </div>
                                    <div class="cs-modal-top-content">
                                        <label for="cs-parsel">Parsel</label>
                                        <input id="cs-parsel" value="10">
                                    </div>
                                    <div class="cs-modal-top-content">
                                        <label for="cs-adres">Adres</label>
                                        <input id="cs-adres" value="917/918 Sk.">
                                    </div>
                                </div>
                                <div class="cs-modal-top">
                                    <div class="cs-modal-top-content">
                                        <label for="cs-name2">Kişi</label>
                                        <input id="cs-name2" value="Ertan Kolcuoğlu">
                                    </div>
                                    <div class="cs-modal-top-content">
                                        <label for="cs-ucret">Ücret</label>
                                        <input id="cs-ucret">
                                    </div>
                                    <div class="cs-modal-top-content">
                                        <label for="cs-kdvselect">İş Tanımı</label>
                                        <select id="cs-kdvselect">
                                            <option>Mekanik</option>
                                            <option>Elektronik</option>
                                            <option>Lorem</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="cs-projeekle-footer">
                                <a class="cs-button1" href="">Onayla</a>
                                <a class="cs-button2" href="">Vazgeç</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row clearfix">
                    <!-- Basic Table Start -->
                    <div class="col-md-12 col-lg-12">
                        <div class="card mg-b-30" style="border: none;">
                            <div class="card-body pd-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cs-table-main-title">Sorumlu</th>
                                            <th class="cs-table-main-title">İşin Adı</th>
                                            <th class="cs-table-main-title">Ada</th>
                                            <th class="cs-table-main-title">Parsel</th>
                                            <th class="cs-table-main-title">Adres</th>
                                            <th class="cs-table-main-title">Ücret</th>
                                            <th class="cs-table-main-title">Tarih</th>
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
                                                        <h5 class="cs-table-textbox-title">İbrahim Göktuğ
                                                        </h5>
                                                        <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFhSnoly9J1ySaRA45scYB4Q1otdhWAXtLlg&usqp=CAU">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-uncompleted-check">Tamamlanamadı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFhSnoly9J1ySaRA45scYB4Q1otdhWAXtLlg&usqp=CAU">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-continues-check">Devam Ediyor</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row clearfix">
                    <!-- Basic Table Start 2 -->
                    <div class="col-md-12 col-lg-12">
                        <div class="card mg-b-30" style="border: none;">
                            <div class="card-body pd-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cs-table-main-title">Sorumlu</th>
                                            <th class="cs-table-main-title">İşin Adı</th>
                                            <th class="cs-table-main-title">Ada</th>
                                            <th class="cs-table-main-title">Parsel</th>
                                            <th class="cs-table-main-title">Adres</th>
                                            <th class="cs-table-main-title">Ücret</th>
                                            <th class="cs-table-main-title">Tarih</th>
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
                                                        <h5 class="cs-table-textbox-title">İbrahim Göktuğ
                                                        </h5>
                                                        <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-continues-check">Devam Ediyor</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-continues-check">Devam Ediyor</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFhSnoly9J1ySaRA45scYB4Q1otdhWAXtLlg&usqp=CAU">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-continues-check">Devam Ediyor</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFhSnoly9J1ySaRA45scYB4Q1otdhWAXtLlg&usqp=CAU">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-continues-check">Devam Ediyor</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-continues-check">Devam Ediyor</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row clearfix">
                    <!-- Basic Table Start 3 -->
                    <div class="col-md-12 col-lg-12">
                        <div class="card mg-b-30" style="border: none;">
                            <div class="card-body pd-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cs-table-main-title">Sorumlu</th>
                                            <th class="cs-table-main-title">İşin Adı</th>
                                            <th class="cs-table-main-title">Ada</th>
                                            <th class="cs-table-main-title">Parsel</th>
                                            <th class="cs-table-main-title">Adres</th>
                                            <th class="cs-table-main-title">Ücret</th>
                                            <th class="cs-table-main-title">Tarih</th>
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
                                                        <h5 class="cs-table-textbox-title">İbrahim Göktuğ
                                                        </h5>
                                                        <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFhSnoly9J1ySaRA45scYB4Q1otdhWAXtLlg&usqp=CAU">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFhSnoly9J1ySaRA45scYB4Q1otdhWAXtLlg&usqp=CAU">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cs-tablebox">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                                    <div class="cs-table-textbox">
                                                        <h5 class="cs-table-textbox-title">Duygu Arslan</h5>
                                                        <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">Emre Menteşe Villa</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">35</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">10</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">917/918</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">55.000 TL</p>
                                            </td>
                                            <td>
                                                <p class="cs-table-item">13.03.2023</p>
                                            </td>
                                            <td><span class="cs-completed-check">Tamamlandı</span></td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href=""><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="" class="dropdown-item"><i data-feather="info"
                                                                class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="" class="dropdown-item"><i data-feather="share"
                                                                class="wd-16 mr-2"></i>Share</a>
                                                        <a href="" class="dropdown-item"><i
                                                                data-feather="download"
                                                                class="wd-16 mr-2"></i>Download</a>
                                                        <a href="" class="dropdown-item"><i data-feather="copy"
                                                                class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="folder"
                                                                class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="" class="dropdown-item"><i data-feather="edit"
                                                                class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="" class="dropdown-item"><i data-feather="trash"
                                                                class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-files-main">
            <p class="cs-files-main-title"><i class="fa-regular fa-folder mr-2" style="color:#4E73F8"></i>Dosyalarım</p>
            <a href="" class="cs-files-main-text">116 Dosya</a>
        </div>
    </div>
@endsection
