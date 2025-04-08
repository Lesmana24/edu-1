// JavaScript Code Example
let kalimat = "Hello World!";

for(let i = 0; i < 5; i++) {
    console.log("Kata gua mah "+ kalimat);
}

for(let i = 1; i <= 5; i++) {
    console.log("Perulangan ke "+ i);
}

function greet(nama){
    return "Hallo, saya adalah "+kalimat + " dan saya adalah "+ nama;
}

console.log(greet("jajang"));

let angka1 = [1, 2, 3, 4, 5];
let angka2 = [6, 7, 8, 9, 10];

angka1.push(6); // Menambahkan elemen ke akhir array
angka2.unshift(5); // Menambahkan elemen ke awal array
angka1.pop(); // Menghapus elemen terakhir dari array
angka2.shift(); // Menghapus elemen pertama dari array
console.log("Array 1: " + angka1);
console.log("Array 2: " + angka2);

for(let i = 0; i < angka2.length; i++){
    console.log(angka2[i]);
} // Looping dengan for biasa

angka1.forEach(angka1 => console.log(angka1)); // Looping dengan forEach

let angka3, angka4=0;
angka3 = parseFloat(prompt("Masukkan angka : "));
angka4 = parseFloat(prompt("Masukkan angka : "));
// Menggunakan prompt untuk input dari pengguna
let jumlah = angka3 + angka4;
console.log("Jumlah: " + jumlah); // Menampilkan hasil penjumlahan

let nama,usia,kota;
nama = prompt("Masukkan nama anda : ");
usia = prompt("Masukkan usia anda : ");
kota = prompt("Masukkan kota anda : ");

alert(`Nama saya adalah ${nama}, saya berusia ${usia} tahun, dan saya tinggal di ${kota}.`); // Menggunakan template literal untuk menampilkan hasil