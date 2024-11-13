let itemsBar = document.querySelectorAll('.item-bar');
let valueBar = document.querySelectorAll('.bar-description');
itemsBar[0].className = itemsBar[0].className.replace(" border-item", "");
itemsBar[0].classList.add('border-item-red');
valueBar[0].style.display = "block";

function disableBarStyle() {
    itemsBar.forEach((element) => {
        element.className = element.className.replace(" border-item-red", "");
        element.classList.add('border-item');
    });
    valueBar.forEach((element) => {
        element.style.display = "none";
    });
}

itemsBar.forEach((element, index) => {
    element.addEventListener('click', function() {
        disableBarStyle();
        element.className = element.className.replace(" border-item", "");
        element.classList.add('border-item-red');
        valueBar[index].style.display = "block";
    });
});

document.querySelector('#buy-button').addEventListener('click', function() {
    alert('buy');
});
