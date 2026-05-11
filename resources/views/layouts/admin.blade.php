<!DOCTYPE html>
<html lang="en">
    @include('admin.partials.head')
<body data-sidebar="dark">
	<!-- Begin page -->
    <div id="layout-wrapper">
	    @include('admin.partials.topbar')
	    @include('admin.partials.left-sidebar')
        <div class="main-content">    
	        @yield('content')
	        @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.partials.script')
</body>
</html>
