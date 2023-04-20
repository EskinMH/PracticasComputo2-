<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "diagrama.php";
    ?>
    <h2>Taxis</h2>
    <br>
        <table>
            
            <tr>
                <th>matricula</th>
                <th>modelo</th>
                <th>potenciaCV</th>
                <th>numero de licencia</th>
            </tr>
            <tr>
                <td><?php $taxi->matricula="FA333";
                echo $taxi->getMatricula()?></td>
                <td><?php $taxi->modelo="Corolla";
                echo $taxi->getModelo() ?></td>
                <td><?php $taxi->potenciacv="122CV";
                echo $taxi->getPotencia() ?></td>
                <td><?php echo $cod ?></td>

            </tr>
        </table>
    
</body>
</html>