<!-- sidebar -->
<div class="sidebar-container">
    <img src="/images/profile.jpg" alt="img" class="rounded-circle">
    <h5 style="color: #FFDC8F;"><?=$name;?></h5>
    <p class="text-white">Admin</p>
    <ul class="w-75 nav nav-pills flex-column">
        <li class="nav-item">
            <a href="/admin" class="nav-link
                    <?php if ($title === 'Dashboard') {
    echo 'active';
}
?>">
                <img src="/images/icon-dashboard.svg" alt="dashboard">
                DASHBOARD
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/home" class="nav-link <?php if ($title === 'Home Page') {
    echo 'active';
}
?>">
                <img src="/images/icon-homepage.svg" alt="homepage">
                HOME PAGE
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/product" class="nav-link <?php if ($title === 'Product Page') {
    echo 'active';
}
?>">
                <img src="/images/icon-product.svg" alt="product">
                PRODUCT PAGE
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/location" class="nav-link <?php if ($title === 'Location Page') {
    echo 'active';
}
?>">
                <img src="/images/icon-location.svg" alt="location">
                LOCATION PAGE
            </a>
        </li>
        <li class="nav-item">
            <a href="/login/logout" class="nav-link">
                <img src="/images/icon-logout.svg" alt="logout">
                LOGOUT
            </a>
        </li>
    </ul>

    <img class="mt-5" src="/images/logo.svg" alt="logo" height="100px">
</div>