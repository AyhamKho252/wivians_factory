document.addEventListener("DOMContentLoaded", function() {
    const offcanvasMenu = new bootstrap.Offcanvas(
        document.getElementById("offcanvasMenu")
    );

    // Function to update menu visibility based on window size and scroll
    const updateMenuVisibility = () => {
        const isMobile = window.innerWidth <= 768;
        const shouldHideOnScroll = window.innerWidth > 768 && window.scrollY > 0;

        if (isMobile || shouldHideOnScroll) {
            offcanvasMenu.hide();
        } else {
            offcanvasMenu.show();
        }
    };

    // Initial setup
    updateMenuVisibility();

    // Handle scroll and resize events
    window.addEventListener("scroll", updateMenuVisibility);
    window.addEventListener("resize", updateMenuVisibility);

    // Handle button click for mobile
    const toggleButton = document.getElementById("toggleButton");
    toggleButton.addEventListener("click", () => {
        offcanvasMenu.toggle();
    });
});
