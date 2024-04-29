<html>
    <?php echo "<head>" ?>

    </head>
<body>
    <?php 
        $tomb = ["alma",23,"banán",44,56];       //Indexed array
        $tomb2 = [                               //Asszociatív tömb
            "Fajta" => "Pitbull",
            "Szine" => "Rózsaszín",
            "Ivar" => "hím",
            "Farok" => 0
        ];
        $tomb3 = [
            ["Fajta" => "Pitbull","Szine" => "Rózsaszín","Ivar" => "hím","Farok" => 0],
            ["Fajta" => "Tacsó","Szine" => "Fekete","Ivar" => "Nőstény","Farok" => 1],
            ["Fajta" => "Puli","Szine" => "Fekete","Ivar" => "hím","Farok" => 1],
            ["Fajta" => "Dobberman","Szine" => "Barna","Ivar" => "Nőstény","Farok" => 0]

        ];
        $valtozo = "Első PhP óra";               // ALTGR + É
        print "Hello Világ! <br>";                # Ez is komment
        print "<p>".$valtozo."</p>";
        //echo $tomb[1];
        //print_r($tomb);
    ?>
    <ul>
        <?php for($i=0; $i<count($tomb); $i++){
            echo "<li>".$tomb[$i]."</li>";
        } ?>
    </ul>
    <ol>
        <?php $i=0; 
        while($i<count($tomb)) {
            echo "<li>".$tomb[$i]."</li>";
            $i++;
        }     
        ?>
    </ol>
    <h3>Kutya tömb elemei</h3>
    <p>Fajta: <?php echo$tomb2["Fajta"]; ?></p>
    <p>Színe: <?php echo$tomb2["Szine"]; ?></p>
    <p>Ivar: <?php echo$tomb2["Ivar"]; ?></p>
    <p><?php if($tomb2["Farok"] ==0 ){
        echo "Levágták a kutya farkát";
        }
        else echo"Van farka"?></p>
        <h3>Kutya mátrix</h3>

        <table>
            <tr>
                <th>Fajta</th>
                <th>Szine</th>
                <th>Ivar</th>
                <th>Megjegyzés</th>
            </tr>
        

        <?php foreach($tomb3 as $row) {?>
            <tr>
                <td><?php echo $row["Fajta"]; ?></td>
                <td><?php echo $row["Szine"]; ?></td>
                <td><?php echo $row["Ivar"]; ?></td>
                <td>
                    <?php if($row["Farok"] ==0 ){
                    echo "Levágták a kutya farkát";
                    }
                    else echo"Van farka"?>
                </td>
            </tr>
            <?php } ?>
            </table>
</body>
</html>