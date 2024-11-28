@extends('layouts.main')

@section('content')
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
                <td>{{ Str::limit($feedback->message, 50) }}</td>
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

<!-- jsPDF script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('exportPdfButton').onclick = function() {
            const { jsPDF } = window.jspdf; // Ambil jsPDF dari window
            const doc = new jsPDF();

            // Menambahkan konten ke PDF
            doc.text("Daftar Feedback", 10, 10);
            let y = 20;

            // Mengambil data dari tabel
            const feedbackRows = document.querySelectorAll('#feedbackTable tbody tr');
            feedbackRows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const rowData = [];
                cells.forEach(cell => {
                    rowData.push(cell.innerText);
                });
                doc.text(rowData.join(' '), 10, y);
                y += 10; // Jarak antar baris
            });

            doc.save("feedback.pdf");
        }
    });
</script>

<!-- Include Bootstrap CSS and JS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.11/jspdf.plugin.autotable.min.js"></script>

@endsection
