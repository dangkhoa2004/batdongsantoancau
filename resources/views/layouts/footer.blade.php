@include('layouts.partials.footer-link')
@include('layouts.partials.copyright')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButtons = document.querySelectorAll(".dropdown-btn");
        dropdownButtons.forEach((button) => {
            button.addEventListener("click", function() {
                if (window.innerWidth < 1024) {
                    let content = this.nextElementSibling;
                    let icon = this.querySelector(".dropdown-icon");
                    if (content.classList.contains("hidden")) {
                        content.classList.remove("hidden");
                        icon.style.transform = "rotate(180deg)";
                    } else {
                        content.classList.add("hidden");
                        icon.style.transform = "rotate(0deg)";
                    }
                }
            });
        });

        function checkScreenSize() {
            const dropdownContents = document.querySelectorAll(".dropdown-content");
            dropdownContents.forEach((content) => {
                if (window.innerWidth >= 1024) {
                    content.classList.remove("hidden");
                } else {
                    content.classList.add("hidden");
                }
            });
            const icons = document.querySelectorAll(".dropdown-icon");
            icons.forEach((icon) => {
                icon.style.transform = "rotate(0deg)";
            });
        }
        window.addEventListener("resize", checkScreenSize);
        checkScreenSize();
    });
</script>