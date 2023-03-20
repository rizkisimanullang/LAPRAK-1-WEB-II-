<?php 
    @$jari_jari = $_REQUEST['jari-jari'];
    @$tinggi = $_REQUEST['tinggi'];
    @$selimut = $_REQUEST['selimut'];
// membuat variable, dimana pada masing-masing variable di definisikan $_REQUEST yaitu mengambil data yang dikirimkan oleh method post

    @$luas_alas = 22/7 * $jari_jari * $jari_jari;
    @$selimut = 22/7 *$jari-jari + $selimut;
    @$volume = 1/3 * $luas_alas * $tinggi;
//mendefinisikan  rumus untuk perhitungan, nantinya akan memaggil masing-masing dari variable jari_jari, tinggi, dan selimut
?>
        <form method="POST">
            <table>
                <tr>
                    <td>jari-jari</td>
                    <td>=</td>
                    <td><input type="text" name="jari-jari" value="<?php echo $jari_jari; ?>"/>cm<br/></td>
                </tr>
//membuat form untuk meng inputan jari-jari  dengan tipe inputan berupa text, ini nanti akan di kerjakan dengan cara memanggil variable jari_jari,  <?php echo $jari_jari; ?>

                <tr>
//untuk ganti baris
                    <td>tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
                </tr>
//membuat form untuk meng inputan tinggi  dengan tipe inputan berupa text, ini nanti akan di kerjakan dengan cara memanggil variable tinggi,  <?php echo $tinggi; ?>

 <td>selimut</td>
                    <td>=</td>
                    <td><input type="text" name="selimut" value="<?php echo $selimut; ?>"/>cm<br/></td>
                </tr>
            </table>
//membuat form untuk meng inputan selimut  dengan tipe inputan berupa text, ini nanti akan di kerjakan dengan cara memanggil variable selimut,  <?php echo $selimut; ?>

            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
//membuat  tombol button dengan nama tombol submit
 
            <?php
                echo "Luas Alas = ".$luas_alas." cm^2<br/>";
   echo "Luas selimut = ".$selimut." cm^2<br/>";
                echo "Volume Kerucut = ".$volume." cm^3<br/>";
            ?>
        </form>
//untuk memanggil perhitungan dari rumus luas_alas, selimut, dan volume, kemudian hasil perhitungannya akan di tampilkan