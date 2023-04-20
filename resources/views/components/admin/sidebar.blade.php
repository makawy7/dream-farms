<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false"
                    aria-controls="forms">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Settings</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse show" id="forms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.settings.general.index') }}" class="nav-link active">General</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.settings.address.index') }}" class="nav-link">Addresses</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">Phone Numbers</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false"
                    aria-controls="forms">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Product Categories</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse show" id="forms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.products.categories.index') }}" class="nav-link">All Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.products.categories.create') }}" class="nav-link">Add Category</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false"
                    aria-controls="forms">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Product Variations</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse show" id="forms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.products.variations.index') }}" class="nav-link">All Variations</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.products.variations.create') }}" class="nav-link">Add Variation</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false"
                    aria-controls="forms">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Products</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse show" id="forms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.products.index') }}" class="nav-link">All Product</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.products.create') }}" class="nav-link">Add Product</a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>
    </div>
</nav>
