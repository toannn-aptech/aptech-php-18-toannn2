// var a = 'xin chao cac ban';
// var b = 5;
// var c = 6;
// var d = b + c;
// var ten = 'Ngo Ngoc Toan';
// var lop = 'aptech-php-18';
// var thongbao = ten + '    ' + lop;
// // alert(thongbao);
// console.log(thongbao);

// function hienThiKetQua() {
//     console.log(b + c);
// }


// function hienThiKetQuaB() {
//     document.getElementById('demo').innerHTML = 'Toi La Toan';
//     document.getElementById('lop').innerHTML = 'php 18';
// }

// function batBongDen() {
//     console.log("hi");
//     document.getElementById('image').src = "pic_bulbon.gif";
// }

// function tatBongDen() {
//     document.getElementById('image').src = "pic_bulboff.gif";
// }

var imageElement = document.getElementById('image');

// function batTatBongDen() {
//     // console.log(imageElement);
//     if (imageElement.src == 'file:///Users/macbook/Desktop/aptech-php-18-toannn/html/20190516/pic_bulboff.gif') {
//         imageElement.src = "pic_bulbon.gif";
//     } else {
//         imageElement.src = "pic_bulboff.gif";
//     }
// }

function batTatBongDen() {
    // console.log(imageElement);
    if (imageElement.src.includes("pic_bulboff.gif")) {
        imageElement.src = "pic_bulbon.gif";
    } else {
        imageElement.src = "pic_bulboff.gif";
    }
}