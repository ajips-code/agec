const whatsappIcon = document.getElementById("whatsapp-icon");
const whatsappTextContainer = document.querySelector(".whatsapp-text-container");
const floatingWhatsapp2 = document.querySelector(".floating-whatsapp2");

whatsappIcon.addEventListener("click", function () {
  whatsappIcon.classList.toggle("active"); // Tambahkan atau hapus kelas 'active' saat ikon diklik
  
  if (whatsappIcon.classList.contains("active")) {
    floatingWhatsapp2.classList.add("hidden"); // Tambahkan kelas 'hidden' ke floating-whatsapp2
  } else {
    floatingWhatsapp2.classList.remove("hidden"); // Hapus kelas 'hidden' dari floating-whatsapp2
  }
});

whatsappTextContainer.addEventListener("click", function (event) {
  event.stopPropagation(); // Menghentikan penyebaran klik ke atas elemen induk
  const phoneNumber = event.target.id === "whatsapp-text" ? "+6566909266" : "+61420402142";
  const whatsappLink = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=Hello%20I'm%20interested%20with%20Australian%20Global%20Education%20Consultancy!`;
  window.location.href = whatsappLink; // Alihkan ke link WhatsApp yang sesuai
});

const closeButton = document.createElement("span");
closeButton.innerHTML = "&times;";
closeButton.className = "whatsapp-close";
closeButton.addEventListener("click", function (event) {
  event.stopPropagation(); // Menghentikan penyebaran klik ke atas elemen induk
  whatsappIcon.classList.remove("active"); // Hapus kelas 'active' dari ikon WhatsApp
  floatingWhatsapp2.classList.remove("hidden"); // Hapus kelas 'hidden' dari floating-whatsapp2
});
whatsappTextContainer.appendChild(closeButton); // Tambahkan tombol close ke kontainer teks WhatsApp
