@extends('new.layouts.app')

@section('content')
<div class="wrapper">
  <div class="row clearfix">
    <div class="col-12">
        <div class="card mg-b-30 cs-main-titlebox" style="border: none;">
            <div class="card-body">
                <p class="lead mb-0 cs-main-title">
                    Bağlantılarım
                </p>
            </div>
        </div>
    </div>
  </div>
  <!-- Basic dataTable Start -->
  <!--================================-->
  <div class="col-md-12 col-lg-12">
    <div class="card mg-b-30" style="border: none;">

        <div class="card-body pd-0">
            <table id="basicDataTable"
                class="table table-striped table-bordered cs-connections-tablebody"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Sorumlu</th>
                        <th>Kullanıcı Adı</th>
                        <th>Şehir</th>
                        <th>Bağlantı Tarihi</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">Kutay Cebeci</h5>
                                    <h6 class="cs-table-textbox-desc">Akustik</h6>
                                </div>
                            </div>
                        </td>
                        <td>kutaycebeci</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">Birtan Özbir</h5>
                                    <h6 class="cs-table-textbox-desc">Elektrik Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>birtanozbir</td>
                        <td>Ankara</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İzmir</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cs-tablebox">
                                <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png">
                                <div class="cs-table-textbox">
                                    <h5 class="cs-table-textbox-title">İbrahim Göktuğ</h5>
                                    <h6 class="cs-table-textbox-desc">İnşaat Müh.</h6>
                                </div>
                            </div>
                        </td>
                        <td>ibrahimgoktug</td>
                        <td>İstanbul</td>
                        <td>13.03.2023</td>
                        <td class="cs-connection-cikarbutton"><a href=""
                                class="cs-uncompleted-check">Çıkart</a></td>
                        <td><i class="fa-solid fa-file" style="color:#757D8A"></i></td>
                    </tr>
                </tbody>
                </tfoot>
            </table>
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
  </div>
  <!--/ Basic dataTable End -->
</div>
@endsection
                    
    