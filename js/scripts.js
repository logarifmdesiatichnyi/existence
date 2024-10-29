let locked = false; // Переменная для отслеживания состояния нажатия
let currentPhotoData = {}; // Данные текущей фотографии

function showBigPhoto(source_element) {
    const bigPhoto = document.getElementById("big_photo");
    const src_big = source_element.dataset.largeSrc;

    // Если текущее изображение уже открыто, сворачиваем его
    if (bigPhoto.src.includes(src_big) && bigPhoto.classList.contains('visible')) {
        bigPhoto.classList.remove('visible'); // Убираем класс, инициирующий анимацию открытия
        source_element.classList.remove('active');
        document.getElementById("photo_info").innerHTML = "";

        // Сворачиваем изображение через небольшой таймаут, чтобы завершить анимацию
        setTimeout(() => {
            bigPhoto.style.visibility = "hidden";
            bigPhoto.style.opacity = "0";
            bigPhoto.style.transform = "scale(0.8)"; // Возвращаем к уменьшенному размеру
        }, 500); // 500 мс соответствует времени анимации
    } else {
        bigPhoto.src = src_big;
        bigPhoto.style.visibility = "visible";
        bigPhoto.classList.add('visible'); // Добавляем класс для анимации открытия
        bigPhoto.style.opacity = "1";
        bigPhoto.style.transform = "scale(1)";

        const activeThumbnail = document.querySelector('.active');
        if (activeThumbnail) activeThumbnail.classList.remove('active');

        source_element.classList.add('active');
        document.getElementById("photo_info").innerHTML = `
            <h2>${source_element.alt}</h2>
            <p>${source_element.dataset.description}</p>
        `;
    }
}

function setupThumbnails() {
    const thumbnails = document.querySelectorAll('.thumbs img');
    thumbnails.forEach(img => {
        img.onclick = () => {
            currentPhotoData = img.dataset; // Сохраняем данные текущей фотографии
            showBigPhoto(img);
        };
        img.onmouseover = () => {
            // Обновляем информацию о фотографии при наведении
            document.getElementById("photo_info").innerHTML = `
                <h2>${img.alt}</h2>
                <p>${img.dataset.description}</p>
            `;
        };
        img.onmouseout = () => {
            // Очищаем информацию при уходе курсора
            document.getElementById("photo_info").innerHTML = "";
        };
    });
}

document.addEventListener('DOMContentLoaded', setupThumbnails);
