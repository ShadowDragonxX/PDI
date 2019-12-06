      <?php
            $nombre=$_FILES['Foto']['name'];
$guardado=$_FILES['Foto']['tmp_name'];
if (!file_exists('fotos')) {
    mkdir('fotos',0777,true);
    if (file_exists('fotos')) {
        if(move_uploaded_file($guardado,'fotos/'.$nombre))
        {
            echo"archivo listo";
        }
        else
        {
            echo "No se pudo";
        }
            # code...
    }
        # code...
}
else
{
    if(move_uploaded_file($guardado,'fotos/'.$nombre))
    {
        echo"archivo listo";
    }
    else
    {
        echo "No se pudo";
    }
}

        ?>