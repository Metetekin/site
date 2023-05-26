@extends('new.layouts.app')

@section('content')
<div class="wrapper cs-income-mainbg">
  <!-- Static Tables Start -->
  <div class="row clearfix">
      <div class="col-12">
          <div class="card mg-b-30 cs-main-titlebox">
              <div class="card-body cs-cardmain">
                  <div class="cs-card-left1">
                      <div class="cs-cardmain1">
                          <h6 class="cs-cardmain1-title">Gelir Ekle</h6>
                          <a class="cs-cardmain1-link" href="#">Ekle</a>
                      </div>
                      <div class="cs-cardmain2-main">
                          <div class="cs-cardmain2">
                              <h6 class="cs-cardmain2-label">Başlık</h6>
                              <input placeholder="Gelir">
                          </div>
                          <div class="cs-cardmain2">
                              <h6 class="cs-cardmain2-label">Ücret</h6>
                              <select>
                                  <option>1000 TL</option>
                                  <option>2000 TL</option>
                                  <option>3000 TL</option>
                                  <option>4000 TL</option>
                                  <option>5000 TL</option>
                              </select>
                          </div>
                      </div>
                      <div class="cs-cardmain3-main">
                          <h6 class="cs-cardmain3-label">Açıklama</h6>
                          <textarea></textarea>
                      </div>
                  </div>
                  <div class="cs-card-right1">
                      <div class="cs-cardmain1">
                          <h6 class="cs-cardmain1-title">Gider Ekle</h6>
                          <a class="cs-cardmain1-link" href="#">Ekle</a>
                      </div>
                      <div class="cs-cardmain2-main">
                          <div class="cs-cardmain2">
                              <h6 class="cs-cardmain2-label">Başlık</h6>
                              <input placeholder="Gelir">
                          </div>
                          <div class="cs-cardmain2">
                              <h6 class="cs-cardmain2-label">Ücret</h6>
                              <select>
                                  <option>1000 TL</option>
                                  <option>2000 TL</option>
                                  <option>3000 TL</option>
                                  <option>4000 TL</option>
                                  <option>5000 TL</option>
                              </select>
                          </div>
                      </div>
                      <div class="cs-cardmain3-main">
                          <h6 class="cs-cardmain3-label">Açıklama</h6>
                          <textarea></textarea>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Basic dataTable Start -->
  <!--================================-->
  <div class="col-md-12 col-lg-12">
      <div class="card mg-b-30">
          <div class="card-header">
              <div class="cs-income-table-header">
                  <div class="cs-top">
                      <h3>Gelir - Gider Tablosu</h3>
                      <a href="">50.000 TL</a>
                  </div>
                  <div class="cs-middle">
                      <input id="datepicker1" width="180" />
                      <input id="datepicker2" width="180" />
                  </div>
                  <div class="cs-bottom">
                      <a href=""><i class="fa-solid fa-paperclip mr-2"></i>Excel İndir</a>
                  </div>

              </div>
          </div>
          <div class="card-body pd-0">
              <table id="basicDataTable" class="table table-striped table-bordered"
                  style="width:100%">
                  <thead>
                      <tr>
                          <th>Tür</th>
                          <th>Başlık</th>
                          <th>Tarih</th>
                          <th>Tutar</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title2">Gider</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>-10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title2">Gider</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>-10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title2">Gider</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>-10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title2">Gider</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>-10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title2">Gider</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>-10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title2">Gider</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>-10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title2">Gider</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>-10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title2">Gider</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>-10.000 TL</td>
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
                      <tr>
                          <td><span class="cs-income-title1">Gelir</span></td>
                          <td>Deneme</td>
                          <td>20.03.2023</td>
                          <td>+10.000 TL</td>
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

                      </tfoot>
              </table>
          </div>
      </div>
  </div>
  <!--/ Basic dataTable End -->
</div>
@endsection
  