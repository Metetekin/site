<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Anasayfa</title>
@include('new.layouts.partials.head')

<body>
  <div class="page-container">

    @include('new.layouts.partials.sidebar')

    <!-- Page Content Start -->
    <div class="page-content">

        @include('new.layouts.partials.header')

        <!-- Page Inner Start -->
        <div class="page-inner">
          <!-- Wrapper -->
            @yield('content')
        </div>
    </div>
  </div>

  @include('new.layouts.partials.footer_scripts')
</body>

</html>