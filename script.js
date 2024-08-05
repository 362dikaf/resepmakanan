// animasi elegan untuk tombol resep
const btnResep = document.querySelectorAll('.btn-resep');

btnResep.forEach((btn) => {
    btn.addEventListener('click', () => {
        const section = btn.parentNode;
        section.classList.toggle('active');
    });
});
