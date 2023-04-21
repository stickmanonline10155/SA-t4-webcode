// SHOW MENU
// function showMenu() {
//     document.querySelector('.sidebar').classList.add('show');
// }

// function hideMenu() {
//     document.querySelector('.sidebar').classList.add('hide');
// }
function showMenu() {
    document.querySelector(".sidebar").style.width = "250px";
}

function hideMenu() {
    document.querySelector(".sidebar").style.width = "0";
}

// DARK MODE
    const sidebar = document.querySelector(".sidebar");
    const darkModeButton = document.querySelector(".dark-mode");
    function toggleSidebar() {
sidebar.classList.toggle("show");
}

function toggleDarkMode() {
document.body.classList.toggle("dark");
darkModeButton.classList.toggle("active");
}

sidebar.addEventListener("click", (event) => {
if (event.target.tagName === "A") {
    toggleSidebar();
}
});

darkModeButton.addEventListener("click", toggleDarkMode);

// ------------------------------
// -----ARROW MOVING (!! 還不知道怎麼做JS !!)---------------
// const nextBtn = document.querySelector(".arrow");

// let slideWidth = slides[0].getBoundingClientRect().width + 10;
// let slideIndex = 0;

// function setSlidePosition() {
//   slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
// }

// function moveSlide(direction) {
// if (direction === "arrow") {
//     slideIndex++;
// } else {
//     slideIndex--;
// }


// 拉著圖片往右移動(!! 還不知道怎麼做JS !!)
console.clear();

var flkty = new Flickity( '.boxes', {
	contain: true,
	prevNextButtons: true,
	pageDots: false,
	wrapAround: true,
	adaptiveHeight: true,
	setGallerySize: false,
	selectedAttraction: 0.05,
	freeScrollFriction: .1
});