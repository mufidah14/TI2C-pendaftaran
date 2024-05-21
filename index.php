<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" a href="vendor/css/bootstrap-grid.rtl.css.map">
    <script src="vendor/js/bootstrap.bundle.js"></script>
    <style>
        /* General Styles */
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4; /* Light gray background */
}

header {
  background-color: #E1ACAC; /* Dark gray header */
  color: #fff;
  padding: 20px;
  text-align: center;
}

h1 {
  margin: 0;
  font-size: 24px;
}

h3 {
  margin: 10px 0;
  font-size: 18px;
}

/* Navigation Styles */
nav {
  background-color: #CA8787;
  padding: 15px;
  margin-bottom: 20px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav a {
  color: #333;
  text-decoration: none;
  font-weight: bold;
}

nav a:hover {
  color: #000;
}

/* Status Message Styles */
.status-message {
  background-color: #007bff;
  color: #fff;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 4px;
}

.status-message.success {
  background-color: #28a745; /* Green for success */
}

.status-message.error {
  background-color: #dc3545; /* Red for error */
}

    </style>\
</head>

<body>
    <header>
         <h3>Pendaftaran Siswa Baru</h3>
         <h1>Politeknik Madiun</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
    </body>
</html>

