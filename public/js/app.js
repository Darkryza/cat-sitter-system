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
    
    // Check if the sidebar is currently displayed
    if (sidebar.style.display === 'block') {
        sidebar.style.display = 'none'; // Close the sidebar
    } else {
        sidebar.style.display = 'block'; // Open the sidebar
    }
}

document.addEventListener('click', function(event) {
    const sidebar = document.querySelector('.sidebar');
    const moreButton = document.querySelector('li[onclick="showSidebar()"]');
    
    // Check if the click is outside the sidebar and the "More" button
    if (!sidebar.contains(event.target) && !moreButton.contains(event.target)) {
        sidebar.style.display = 'none'; // Close the sidebar
    }
});