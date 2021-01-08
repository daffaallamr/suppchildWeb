// MODAL TAMBAH
// Get the modal
var modalTambah = document.getElementById("isiTambah");
// Get the button that opens the modal
var btnTambah = document.getElementById("modalTambah");

// Get the <span> element that closes the modal
var spanTambah = document.getElementById("closeTambah");

// When the user clicks on the button, open the modal
btnTambah.onclick = function() {
  modalTambah.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanTambah.onclick = function() {
  modalTambah.style.display = "none";
}


// MODAL EDIT
// Get the modal
var modalEdit = document.getElementById("isiEdit");
// Get the button that opens the modal
var btnEdit = document.getElementById("modalEdit");

// Get the <span> element that closes the modal
var spanEdit = document.getElementById("closeEdit");

// When the user clicks on the button, open the modal
btnEdit.onclick = function() {
  modalEdit.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanEdit.onclick = function() {
  modalEdit.style.display = "none";
}

// MODAL Hapus
// Get the modal
var modalHapus = document.getElementById("isiHapus");
// Get the button that opens the modal
var btnHapus = document.getElementById("modalHapus");

// Get the <span> element that closes the modal
var spanHapus = document.getElementById("closeHapus");

// When the user clicks on the button, open the modal
btnHapus.onclick = function() {
  modalHapus.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanHapus.onclick = function() {
  modalHapus.style.display = "none";
}