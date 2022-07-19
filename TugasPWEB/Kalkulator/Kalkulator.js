function print(value) {
    document.getElementById('input').value += value;
}

function reset(){
    document.getElementById('hapus').value="";
}

function proses(){
    let angka = document.getElementById('input').value;
    let hasil = eval(angka);
    document.getElementById('input').value = hasil;
}