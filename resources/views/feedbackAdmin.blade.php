@extends('layouts.main')

@section('content')

<style>
    /* Pastikan pesan tidak meluas ke kanan */
    td.feedback-column {
        white-space: normal; /* Mengizinkan teks membungkus */
        word-wrap: break-word; /* Memecah kata panjang */
        max-width: 200px; /* Atur lebar maksimum kolom */
    }
    
</style>
<div class="container mt-4">
    <h2 class="mb-4">Daftar Feedback</h2>

    <!-- Notifikasi jika ada pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <button id="exportPdfButton" class="btn btn-primary mb-3">Ekspor ke PDF</button>

    <table class="table table-striped table-bordered" id="feedbackTable">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $feedback->name ?? 'Anonymous' }}</td>
                <td class="feedback-column">{{ $feedback->message }}</td>
                <td>{{ $feedback->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <form action="{{ route('feedback.destroy', $feedback->id) }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus feedback ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $feedbacks->links() }} <!-- Memanggil links() pada objek paginator -->
    </div>
</div>

<!-- jsPDF and AutoTable -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const exportButton = document.getElementById('exportPdfButton');

        if (exportButton) {
            exportButton.onclick = function () {
                // Fetch data from Laravel backend
                fetch('/feedback/export')
                    .then(response => response.json())
                    .then(data => {
                        const { jsPDF } = window.jspdf; // Load jsPDF
                        const doc = new jsPDF();

                        // Header PDF
                        doc.text("Daftar Feedback", 10, 10);

                        // Prepare data for autoTable
                        const tableData = data.map((feedback, index) => [
                            index + 1,
                            feedback.name ?? 'Anonymous',
                            feedback.message,
                            feedback.created_at
                        ]);

                        // Generate table in PDF with adjusted column widths
                        doc.autoTable({
                            head: [['No', 'Nama', 'Pesan', 'Tanggal']],
                            body: tableData,
                            startY: 20, // Start table after header
                            columnStyles: {
                                0: { cellWidth: 20 },  // Kolom 'No' agar cukup lebar
                                1: { cellWidth: 40 },  // Kolom 'Nama' tidak terlalu lebar
                                2: { cellWidth: 90 },  // Kolom 'Pesan' lebih lebar
                                3: { cellWidth: 40 },  // Kolom 'Tanggal'
                            },
                        });

                        // Save the PDF
                        doc.save("feedback.pdf");
                    })
                    .catch(error => {
                        console.error("Error fetching feedback data:", error);
                    });
            };
        }
    });
</script>

<!-- Include Bootstrap CSS and JS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
