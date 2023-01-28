 <!-- header -->
@include('layouts.partials.header')
 <!-- #header -->

  <!-- topbar -->
@include('layouts.partials.top_bar')
 <!-- #topbar -->

  <!-- leftbar -->
@include('layouts.partials.leftsidebar')
 <!-- #leftbar -->

  <!-- rigth-bar -->
@include('layouts.partials.rigthsidebar')
    <!-- #rigth-bar -->
    @yield('content')

 @include('layouts.partials.footer')
