{{-- Sweet alert  --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Inisialisasi Datatable  --}}
<script>
    $(document).ready(function() {
        $('#daftar-harga').DataTable();
    });
</script>

{{-- Datatable  --}}
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/static/js/pages/datatables.js') }}"></script>

{{-- Vendor JS Files  --}}
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

{{-- Main JS File  --}}
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- Auto Increment Kolom Nomor Table Harga  --}}
<script>
    // Ambil semua elemen <td> dengan kelas "auto-increment"
    var autoIncrementCells = document.querySelectorAll('.auto-increment');

    // Loop melalui setiap elemen dan atur nilai sesuai dengan indeks
    autoIncrementCells.forEach(function(cell, index) {
        cell.textContent = index + 1;
    });
</script>

{{-- Sweet alert  --}}
<script>
    // Fungsi untuk menampilkan SweetAlert2 dengan penundaan 1 detik
    function showPromoAlert() {
        setTimeout(function() {
            Swal.fire({
                title: 'PROMO HARGA CHEAT !!!',
                text: 'Cek di menu harga untuk mengetahui promo promonya.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
        }, 5000); // Penundaan selama 5 detik (5000 milidetik)
    }

    // Panggil fungsi showPromoAlert saat dokumen selesai dimuat
    document.addEventListener("DOMContentLoaded", showPromoAlert);
</script>
