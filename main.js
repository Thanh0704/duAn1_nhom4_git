// Tạo mảng chứa các ảnh trong slideshow
const album = [];
for (let i = 0; i < 5; i++) {
    album[i] = new Image();
    album[i].src = `img/banner${i}.jpg`;
}

// Khởi tạo biến điều khiển
let index = 0;

// Hàm hiển thị slide
function slideshow() {
    index++;
    if (index >= album.length) {
        index = 0;
    }
    document.getElementById("banner").src = album[index].src;
}

// Hàm chuyển đến slide tiếp theo
function next() {
    index++;
    if (index >= album.length) {
        index = 0;
    }
    document.getElementById("banner").src = album[index].src;
}

// Hàm chuyển đến slide trước đó
function pre() {
    index--;
    if (index < 0) {
        index = album.length - 1;
    }
    document.getElementById("banner").src = album[index].src;
}

// Tự động chạy slideshow
const interval = setInterval(slideshow, 3000);
