<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Team profile cards</title>
</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <img src="./img/1.jpg" class="card-img-top" alt="Profile image">
            <div class="card-body">
                <h5 class="card-title">Alan Bayu Eka Satria</h5>
                <p class="card-text">21.83.0648</p>
                <p class="card-text">Keterampilan "Networking Dasar&Python Dasar"</p>
                <div class="socials">
                    <button class="btn btn-outline-dark"><i class="fab fa-github"></i></button>
                    <button class="btn btn-outline-info"><i class="fab fa-twitter"></i></button>
                    <button class="btn btn-outline-danger"><i class="fab fa-pinterest-p"></i></button>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="./img/2.jpg" class="card-img-top" alt="Profile image">
            <div class="card-body">
                <h5 class="card-title">Ikvan Rahmat Fauzin</h5>
                <p class="card-text">21.83.0649</p>
                <p class="card-text">Keterampilan "Networking Dasar&Python Dasar"</p>
                <div class="socials">
                    <button class="btn btn-outline-dark"><i class="fab fa-github"></i></button>
                    <button class="btn btn-outline-danger"><i class="fab fa-pinterest-p"></i></button>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="./img/3.jpg" class="card-img-top" alt="Profile image">
            <div class="card-body">
                <h5 class="card-title">Leonsius Faldi Kaum</h5>
                <p class="card-text">21.83.0671</p>
                <p class="card-text">Keterampilan "Networking Dasar&Python Dasar"</p>
                <div class="socials">
                    <button class="btn btn-outline-dark"><i class="fab fa-github"></i></button>
                    <button class="btn btn-outline-info"><i class="fab fa-twitter"></i></button>
                </div>
            </div>
        </div>
        
        <div class="card">
            <img src="./img/4.jpg" class="card-img-top" alt="Profile image">
            <div class="card-body">
                <h5 class="card-title">Muchsin</h5>
                <p class="card-text">21.83.0697</p>
                <p class="card-text">Keterampilan "Networking Dasar&Python Dasar"</p>
                <div class="socials">
                    <button class="btn btn-outline-dark"><i class="fab fa-github"></i></button>
                    <button class="btn btn-outline-info"><i class="fab fa-twitter"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Send Message</h2>
        <form action="process_message.php" method="post">
            <div class="form-group">
                <label for="recipient">Select Recipient:</label>
                <select class="form-control" name="recipient" required>
                    <option value="Alan Bayu Eka Satria">Alan Bayu Eka Satria</option>
                    <option value="Ikvan Rahmat Fauzin">Ikvan Rahmat Fauzin</option>
                    <option value="Leonsius Faldi Kaum">Leonsius Faldi Kaum</option>
                    <option value="Muchsin">Muchsin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea class="form-control" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery (Make sure to include them at the end of the body) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
