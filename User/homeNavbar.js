// Fungsi untuk menambahkan atau menghapus kelas 'scrolled' berdasarkan posisi scroll
window.onscroll = function() {
    var navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
};