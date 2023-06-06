<?php
require '../Config/connect.php';
?>

<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Page/Table/css/style.css" />
    <link rel="stylesheet" href="../dist//sweetalert2.css">
    <script src="../dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="../Page/Table/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../Page/Table/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Page/Table/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Page/Table/css/style.css">
    <link rel="stylesheet" href="../css/tamdit.css">
    <title>Edit</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <h2 class="mb-5">Data Siswa</h2>

            <div class="table-responsive">

                <table class="table custom-table">
                    <form action="" method="post">
                        <thead>
                            <tr>
                                <th scope="col">No. Absen</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIS</th>
                                <th scope="col">No telp</th>
                                <th scope="col">Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">
                                <input type="text" name="id" id="id" hidden>
                                <td><input type="text" name="absen" id="absen" required></td>
                                <td><input type="text" name="nama" id="nama" required>
                                <td><input type="text" name="nis" id="nis" required> </td>
                                <td><input type="text" name="telp" id="telp" required></td>
                                <td><input type="text" name="jurusan" id="jurusan" required></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="center"><button type="submit" name="submit" class="more" style="font-size : 25px">Tambah</button></td>
                            </tr>
                        </tbody>
                    </form>
                </table>
                <form action="../Page/admin.php" align="center">
                    <button type="submit" class="more">Back to Admin Page</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["submit"])) {

        $q = tambah_data($_POST);
        if ($q) {
    ?>
            <script>
                Swal.fire({
                    title: "Adding Data",
                    text: "Adding Data Succesfull",
                    icon: "success",
                    timer: 1500
                }).then((result) => {
                    location.href = "../Page/admin.php";
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    title: "Failed",
                    text: "Failed to Add Data!",
                    icon: "warning",
                    timer: 1500
                }).then((result) => {
                    location.href = "../Page/admin.php";
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>