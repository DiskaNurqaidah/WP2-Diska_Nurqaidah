<?php
        if(isset($_POST['submit'])){
            $jari   =$_POST['jari'];
            $phie    =22/7;
            
            // menghitung luas lingkaran
            $luas_lingkaran = $phie*($jari*$jari);
            
            echo "Hasil hitung luas lingkaran [ $phie x $jari x $jari ] = $luas_lingkaran";
        }
    ?>
</body>
</html>