<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'pbw');

if (!$conn) {
    die("Koneksi gagal : ".mysqli_connect_error());
}

function checkLogin($username, $password)
{
    global $conn;
    $query = "SELECT
                    a.id,
                    a.username,
                    b.name 
                FROM
                    users a
                    INNER JOIN roles b ON a.role_id = b.id 
                WHERE
                    a.username = '$username' 
                    AND a.password = '$password';";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)==1) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['login']=true;
        $_SESSION['id']=$data['id'];
        $_SESSION['nama']=$data['username'];
        $_SESSION['role']=$data['name'];
        return true;
    } else {
        return false;
    }
}


function getAllMhs()
{
    global $conn;
    $query = "SELECT id,nim,nama,alamat FROM mahasiswa";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]=$row;
    }
    return $rows;
}

function getMhs($id)
{
    global $conn;
    $query = "SELECT id,nim,nama,alamat FROM mahasiswa WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]=$row;
    }
    return $rows[0];
}

function insertMhs($id, $nim, $nama, $alamat)
{
    global $conn;
    $query = "INSERT INTO mahasiswa ( user_id, nim, nama, alamat )
                VALUES
                    ( $id, '$nim', '$nama', '$alamat' );";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deleteMhs($id)
{
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function editMhs($id, $nim, $nama, $alamat)
{
    global $conn;
    $query = "UPDATE mahasiswa 
                SET nim = '$nim',
                    nama = '$nama',
                    alamat = '$alamat' 
                WHERE
                    id = $id;";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function checkId($id)
{
    global $conn;
    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)==1) {
        return true;
    } else {
        return false;
    }
}
