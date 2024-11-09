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

// create a function when click #moreButton, add class .show in .sidebar class



function showSidebar(event){
    event.preventDefault();

    const sidebar = document.querySelector('.sidebar');
    
    // Check if the sidebar is currently displayed
    if (sidebar.style.display === 'block') {
        sidebar.style.display = 'none'; // Close the sidebar
    } else {
        sidebar.style.display = 'block'; // Open the sidebar
    }
}

const moreButton = document.querySelector('#moreButton'); // Select by ID

document.addEventListener('click', function(event) {
    const sidebar = document.querySelector('.sidebar');
    
    // Ensure both sidebar and moreButton exist before using them
    if (sidebar && moreButton) {
        // Check if the click is outside the sidebar and the "More" button
        if (!sidebar.contains(event.target) && !moreButton.contains(event.target)) {
            sidebar.style.display = 'none'; // Close the sidebar
        }
    }
});

