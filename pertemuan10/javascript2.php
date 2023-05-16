<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 2</title>
</head>
<body>

    <form action="Latihan2" id="Latihan2" method="POST" onsubmit="return checkform()">

        <table>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td><br><label for="jk">Jenis Kelamin</label></td>
                <td><br>
                    <input type="radio" name="jk" id="jk" value="L">Laki-laki
                    <input type="radio" name="jk" id="jk" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td><br><label for="jurusan">Jurusan</label></td>
                <td>
                    <br>
                    <select name="jurusan" id="jurusan">
                        <option value="" selected disabled> -- Pilih Jurusan --</option>
                        <option value="MTI">MTI</option>
                        <option value="KAB">KAB</option>
                        <option value="DKV">DKV</option>
                        <option value="PAR">PAR</option>
                        <option value="SK">SK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="hobi">Hobi</label></td>
                <td>
                    <br>
                    <input type="checkbox" name="hobi1" id="hobi1" value="1">Menyanyi <br>
                    <input type="checkbox" name="hobi2" id="hobi2" value="2">Menari <br>
                    <input type="checkbox" name="hobi3" id="hobi3" value="3">Basket <br>
                    <input type="checkbox" name="hobi4" id="hobi4" value="4">Berenang <br>
                    <input type="checkbox" name="hobi5" id="hobi5" value="5">Sepak Bola
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <br>
                    <button type="submit" name="kirim">Kirim</button>
                </td>
            </tr>
        </table>

    </form>


<!-- javascript -->
<script> 

    function checkform() {
        let form        = document.getElementById("Latihan2").elements;
        let nim         = form.namedItem("nim").value;
        let jk          = form.namedItem("jk").value;
        let jurusan     = form.namedItem("jurusan").value;
        let hobi        = [
                            form.namedItem("hobi1").checked,
                            form.namedItem("hobi2").checked,
                            form.namedItem("hobi3").checked,
                            form.namedItem("hobi4").checked,
                            form.namedItem("hobi5").checked
                          ];
        console.log("Nim : "+nim);
        console.log("Jenis Kelamin : "+jk);
        console.log("Jurusan : "+jurusan);
        console.log("Hobi : "+hobi);

        return false;

    }

</script>
    
</body>
</html>
