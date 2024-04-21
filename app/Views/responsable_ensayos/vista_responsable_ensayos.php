<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Responsable de Ensayos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Stylesheet -->
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: #f8f9fa;
        }
        .wrapper {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .sidebar-text {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
        }
        .file-upload-form {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-text text-center">
                <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="https://conacyt.mx/wp-content/uploads/cpis/logos/web_1024/logo_inaoe.jpg" alt="Image">
                <h1 class="font-weight-bold">Responsable de Ensayos</h1>
                <p class="mb-4">
                    El responsable de ensayos en el Laboratorio de Iluminación y Eficiencia Energética se encarga de recibir, evaluar y gestionar las muestras enviadas para análisis.
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        
        <div class="content">
            <h2 class="text-center">Subir Documentos</h2>
            <div class="file-upload-form">
                <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post" enctype="multipart/form-data" class="text-center">
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload">
                        <label class="custom-file-label" for="fileToUpload">Seleccionar Archivo</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Subir Archivo</button>
                </form>
            </div>';

            if(isset($_POST["submit"])) {
                $targetDirectory = "uploads/";
                $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]); 
                $uploadOk = 1; 

                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "<p>El archivo es una imagen - " . $check["mime"] . ".</p>";
                    $uploadOk = 1;
                } else {
                    echo "<p>El archivo no es una imagen.</p>";
                    $uploadOk = 0;
                }

                if (file_exists($targetFile)) {
                    echo "<p>Lo siento, el archivo ya existe.</p>";
                    $uploadOk = 0;
                }

                if ($_FILES["fileToUpload"]["size"] > 5000000) {
                    echo "<p>Lo siento, el archivo es demasiado grande.</p>";
                    $uploadOk = 0;
                }

                $allowedExtensions = array("jpg", "jpeg", "png", "gif");
                $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                if(!in_array($fileExtension, $allowedExtensions)) {
                    echo "<p>Solo se permiten archivos JPG, JPEG, PNG, GIF.</p>";
                    $uploadOk = 0;
                }

                if ($uploadOk == 0) {
                    echo "<p>Lo siento, tu archivo no fue subido.</p>";
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                        echo "<p>El archivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " ha sido subido.</p>";
                    } else {
                        echo "<p>Lo siento, hubo un error al subir tu archivo.</p>";
                    }
                }
            }

echo '</div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>';
?>

