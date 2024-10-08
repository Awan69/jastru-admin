       @push('scripts')
           <!-- Link to Bootstrap JS -->
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

           <script>
               const filterButtons = document.querySelectorAll('.filter-container button');

               filterButtons.forEach(button => {
                   button.addEventListener('click', () => {
                       // Remove active class from all buttons
                       filterButtons.forEach(btn => btn.classList.remove('active'));

                       // Add active class to the clicked button
                       button.classList.add('active');
                   });
               });
           </script>

           <script>
               // JavaScript untuk memasukkan teks dari quick replies ke dalam input chat
               document.querySelectorAll('.quick-replies button').forEach(button => {
                   button.addEventListener('click', function() {
                       const inputChat = document.getElementById('chat-input');
                       inputChat.value = this.textContent;
                   });
               });

               // Tangkap elemen input dan tombol
               const chatInput = document.getElementById('chat-input');
               const sendBtn = document.getElementById('send-btn');
               const fileIconBtn = document.getElementById('file');

               // Fungsi untuk mengubah tampilan icon saat input berubah
               chatInput.addEventListener('input', function() {
                   if (chatInput.value.trim() !== "") {
                       // Jika ada teks, tampilkan tombol kirim dan sembunyikan icon file
                       sendBtn.style.display = 'block';
                       fileIconBtn.style.display = 'none';
                   } else {
                       // Jika tidak ada teks, sembunyikan tombol kirim dan tampilkan icon file
                       sendBtn.style.display = 'none';
                       fileIconBtn.style.display = 'block';
                   }
               });

               // Tampilkan pop-up saat add-button diklik
               document.querySelector('.add-button').addEventListener('click', function() {
                   const popup = document.getElementById('popup');
                   popup.style.display = popup.style.display === 'none' || popup.style.display === '' ? 'block' : 'none';
               });

               // Menyembunyikan pop-up jika diklik di luar
               window.addEventListener('click', function(event) {
                   const popup = document.getElementById('popup');
                   if (!event.target.closest('.add-button') && !event.target.closest('.popup-container')) {
                       popup.style.display = 'none';
                   }
               });

               document.getElementById('file').addEventListener('click', function() {
                   document.getElementById('negoPopup').style.display = 'flex';
               });

               document.getElementById('nego').addEventListener('click', function() {
                   document.getElementById('negoPopup').style.display = 'flex';
               });

               // Function to close the nego-popup
               function closeNegoPopup() {
                   document.getElementById('negoPopup').style.display = 'none';
               }

               // Hide nego-popup when clicking outside of it
               window.addEventListener('click', function(event) {
                   const negoPopup = document.getElementById('negoPopup');
                   if (!event.target.closest('.nego-content') && !event.target.closest('.popup-item')) {
                       negoPopup.style.display = 'none';
                   }
               });
           </script>
       @endpush
