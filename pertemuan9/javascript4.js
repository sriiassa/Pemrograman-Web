function tulis() {
    document.write("Contoh text dengan menggunakan <strong>Javascript</strong>");
    document.write("<br><br><button onclick='tampil()'>Tampil</button>");
}

function tampil() {
    document.write("<strong><h2>Semangat Kuliahnya!</h2></strong>");
}

function cekData() {
    let nama = document.getElementById("nama").value;
    let nim = document.getElementById("nim").value;
    console.log("Isi dari nama : "+nama);
    console.log("Isi dari nim : "+nim);
}