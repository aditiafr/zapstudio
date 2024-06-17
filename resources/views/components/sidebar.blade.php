<!-- resources/views/components/sidebar.blade.php -->
<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6 flex items-center gap-2">
        <img class="w-16 h-auto" src="/assets/images/logo.png" alt="Logo">
        <a href="{{ route('dashboard') }}" class="text-white text-xl font-semibold uppercase hover:text-gray-300">ZAP Studio</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="flex items-center {{ Request::is('dashboard') ? 'active-nav-link' : '' }} text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('booking.index') }}" class="flex items-center {{ Request::is('booking') || Request::is('booking/create') || Request::is('booking/*/edit') ? 'active-nav-link' : '' }} text-white py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Booking
        </a>
        <a href="{{ route('paket.index') }}" class="flex items-center {{ Request::is('paket') || Request::is('paket/create') || Request::is('paket/*/edit') ? 'active-nav-link' : '' }} text-white py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Paket
        </a>
        <a href="{{ route('category.index') }}" class="flex items-center {{ Request::is('category') || Request::is('category/create') || Request::is('category/*/edit') ? 'active-nav-link' : '' }} text-white py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Category
        </a>
    </nav>
    <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
        <i class="fas fa-arrow-circle-up mr-3"></i>
        Upgrade to Pro!
    </a>
</aside>