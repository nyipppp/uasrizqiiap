<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - RAP Football School</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>RAP Football School</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="team.php">Tim</a></li>
                <li><a href="gallery.php">Galeri</a></li>
                <li><a href="contact.php">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Kontak Kami</h2>
        <form action="proses_contact.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Pesan:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea><br>
            <input type="submit" value="Kirim">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 RAP Football School. All rights reserved.</p>
    </footer>
</body>
</html>
clude('includes/footer.php'); ?>
