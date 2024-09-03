let heros = document.querySelectorAll('.hero');
// let navLinks = document.querySelectorAll('nav ul li a');

window.onscroll = () => {
    heros.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
    });
};

function showSidebar(){
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'block';
    
}