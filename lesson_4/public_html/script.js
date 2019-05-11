
/* ---- Отображение большого изображения в блоке ----*/
function changeBigPicture(event) {
    var $previev = document.getElementById('previev')
    $previev.innerHTML = ''
    if (event.target.tagName === 'IMG') var $eventElement = event.target
    else if (event.target.tagName === 'DIV') var $eventElement = event.target.querySelector('img')
    var $bigImg = document.createElement('img')
    $bigImg.src = $eventElement.src
   /* $bigImg.dataset.rating = $eventElement.dataset.rating*/
    $previev.appendChild($bigImg)
}

/* ---- Открытие модального окна ----*/
function openModalWindow(event) {
    var $modalWindow = document.getElementById('modalWindow')
    var $previev = document.getElementById('previev')
    if ($previev.querySelector('img')) {
        var src = $previev.querySelector('img').src
        var rating = $previev.querySelector('img').dataset.rating
        console.log(rating)
        $modalWindow.src = src
        /* $modalWindow.dataset.rating = Number(rating)+1 */
    } 
}
function init() {
    var imagesItem = document.getElementsByClassName('productItem')
    for (var j = 0; j < imagesItem.length; j++) imagesItem[j].onclick = changeBigPicture
    document.getElementById('previev').addEventListener('click', openModalWindow)
}
window.addEventListener('load', init)