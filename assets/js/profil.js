// MODAL Hapus
// Get the modal
var modalHapus = document.getElementById("isiKonfirmasiKeluar");
// Get the button that opens the modal
var btnHapus = document.getElementById("konfirmasiKeluar");

// Get the <span> element that closes the modal
var spanHapus = document.getElementById("closeKeluar");

// When the user clicks on the button, open the modal
btnHapus.onclick = function() {
  modalHapus.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanHapus.onclick = function() {
  modalHapus.style.display = "none";
}
