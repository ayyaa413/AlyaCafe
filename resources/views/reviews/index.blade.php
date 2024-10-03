<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Review Pengguna</h3>
        @foreach ($reviews as $review)
            <div class="mb-3">
                <strong>{{ $review->name }}:</strong>
                <span class="text-muted">"{{ $review->review }}"</span>
            </div>
        @endforeach

        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label">Tambahkan Review</label>
                <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Review</button>
        </form>
    </div>
</body>
</html>
