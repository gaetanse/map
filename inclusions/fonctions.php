<?php

function combler_vide($val, $row)
{
    if ($row[$val] == '') {
        $row[$val] = "&oslash;";
        echo $row[$val];
    }
}

function tab($val, $row2){
    echo '<td style="padding:5px;">';
    echo $row2[$val];
    combler_vide("$val",$row2);
    echo '</td>';
}

function tab2($val, $row){
    echo '<td style="padding:5px;">';
    echo $row[$val];
    combler_vide("$val",$row);
    echo '</td>';
}

function checkbox()
{
        if(!empty($_POST['1']))
            echo 'id <input type="checkbox" name="1" checked="checked"> ';
        else{
            echo 'id <input type="checkbox" name="1"> ';
        }
        if(!empty($_POST['2']))
            echo 'idCountry <input type="checkbox" name="2" checked="checked">';
        else
            echo 'idCountry <input type="checkbox" name="2">';
        if(!empty($_POST['3']))
            echo 'Name <input type="checkbox" name="3" checked="checked">';
        else
            echo 'Name <input type="checkbox" name="3">';
        if(!empty($_POST['4']))
            echo 'District <input type="checkbox" name="4" checked="checked">';
        else
            echo 'District <input type="checkbox" name="4">';
        if(!empty($_POST['5']))
            echo 'Population <input type="checkbox" name="5" checked="checked">';
        else
            echo 'Population <input type="checkbox" name="5">';
}

function checkbox2()
{
        if(!empty($_POST['11']))
            echo 'id <input type="checkbox" name="11" checked="checked"> ';
        else
            echo 'id <input type="checkbox" name="11"> ';
        if(!empty($_POST['22']))
            echo 'Code <input type="checkbox" name="22" checked="checked">';
        else
            echo 'Code <input type="checkbox" name="22">';
        if(!empty($_POST['33']))
            echo 'Name <input type="checkbox" name="33" checked="checked">';
        else
            echo 'Name <input type="checkbox" name="33">';
        if(!empty($_POST['44']))
            echo 'Continent <input type="checkbox" name="44" checked="checked">';
        else
            echo 'Continent <input type="checkbox" name="44">';
        if(!empty($_POST['55']))
            echo 'Region <input type="checkbox" name="55" checked="checked">';
        else
            echo 'Region <input type="checkbox" name="55">';
        if(!empty($_POST['66']))
            echo 'SurfaceArea <input type="checkbox" name="66" checked="checked">';
        else
            echo 'SurfaceArea <input type="checkbox" name="66">';
        if(!empty($_POST['77']))
            echo 'IndepYear <input type="checkbox" name="77" checked="checked">';
        else
            echo 'IndepYear <input type="checkbox" name="77">';
        if(!empty($_POST['88']))
            echo 'Population <input type="checkbox" name="88" checked="checked">';
        else
            echo 'Population <input type="checkbox" name="88">';
        if(!empty($_POST['99']))
            echo 'LifeExpectancy <input type="checkbox" name="99" checked="checked">';
        else
            echo 'LifeExpectancy <input type="checkbox" name="99">';
        if(!empty($_POST['1010']))
            echo 'GNP <input type="checkbox" name="1010" checked="checked">';
        else
            echo 'GNP <input type="checkbox" name="1010">';
        if(!empty($_POST['1111']))
            echo 'GNPOld <input type="checkbox" name="1111" checked="checked">';
        else
            echo 'GNPOld <input type="checkbox" name="1111">';
        if(!empty($_POST['1212']))
            echo 'LocalName <input type="checkbox" name="1212" checked="checked">';
        else
            echo 'LocalName <input type="checkbox" name="1212">';
        if(!empty($_POST['1313']))
            echo 'GovernmentForm <input type="checkbox" name="1313" checked="checked">';
        else
            echo 'GovernmentForm <input type="checkbox" name="1313">';
        if(!empty($_POST['1414']))
            echo 'HeadOfState <input type="checkbox" name="1414" checked="checked">';
        else
            echo 'HeadOfState <input type="checkbox" name="1414">';
        if(!empty($_POST['1515']))
            echo 'Capital <input type="checkbox" name="1515" checked="checked">';
        else
            echo 'Capital <input type="checkbox" name="1515">';
        if(!empty($_POST['1616']))
            echo 'Code2 <input type="checkbox" name="1616" checked="checked">';
        else
            echo 'Code2 <input type="checkbox" name="1616">';
}

function gestion_boutons()
{

    if (isset($_POST['id'])) {
        echo '<center>';
        echo '<input type="submit" value="Afficher toutes les infos des villes" name="villes" style="opacity : 0.5">';
        echo '<input type="submit" value="Aucun" name="aucun" style="opacity : 0.5 ">';
        echo '<input type="submit" value="Afficher toutes les infos des pays" name="pays" style="opacity : 0.5 ">';
        echo '<hr>';
        ?>

        <?php
        checkbox();
        ?>

        <?php
        echo '<hr>';
        echo '<input type="submit" value="Trier par id" name="id" style="opacity:1">';
        echo '<input type="submit" value="Appliquer" name="refresh" style="opacity : 0.5;width: 400px">';
        echo '<input type="submit" value="Trier par nom" name="nom" style="opacity:0.5">';
        echo '<hr>';
        echo '</center>';
        afficherVilles();
    }

    if (isset($_POST['id2'])) {
        echo '<center>';
        echo '<input type="submit" value="Afficher toutes les infos des villes" name="villes" style="opacity : 0.5">';
        echo '<input type="submit" value="Aucun" name="aucun" style="opacity : 0.5 ">';
        echo '<input type="submit" value="Afficher toutes les infos des pays" name="pays" style="opacity : 0.5 ">';
        echo '<hr>';
        ?>

        <?php
        checkbox2();
        ?>

        <?php
        echo '<hr>';
        echo '<input type="submit" value="Trier par id" name="id2" style="opacity:1">';
        echo '<input type="submit" value="Appliquer" name="refresh2" style="opacity : 0.5;width: 400px">';
        echo '<input type="submit" value="Trier par nom" name="nom2" style="opacity:0.5">';
        echo '<hr>';
        echo '</center>';
        afficherPays();
    }

    if (isset($_POST['nom'])) {
        echo '<center>';
        echo '<input type="submit" value="Afficher toutes les infos des villes" name="villes" style="opacity : 0.5">';
        echo '<input type="submit" value="Aucun" name="aucun" style="opacity : 0.5 ">';
        echo '<input type="submit" value="Afficher toutes les infos des pays" name="pays" style="opacity : 0.5 ">';
        echo '<hr>';
        ?>

        <?php
        checkbox();
        ?>

        <?php
        echo '<hr>';
        echo '<input type="submit" value="Trier par id" name="id" style="opacity:0.5">';
        echo '<input type="submit" value="Appliquer" name="refresh" style="opacity : 0.5;width: 400px">';
        echo '<input type="submit" value="Trier par nom" name="nom" style="opacity:1">';
        echo '<hr>';
        echo '</center>';
        afficherVilles();
    }

    if (isset($_POST['nom2'])) {
        echo '<center>';
        echo '<input type="submit" value="Afficher toutes les infos des villes" name="villes" style="opacity : 0.5">';
        echo '<input type="submit" value="Aucun" name="aucun" style="opacity : 0.5 ">';
        echo '<input type="submit" value="Afficher toutes les infos des pays" name="pays" style="opacity : 0.5 ">';
        echo '<hr>';
        ?>

        <?php
        checkbox2();
        ?>

        <?php
        echo '<hr>';
        echo '<input type="submit" value="Trier par id" name="id2" style="opacity:0.5">';
        echo '<input type="submit" value="Appliquer" name="refresh2" style="opacity : 0.5;width: 400px">';
        echo '<input type="submit" value="Trier par nom" name="nom2" style="opacity:1">';
        echo '<hr>';
        echo '</center>';
        afficherPays();
    }

    if (isset($_POST['villes']) == NULL && isset($_POST['pays']) == NULL && isset($_POST['aucun']) == NULL && isset($_POST['nom']) == NULL && isset($_POST['id']) == NULL) {
        echo '<center>';
        echo '<input type="submit" value="Afficher toutes les infos des villes" name="villes" style="opacity:0.5">';
        echo '<input type="submit" value="Aucun" name="aucun" style="opacity:0.5">';
        echo '<input type="submit" value="Afficher toutes les infos des pays" name="pays" style="opacity:0.5">';
        echo '</center>';
        echo '<hr>';
    }

    if (isset($_POST['villes'])) {

        echo '<center>';
        echo '<input type="submit" value="Afficher toutes les infos des villes" name="villes" style="opacity : 1">';
        echo '<input type="submit" value="Aucun" name="aucun" style="opacity : 0.5 ">';
        echo '<input type="submit" value="Afficher toutes les infos des pays" name="pays" style="opacity : 0.5 ">';
        echo '<hr>';
        ?>

        id <input type="checkbox" name="1" checked> idCountry <input type="checkbox" name="2" checked>
        Name <input type="checkbox" name="3" checked> District <input type="checkbox" name="4" checked>
        population <input type="checkbox" name="5" checked>

        <?php
        echo '<hr>';
        echo '<input type="submit" value="Trier par id" name="id" style="opacity:0.5">';
        echo '<input type="submit" value="Appliquer" name="refresh" style="opacity:0.5;width:400px">';
        echo '<input type="submit" value="Trier par nom" name="nom" style="opacity:0.5">';
        echo '<hr>';
        echo '</center>';
        afficherVilles();
    }

    if (isset($_POST['aucun'])) {
        echo '<center>';
        echo '<input type="submit" value="Afficher toutes les infos des villes" name="villes" style="opacity : 0.5">';
        echo '<input type="submit" value="Aucun" name="aucun" style="opacity : 1 ">';
        echo '<input type="submit" value="Afficher toutes les infos des pays" name="pays" style="opacity : 0.5 ">';
        echo '</center>';
        echo '<hr>';
    }

    if (isset($_POST['pays'])) {
        echo '<center>';
        echo '<input type="submit" value="Afficher toutes les infos des villes" name="villes" style="opacity : 0.5">';
        echo '<input type="submit" value="Aucun" name="aucun" style="opacity : 0.5 ">';
        echo '<input type="submit" value="Afficher toutes les infos des pays" name="pays" style="opacity : 1 ">';
        echo '<hr>';
        ?>

        id <input type="checkbox" name="11" checked> Code <input type="checkbox" name="22" checked>
        Continent <input type="checkbox" name="33" checked> Region <input type="checkbox" name="44" checked>
        SurfaceArea <input type="checkbox" name="55" checked> IndepYear <input type="checkbox" name="66" checked>
        Population <input type="checkbox" name="77" checked> LifeExpectancy <input type="checkbox" name="88" checked>
        GNP <input type="checkbox" name="99" checked> GNPOld <input type="checkbox" name="1010" checked>
        LocalName <input type="checkbox" name="1111" checked> GovernmentForm <input type="checkbox" name="1212" checked>
        HeadOfState <input type="checkbox" name="1313" checked> Capital <input type="checkbox" name="1414" checked>
        Code2 <input type="checkbox" name="1515" checked>

        <?php
        echo '<hr>';
        echo '<input type="submit" value="Trier par id" name="id2" style="opacity:0.5">';
        echo '<input type="submit" value="Appliquer" name="refresh2" style="opacity:1;width:400px">';
        echo '<input type="submit" value="Trier par nom" name="nom2" style="opacity:0.5">';
        echo '<hr>';
        echo '</center>';
        afficherPays();
    }

    if (isset($_POST['refresh'])) {
        echo '<center>';
        ?>

        <?php
        checkbox();
        ?>

        <?php
        echo '<hr>';
        echo '<input type="submit" value="Trier par id" name="id" style="opacity:0.5">';
        echo '<input type="submit" value="Appliquer" name="refresh" style="opacity : 1;width: 400px">';
        echo '<input type="submit" value="Trier par nom" name="nom" style="opacity:0.5">';
        echo '<hr>';
        echo '</center>';
        afficherVilles();
    }

    if (isset($_POST['refresh2'])) {
        echo '<center>';
        ?>

        <?php
        checkbox2();
        ?>

        <?php
        echo '<hr>';
        echo '<input type="submit" value="Trier par id" name="id2" style="opacity:0.5">';
        echo '<input type="submit" value="Appliquer" name="refresh2" style="opacity : 1;width: 400px">';
        echo '<input type="submit" value="Trier par nom" name="nom2" style="opacity:0.5">';
        echo '<hr>';
        echo '</center>';
        afficherPays();
    }
}

function afficherPays()
{
    global $con;
    $test = "SELECT * FROM country";
    if (isset($_POST['id2']))
        $test = "SELECT * FROM country ORDER BY id";
    if (isset($_POST['nom2']))
        $test = "SELECT * FROM country ORDER BY name";
    $stmt = $con->prepare($test);
    $stmt->execute();

    ?>

    <table border="1" style="border-spacing:15px;margin-left: 10px;">
    <tr>

    <?php

        if(!empty($_POST['11']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">id</u></font></th>';
        if(!empty($_POST['22']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">Code</font></u></th>';
        if(!empty($_POST['33']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">Name</font></u></th>';
        if(!empty($_POST['44']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">Continent</font></u></th>';
        if(!empty($_POST['55']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">Region</font></u></th>';
        if(!empty($_POST['66']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">SurfaceArea</font></u></th>';
        if(!empty($_POST['77']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">IndepYear</font></u></th>';
        if(!empty($_POST['88']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">Population</font></u></th>';
        if(!empty($_POST['99']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">LifeExpectancy</font></u></th>';
        if(!empty($_POST['1010']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">GNP</font></u></th>';
        if(!empty($_POST['1111']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">GNPOld</font></u></th>';
        if(!empty($_POST['1212']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">LocalName</font></u></th>';
        if(!empty($_POST['1313']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">GovernmentForm</font></u></th>';
        if(!empty($_POST['1414']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">HeadOfState</font></u></th>';
        if(!empty($_POST['1515']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">Capital</font></u></th>';
        if(!empty($_POST['1616']))
            echo '<th style="padding: 5px;"><u style="text-decoration: underline red;"><font color="red">Code2</font></u></th>';

        ?>

</tr>

    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :  // On boucle pour afficher toutes les données et on met toutes données dans un tablea
    ?>

    <tr>

<?php
    if(!empty($_POST['11']))
        tab2("id",$row);
    if(!empty($_POST['22']))
        tab2("Code",$row);
    if(!empty($_POST['33']))
        tab2("Name",$row);
    if(!empty($_POST['44']))
        tab2("Continent",$row);
    if(!empty($_POST['55']))
        tab2("Region",$row);
    if(!empty($_POST['66']))
        tab2("SurfaceArea",$row);
    if(!empty($_POST['77']))
        tab2("IndepYear",$row);
    if(!empty($_POST['88']))
        tab2("Population",$row);
    if(!empty($_POST['99']))
        tab2("LifeExpectancy",$row);
    if(!empty($_POST['1010']))
        tab2("GNP",$row);
    if(!empty($_POST['1111']))
        tab2("GNPOld",$row);
    if(!empty($_POST['1212']))
        tab2("LocalName",$row);
    if(!empty($_POST['1313']))
        tab2("GovernmentForm",$row);
    if(!empty($_POST['1414']))
        tab2("HeadOfState",$row);
    if(!empty($_POST['1515']))
        tab2("Capital",$row);
    if(!empty($_POST['1616']))
        tab2("Code2",$row);

    endwhile;
    ?>

</table>

<?php
}

function afficherVilles()
{
    global $con;
    $test = "SELECT * FROM city";
        if (isset($_POST['id']))
            $test = "SELECT * FROM city ORDER BY id";
        if (isset($_POST['nom']))
            $test = "SELECT * FROM city ORDER BY name";
    $stmt2 = $con->prepare($test);
    $stmt2->execute();
    ?>

    <table border="1" style="border-spacing:15px;margin-left: 10px;">
    <tr>

    <?php
        if(!empty($_POST['1']))
            echo '<th style="padding:5px;"><u style="text-decoration:underline red;"><font color="red">id</u></font></th>';
        if(!empty($_POST['2']))
            echo '<th style="padding:5px;"><u style="text-decoration:underline red;"><font color="red">idCountry</u></font></th>';
        if(!empty($_POST['3']))
            echo '<th style="padding:5px;"><u style="text-decoration:underline red;"><font color="red">Name</u></font></th>';
        if(!empty($_POST['4']))
            echo '<th style="padding:5px;"><u style="text-decoration:underline red;"><font color="red">District</u></font></th>';
        if(!empty($_POST['5']))
            echo '<th style="padding:5px;"><u style="text-decoration:underline red;"><font color="red">Population</u></font></th>';
     ?>

    </tr>

    <?php
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) :
    ?>

<tr>

<?php

    if(!empty($_POST['1']))
        tab("id",$row2);
    if(!empty($_POST['2']))
        tab("idCountry",$row2);
     if(!empty($_POST['3']))
         tab("Name",$row2);
     if(!empty($_POST['4']))
         tab("District",$row2);
     if(!empty($_POST['5']))
         tab("Population",$row2);

    ?>

</tr>

    <?php
    endwhile;
    ?>

    </table>

    <?php
}
?>