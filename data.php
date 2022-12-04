<html>

<head>
    <title>data</title>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td>cid</td>
                <td>name</td>
                <td>mail</td>
                <td>sub</td>
                <td>msg</td>
            
            </tr>
        </tbody>
    </table>
    </body>
</html>
            <?php            
        while( $a=mysqli_fetch_assoc($i)){

            $ari=$a;
            ?>     
            <tr>
                <td><?php echo $ari['cid'];?></td>
                <td><?php echo $ari['name'];?></td>
                <td><?php echo $ari['mail'];?></td>
                <td><?php echo $ari['sub'];?></td>
                <td><?php echo $ari['msg'];?></td>
            </tr>
        
        </tbody>
    </table>
    <?php}?>

