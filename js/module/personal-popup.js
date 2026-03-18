export const initPersonalPopup = () => {
    const popup = document.querySelector('.scene-popup');
    const card = document.querySelectorAll('.card-item');

    const popupImg = document.querySelector('.scene-popup-image');
    const popupName = document.querySelector('.scene-popup-name');
    const popupTitle = document.querySelector('.scene-popup-title');




    if (popup) {
        card.forEach(item => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                const name = item.querySelector('.card-item-name');
                const title = item.querySelector('.card-item-title');


                popupImg.src = img.src;
                popupName.textContent = name.textContent;
                popupTitle.textContent = title.textContent;
            });
        });

    }
}