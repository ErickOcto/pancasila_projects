document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const closeBtn = document.getElementById('close-btn');
    const openBtn = document.getElementById('open-btn');

    openBtn.addEventListener('click', function() {
        sidebar.classList.add('closed');
    });

    closeBtn.addEventListener('click', function() {
        sidebar.classList.remove('closed');
    });
});
