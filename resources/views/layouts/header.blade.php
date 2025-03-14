@include('layouts.partials.nav-link')
@include('layouts.partials.banner-page')
@include('layouts.partials.filler-box')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        menuButton.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });

        function checkScreenSize() {
            if (window.innerWidth >= 1024) {
                mobileMenu.classList.remove("hidden");
            } else {
                mobileMenu.classList.add("hidden");
            }
        }
        window.addEventListener("resize", checkScreenSize);
        checkScreenSize();
    });
</script>