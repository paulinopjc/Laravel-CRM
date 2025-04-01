import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#sidebar-toggle")?.addEventListener("click", function () {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('c-sidebar-lg-show');
    });
});
