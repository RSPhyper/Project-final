// berikut dua function yg di pakai untuk menampilkan halaman pop-up login
// kedua fanction di bawah ini memiliki cara kerja yg sama
// yaitu jika functionnya di panggil maka akan mengubah style elemen dengan id pop-up-form
function openForm() {
    document.getElementById("pop-up-form").style.display = "block";
}

function closeForm() {
    document.getElementById("pop-up-form").style.display = "none";
}

// function di bawah adalah function yg di pakai untuk melihat password cara kerja 
// dengan mendefinisikan sebuah variabel yg mengambil document di elemen ber id password
// kemudian di seleksi apakan tipe variabel ini sama dengan tipe password
// kalau iya maka ubah type nya jadi text
// kalau tidak  tipe nya tetap password
// referensi dari https://www.ketutrare.com/2018/08/menampilkan-password-di-textfield.html
function myFunction(elemenid) {
    var x = document.getElementById(elemenid);
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


