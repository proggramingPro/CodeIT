document.addEventListener("DOMContentLoaded", function() {
    const wrapper = document.querySelector('.wrapper');
    const btnPopup = document.querySelector('.btnlogin-popup');
    const closePopupButton = document.querySelector('.icon-close');

    btnPopup.addEventListener('click', () => {
        wrapper.classList.add('active-popup');
    });

    closePopupButton.addEventListener('click', () => {
        wrapper.classList.remove('active-popup');
    });
});
