<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "latukk";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $siswas = [];
    while ($siswa = mysqli_fetch_assoc($result)) {
        $siswas[] = $siswa;
    }
    return $siswas;
}
function tambah_data($siswa)
{
    global $conn;

    $absen = $siswa["absen"];
    $nama = $siswa["nama"];
    $nis = $siswa["nis"];
    $telp = $siswa["telp"];
    $jurusan = $siswa["jurusan"];
    $query = "INSERT INTO `siswa`(`absen`, `nama`, `nis`, `telp`, `jurusan`)
    VALUES ('$absen','$nama','$nis','$telp','$jurusan')";

    $query_exe = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($query_exe) {
        return true;
    }
    return false;
}
function hapus_data($id)
{
    global $conn;

    $query = "delete from `siswa` where id='$id'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function edit_data($siswa)
{
    global $conn;


    $id = $siswa["id"];
    $absen = $siswa["absen"];
    $nama = $siswa["nama"];
    $nis = $siswa["nis"];
    $telp = $siswa["telp"];
    $jurusan = $siswa["jurusan"];
    $query = "UPDATE `siswa` SET `id`=$id ,`absen`=$absen,
    `nama`='$nama',`nis`='$nis',`telp`='$telp',`jurusan`='$jurusan' 
    WHERE id=$id";


    $query_execeute = mysqli_query($conn, $query);

    if ($query_execeute) {
        return true;
    }

    return false;
}
