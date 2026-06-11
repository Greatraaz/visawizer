<style>
.list-unstyled li a:hover {
    background-color: #f8f9fa;
}
.list-unstyled li a.bg-success:hover {
    background-color: #198754 !important;
}
</style>

<ul class="list-unstyled mb-0">
    <li class="border-bottom">
        <a href="{{ url('my-account') }}" class="d-flex align-items-center px-4 py-3 text-decoration-none {{ Request::is('my-account') ? 'bg-success text-white' : 'text-dark' }}">
            <i class="fas fa-home me-2"></i> Dashboard
        </a>
    </li>
    <li class="border-bottom">
        <a href="{{ url('my-account/orders') }}" class="d-flex align-items-center px-4 py-3 text-decoration-none {{ Request::is('my-account/orders') ? 'bg-success text-white' : 'text-dark' }}">
            <i class="fas fa-shopping-bag me-2"></i> My Orders
        </a>
    </li>
    <li class="border-bottom">
        <a href="{{ url('my-account/edit-profile') }}" class="d-flex align-items-center px-4 py-3 text-decoration-none {{ Request::is('my-account/edit-profile') ? 'bg-success text-white' : 'text-dark' }}">
            <i class="fas fa-user-edit me-2"></i> Edit Profile
        </a>
    </li>
    <li>
        <a href="{{ url('logout') }}" class="d-flex align-items-center px-4 py-3 text-decoration-none text-dark">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </li>
</ul>