<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>

<body>
    <header>
        <h3>Registrasi</h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>
            <p>
                <label for="id">Nim: </label>
                <input type="text" name="id" placeholder="Nim" required>
            </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" required />
        </p>
        <p>
            <label for="pass">Password: </label>
            <input type="text" name="pass" placeholder="Password" required="">
        </p>
        <p>
        <label for="kelas">Kelas: </label>
        <input type="radio" name="kelas" value="d3mi-01">d3mi-01
        <input type="radio" name="kelas" value="d3mi-02">d3mi-02
        <input type="radio" name="kelas" value="d3mi-03">d3mi-03
        <input type="radio" name="kelas" value="d3mi-04">d3mi-04
    </p>
    <p>
    <label for="kelamin">Kelamin: </label>
     <input type="radio" name="kelamin" value="laki-laki">laki-laki
    <input type="radio" name="kelamin" value="perempuan">perempuan
    </p>
    <p>
    <label for="hobi">Hobi: </label>
    <input type="checkbox" name="hobi" value="makan">makan
    <input type="checkbox" name="hobi" value="minum">minum
    <input type="checkbox" name="hobi" value="tidur">tidur
    </p>
    <p>
        <label for="fakultas">Fakultas: </label>
        <select name="fakultas">
            <option value="pilih">pilih</option>
            <option value="terapan">terapan</option>
            <option value="informatika">informatika</option>
        </select>
    </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
