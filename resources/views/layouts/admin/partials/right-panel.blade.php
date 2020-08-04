<div id="right-panel" class="right-panel">
    <!-- Header-->
    @include('layouts.admin.partials.topbar')
    <!-- /#header -->
    <!-- Content -->
    <div class="content">
    @component('components.errors') @endcomponent
    <!-- Animated -->
        @yield('content')
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
</div>
