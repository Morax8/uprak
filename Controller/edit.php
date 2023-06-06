<?php
require '../Config/connect.php';
$id = $_GET['id'];

$siswa = query("select * from `siswa` where id=$id")[0];

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
                                <input type="text" name="id" id="id" required value="<?= $siswa["id"]; ?>" hidden>
                                <td><input type="text" name="absen" id="absen" required value="<?= $siswa["absen"]; ?>"></td>
                                <td><input type="text" name="nama" id="nama" required value="<?= $siswa["nama"]; ?>">
                                <td><input type="text" name="nis" id="nis" required value="<?= $siswa["nis"]; ?>"> </td>
                                <td><input type="text" name="telp" id="telp" required value="<?= $siswa["telp"]; ?>"></td>
                                <td><input type="text" name="jurusan" id="jurusan" required value="<?= $siswa["jurusan"]; ?>"></td>
                            </tr>

                            <td colspan="5" align="center"><button type="submit" name="submit" class="more" style="font-size : 25px">Edit</button></td>

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
        $edit = edit_data($_POST);
        if ($edit) {
    ?>
            <script>
                Swal.fire({
                    title: "Edit Data",
                    text: "Edit Data Succesfull",
                    icon: "success",
                    timer: 1000
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
                    text: "Failed to Edit Data!",
                    icon: "warning",
                    timer: 5000
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