@extends('new.layouts.app')

@section('content')
<div class="ph-add-advert">
  <h2 class="ph-add-advert-title">ilan ekle</h2>
  <form>
      <div class="form-row ph-add-advert-form">
          <span class="col-md-12 ph-add-form-title">Kategori Seç</span>
          <div class="col-md-6 mb-3">
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>Elektrik</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
          </div>
          <div class="col-md-6 mb-3">
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>Elektrik Projesi</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
          </div>
          <span class="col-md-12 ph-add-form-title">Detaylar</span>
          <div class="col-md-4 mb-3">
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
          </div>
          <div class="col-md-4 mb-3">
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
          </div>
          <div class="col-md-4 mb-3">
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
          </div>
          <span class="col-md-12 ph-add-form-title">İlan Başlığı</span>
          <div class="col-md-12 mb-3">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress"
                  placeholder="1234 Main St">
          </div>
          <span class="col-md-12 ph-add-form-title">İlan Başlığı</span>
          <div class="col-md-12 mb-3">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress"
                  placeholder="1234 Main St">
          </div>
          <span class="col-md-12 ph-add-form-title">Galeri</span>
          <div class="col-md-4">
              <div class="input-group mb-3">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
              </div>
          </div>
          <div class="col-md-8 d-flex" style="max-width:480px;overflow:hidden;overflow-x:scroll">
              <div class="ph-input-image">
                  <img src="{{ asset('assets/images/lisrCard.png') }}" alt="">
              </div>
              <div class="ph-input-image">
                  <img src="{{ asset('assets/images/lisrCard.png') }}" alt="">
              </div>
              <div class="ph-input-image">
                  <img src="{{ asset('assets/images/lisrCard.png') }}" alt="">
              </div>
          </div>
          <div
              style="display:flex; justify-content: space-between;align-items: center;width: 100%; margin-top: 30px;">
              <div style="display:flex;flex-direction:column;gap:5px">
                  <span>FİYAT</span>
                  <input type="text" placeholder="500TL">
              </div>
              <div style="display:flex;flex-direction:column;gap:5px">
                  <span>Kazanacağınız Miktar</span>
                  <input type="text" placeholder="450TL">
              </div>
              <button class="btn btn-primary cs-publishedbutton" type="submit">İlanı Yayınla</button>

          </div>
      </div>

  </form>
</div>
@endsection