<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Tableau périodique des éléments chimiques</title>
    <link href="public/css/style.css" rel="stylesheet" />
</head>

<body>

<div class="appli">
    <table class="tableau">
        <tr>
            <th></th>
            <th>1 <br> <span>(IA)</span></th>
            <th>2 <br><span> (IIA)</span></th>
            <th>3 <br><span>(IIIA)</span></th>
            <th>4 <br><span>(IVA)</span></th>
            <th>5 <br><span>(VA)</span></th>
            <th>6 <br><span>(VIA)</span></th>
            <th>7 <br><span>(VIIA)</span></th>
            <th>8 <br><span>(VIIIA)</span></th>
            <th>9 <br><span>(VIIIA)</span></th>
            <th>10 <br><span>(VIIIA)</span></th>
            <th>11 <br><span>(IB)</span></th>
            <th>12 <br><span>(IIB)</span></th>
            <th>13 <br><span>(IIIB)</span></th>
            <th>14 <br><span>(IVB)</span></th>
            <th>15 <br><span>(VB)</span></th>
            <th>16 <br><span>(VIB)</span></th>
            <th>17 <br><span>(VIIB)</span></th>
            <th>18 <br><span>(VIIIB)</span></th>
        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!----------------------------------------- LIGNE 1 ----------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th>1</th>

                <td class="NonMetaux rot">
                    <a href="https://fr.wikipedia.org/wiki/Hydrogène" target="_blank">

                        <p class="1">
                            <?php
                            $post = lecture(1);
                            echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>".
                                "<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                            ?>
                        </p>
                    </a>
                </td>

            <td class="affichage">
                <p>
                <span class="legende"><- nom de l'élément</span><br>
                <span class="legende"><- numéro atomique</span><br>
                <span class="legende"><- symbole chimique</span><br>
                <span class="legende"><- masse atomique</span>
                </p>
            </td>
<!------------------------------------------------------------------------------------------------------------->
<!----------------------------------- Affichage zone ecran 1--------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
            <td colspan="2" rowspan="2" class="affichage">

                <p class="zone1">
                <!--Partie dans laquelle, en javascript, nous allons copier/coller les différentes cases-->
                </p>

            </td>
<!------------------------------------------------------------------------------------------------------------->
<!----------------------------------- Affichage zone ecran 2 --------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
            <td colspan="8" rowspan="3" class="affichage" id="defAffiche">

            <div class="zone2">
                <?php include ('views/definitionView.php')?>
                
                
            </div>
            <i>Source: https://fr.wikipedia.org/</i>
            </td>
<!---------------------------------------------------------------------------------------------------------------->
            <td colspan="5" class="affichage ZoneLigne8 zoneLigne2">

                <div class="GroupeLegendeCouleur2">
                    <div class="LegendeCouleur2 NonClasse"><div><h4>Elément non classée </h4></div><div class="CouleurNonClasse top2"></div></div>
                    <div class="NonClasse defZone2"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta dolor dolore doloremque dolores et eum illo impedit ipsum.</p></div>

                    <div class="LegendeCouleur2 Alcalins"><div><h4>Les métaux Alcalins</h4></div><div class="CouleurAlcalins top2"></div></div>
                    <div class="Alcalins defZone2"><span>Tous les éléments de cette colonne possèdent une couche externe avec un électron. Ils forment tous des cations en perdant un électron.</span></div>

                    <div class="LegendeCouleur2 AlcalinoTerreux"><div><h4>Les métaux Alcalino terreux</h4></div><div class="CouleurAlcalinoTerreux top2"></div></div>
                    <div class="AlcalinoTerreux defZone2"><span>Ils forment tous des cations en perdant deux électrons( Be2+, Mg2+, Ca2+ etc ). Ils possèdent un éclat caractéristique argenté.</span></div>

                    <div class="LegendeCouleur2 GroupLanthanides"><div><h4>La famille des Lanthanides</h4></div><div class="CouleurLanthanides top2"></div></div>
                    <div class="GroupLanthanides defZone2"><span>Il s’agit de métaux brillants qui ternissent rapidement à l’air libre.</span></div>

                    <div class="LegendeCouleur2 GroupActinides"><div><h4>La famille des Actinides</h4></div><div class="CouleurActinides top2"></div></div>
                    <div class="GroupActinides defZone2"><span>Les actinides sont tous radioactifs. Ce sont des métaux mous aux reflets argentés.</span></div>

                    <div class="LegendeCouleur2 Métauxdetransition"><div><h4>La famille des métaux de transition</h4></div><div class="CouleurMétauxdetransition top2"></div></div>
                    <div class="Métauxdetransition defZone2"><span>Ce sont des éléments qui possèdent une grande variété de couleurs. Ce sont tous des métaux conduisant l’électricité.</span></div>

                    <div class="LegendeCouleur2 MétauxPauvres"><div><h4>Les métaux pauvres</h4></div><div class="CouleurMétauxPauvres top2"></div></div>
                    <div class="MétauxPauvres defZone2"><span>Ce sont des métaux mous ou fragiles. Ils ont tendance à former des liaisons covalentes et possèdent un caractère amphotère acide basique.</span></div>

                    <div class="LegendeCouleur2 Métalloides"><div><h4>La famille des métalloïdes</h4></div><div class="CouleurMétalloides top2"></div></div>
                    <div class="Métalloides defZone2"><span>Ils possèdent des caractéristiques particulières. Ils ressemblent à des métaux, ils sont fragiles et ne conduisent pas l’électricité.</span></div>

                    <div class="LegendeCouleur2 NonMétaux"><div><h4>La famille des non-métaux </h4></div><div class="CouleurNonMétaux top2"></div></div>
                    <div class="NonMétaux defZone2"><span>Il s’agit d’éléments se trouvant être de très bon isolants thermiques et électriques.Ils représentent la presque totalité de la constitution des être vivants</span></div>

                    <div class="LegendeCouleur2 Halogènes"><div><h4>Les halogènes</h4></div><div class="CouleurHalogènes top2"></div></div>
                    <div class="Halogènes defZone2"><span>Cette partie comprend le fluor,  le chlore, le brome, l’iode et l’astate.</span></div>

                    <div class="LegendeCouleur2 GazNobles"><div><h4>La famille des Gaz nobles (gaz rares)</h4></div><div class="CouleurGazNobles top2"></div></div>
                    <div class="GazNobles defZone2"><span>Ils possèdent tous une couche externe complète ce qui les rend très peu réactifs: ils ne forment pas d’ion et ne participent à aucune molécule.</span></div>
                </div>




            </td>
<!---------------------------------------------------------------------------------------------------------------->
            <td class="gazNobles rot">
               <a href="https://fr.wikipedia.org/wiki/Hélium" target="_blank">

                    <p class="2">
                        <?php
                        $post = lecture(2);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>".
                            "<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>

        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!----------------------------------------- LIGNE 2 ----------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th>2</th>
            <td class="metauxAlcalin rot">
              <a href="https://fr.wikipedia.org/wiki/Lithium" target="_blank">
                    <p class="3">
                        <?php
                        $post = lecture(3);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>".
                        "<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
               </a>
            </td>
            <td class="metauxAlcalinoTerreux rot">
                <a href="https://fr.wikipedia.org/wiki/Béryllium" target="_blank">
                    <p class="4">
                        <?php
                        $post = lecture(4);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>".
                            "<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metalloides rot">
                <a href="https://fr.wikipedia.org/wiki/Bore" target="_blank">
                    <p class="5">
                        <?php
                        $post = lecture(5);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="NonMetaux rot">
                <a href="https://fr.wikipedia.org/wiki/Carbone" target="_blank">
                    <p class="6">
                        <?php
                        $post = lecture(6);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="NonMetaux rot">
                <a href="https://fr.wikipedia.org/wiki/Azote" target="_blank">
                    <p class="7">
                        <?php
                        $post = lecture(7);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="NonMetaux rot">
                <a href="https://fr.wikipedia.org/wiki/Oxyg%C3%A8ne" target="_blank">
                    <p class="8">
                        <?php
                        $post = lecture(8);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="halogene rot">
                <a href="https://fr.wikipedia.org/wiki/Fluor" target="_blank">
                    <p class="9">
                        <?php
                        $post = lecture(9);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="gazNobles rot">
                <a href="https://fr.wikipedia.org/wiki/N%C3%A9on" target="_blank">
                    <p class="10">
                        <?php
                        $post = lecture(10);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------ LIGNE 3 ---------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th>3</th>
            <td class="metauxAlcalin rot">
                <a href="https://fr.wikipedia.org/wiki/Sodium" target="_blank">
                    <p class="11">
                        <?php
                        $post = lecture(11);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxAlcalinoTerreux rot">
                <a href="https://fr.wikipedia.org/wiki/Magn%C3%A9sium" target="_blank">
                    <p class="12">
                        <?php
                        $post = lecture(12);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
<!------------------------------------------------------------------------------------------------------------->
<!----------------------------------- Affichage zone ecran 3--------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
            <td colspan="2" class="affichage Zone3">
                <div class="groupeEtat">
                    <div><h4 class="EtatSolide">Etat solide</h4></div>
                    <div><h4 class="EtatLiquide">Etat liquide</h4></div>
                    <div><h4 class="EtatGazeux">Etat gazeux</h4></div>
                    <div><h4 class="Inconnu">Inconnu</h4></div>
                </div>
            </td>

<!--------------------------------------------------------------------------------------------------------------------->
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Aluminium" target="_blank">
                    <p class="13">
                        <?php
                        $post = lecture(13);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metalloides rot">
                <a href="https://fr.wikipedia.org/wiki/Silicium" target="_blank">
                    <p class="14">
                        <?php
                        $post = lecture(14);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="NonMetaux rot">
                <a href="https://fr.wikipedia.org/wiki/Phosphore" target="_blank">
                    <p class="15">
                        <?php
                        $post = lecture(15);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="NonMetaux rot">
                <a href="https://fr.wikipedia.org/wiki/Soufre" target="_blank">
                    <p class="16">
                        <?php
                        $post = lecture(16);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="halogene rot">
                <a href="https://fr.wikipedia.org/wiki/Chlore" target="_blank">
                    <p class="17">
                        <?php
                        $post = lecture(17);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="gazNobles rot">
                <a href="https://fr.wikipedia.org/wiki/Argon" target="_blank">
                    <p class="18">
                        <?php
                        $post = lecture(18);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!---------------------------------------------- LIGNE 4 ------------------------------------------------------>
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th>4</th>
            <td class="metauxAlcalin rot">
                <a href="https://fr.wikipedia.org/wiki/Potassium" target="_blank">
                    <p class="19">
                        <?php
                        $post = lecture(19);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxAlcalinoTerreux rot">
                <a href="https://fr.wikipedia.org/wiki/Calcium" target="_blank">
                    <p class="20">
                        <?php
                        $post = lecture(20);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Scandium" target="_blank">
                    <p class="21">
                        <?php
                        $post = lecture(21);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Titane" target="_blank">
                    <p class="22">
                        <?php
                        $post = lecture(22);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Vanadium" target="_blank">
                    <p class="23">
                        <?php
                        $post = lecture(23);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Chrome" target="_blank">
                    <p class="24">
                        <?php
                        $post = lecture(24);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Mangan%C3%A8se" target="_blank">
                    <p class="25">
                        <?php
                        $post = lecture(25);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Fer" target="_blank">
                    <p class="26">
                        <?php
                        $post = lecture(26);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Cobalt" target="_blank">
                    <p class="27">
                        <?php
                        $post = lecture(27);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Nickel" target="_blank">
                    <p class="28">
                        <?php
                        $post = lecture(28);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Cuivre" target="_blank">
                    <p class="29">
                        <?php
                        $post = lecture(29);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Zinc" target="_blank">
                    <p class="30">
                        <?php
                        $post = lecture(30);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Gallium" target="_blank">
                    <p class="31">
                        <?php
                        $post = lecture(31);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metalloides rot">
                <a href="https://fr.wikipedia.org/wiki/Germanium" target="_blank">
                    <p class="32">
                        <?php
                        $post = lecture(32);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metalloides rot">
                <a href="https://fr.wikipedia.org/wiki/Arsenic" target="_blank">
                    <p class="33">
                        <?php
                        $post = lecture(33);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="NonMetaux rot">
                <a href="https://fr.wikipedia.org/wiki/S%C3%A9l%C3%A9nium" target="_blank">
                    <p class="34">
                        <?php
                        $post = lecture(34);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="halogene rot">
                <a href="https://fr.wikipedia.org/wiki/Brome" target="_blank">
                    <p class="35">
                        <?php
                        $post = lecture(35);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="gazNobles rot">
                <a href="https://fr.wikipedia.org/wiki/Krypton" target="_blank">
                    <p class="36">
                        <?php
                        $post = lecture(36);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------- LIGNE 5 --------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th>5</th>
            <td class="metauxAlcalin rot">
                <a href="https://fr.wikipedia.org/wiki/Rubidium" target="_blank">
                    <p class="37">
                        <?php
                        $post = lecture(37);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxAlcalinoTerreux rot">
                <a href="https://fr.wikipedia.org/wiki/Strontium" target="_blank">
                    <p class="38">
                        <?php
                        $post = lecture(38);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Yttrium" target="_blank">
                    <p class="39">
                        <?php
                        $post = lecture(39);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Zirconium" target="_blank">
                    <p class="40">
                        <?php
                        $post = lecture(40);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Niobium" target="_blank">
                    <p class="41">
                        <?php
                        $post = lecture(41);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Molybd%C3%A8ne" target="_blank">
                    <p class="42">
                        <?php
                        $post = lecture(42);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Techn%C3%A9tium" target="_blank">
                    <p class="43">
                        <?php
                        $post = lecture(43);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Ruth%C3%A9nium" target="_blank">
                    <p class="44">
                        <?php
                        $post = lecture(44);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Rhodium" target="_blank">
                    <p class="45">
                        <?php
                        $post = lecture(45);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Palladium" target="_blank">
                    <p class="46">
                        <?php
                        $post = lecture(46);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Argent" target="_blank">
                    <p class="47">
                        <?php
                        $post = lecture(47);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Cadmium" target="_blank">
                    <p class="48">
                        <?php
                        $post = lecture(48);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Indium" target="_blank">
                    <p class="49">
                        <?php
                        $post = lecture(49);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/%C3%89tain" target="_blank">
                    <p class="50">
                        <?php
                        $post = lecture(50);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metalloides rot">
                <a href="https://fr.wikipedia.org/wiki/Antimoine" target="_blank">
                    <p class="51">
                        <?php
                        $post = lecture(51);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="metalloides rot">
                <a href="https://fr.wikipedia.org/wiki/Tellure" target="_blank">
                    <p class="52">
                        <?php
                        $post = lecture(52);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="halogene rot">
                <a href="https://fr.wikipedia.org/wiki/Iode" target="_blank">
                    <p class="53">
                        <?php
                        $post = lecture(53);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
            <td class="gazNobles rot">
                <a href="https://fr.wikipedia.org/wiki/X%C3%A9non" target="_blank">
                    <p class="54">
                        <?php
                        $post = lecture(54);
                        echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                        ?>
                    </p>
                </a>
            </td>
        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------- LIGNE 6 -------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th>6</th>
            <td class="metauxAlcalin rot">
                <a href="https://fr.wikipedia.org/wiki/C%C3%A9sium" target="_blank">
                    <p class="55">
                    <?php
                    $post = lecture(55);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxAlcalinoTerreux rot">
                <a href="https://fr.wikipedia.org/wiki/Baryum" target="_blank">
                    <p class="56">
                    <?php
                    $post = lecture(56);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td v-once class="Lanthanides">
                <span class="nom">Lanthanides</span><br>
                <span class='numero'>57 - 71</span>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Hafnium" target="_blank">
                    <p class="72">
                    <?php
                    $post = lecture(72);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Tantale_(chimie)" target="_blank">
                    <p class="73">
                    <?php
                    $post = lecture(73);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Tungstène" target="_blank">
                    <p class="74">
                    <?php
                    $post = lecture(74);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Rh%C3%A9nium" target="_blank">
                    <p class="75">
                    <?php
                    $post = lecture(75);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Osmium" target="_blank">
                    <p class="76">
                    <?php
                    $post = lecture(76);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Iridium" target="_blank">
                    <p class="77">
                    <?php
                    $post = lecture(77);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Platine" target="_blank">
                    <p class="78">
                    <?php
                    $post = lecture(78);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Or" target="_blank">
                    <p class="79">
                    <?php
                    $post = lecture(79);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Mercure_(chimie)" target="_blank">
                    <p class="80">
                    <?php
                    $post = lecture(80);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Thallium" target="_blank">
                    <p class="81">
                    <?php
                    $post = lecture(81);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Plomb" target="_blank">
                    <p class="82">
                    <?php
                    $post = lecture(82);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Bismuth" target="_blank">
                    <p class="83">
                    <?php
                    $post = lecture(83);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Polonium" target="_blank">
                    <p class="84">
                    <?php
                    $post = lecture(84);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metalloides rot">
                <a href="https://fr.wikipedia.org/wiki/Astate" target="_blank">
                    <p class="85">
                    <?php
                    $post = lecture(85);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="gazNobles rot">
                <a href="https://fr.wikipedia.org/wiki/Radon" target="_blank">
                    <p class="86">
                    <?php
                    $post = lecture(86);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------- LIGNE 7 --------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th>7</th>
            <td class="metauxAlcalin rot">
                <a href="https://fr.wikipedia.org/wiki/Francium" target="_blank">
                    <p class="87">
                    <?php
                    $post = lecture(87);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxAlcalinoTerreux rot">
                <a href="https://fr.wikipedia.org/wiki/Radium" target="_blank">
                    <p class="88">
                    <?php
                    $post = lecture(88);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides">
                <span class="nom">Actinides</span><br>
                <span class='numero'>89 - 103</span>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Rutherfordium" target="_blank">
                    <p class="104">
                    <?php
                    $post = lecture(104);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Dubnium" target="_blank">
                    <p class="105">
                    <?php
                    $post = lecture(105);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Seaborgium" target="_blank">
                    <p class="106">
                    <?php
                    $post = lecture(106);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Bohrium" target="_blank">
                    <p class="107">
                    <?php
                    $post = lecture(107);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="metauxTransition rot">
                <a href="https://fr.wikipedia.org/wiki/Hassium" target="_blank">
                    <p class="108">
                    <?php
                    $post = lecture(108);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Meitn%C3%A9rium" target="_blank">
                    <p class="109">
                    <?php
                    $post = lecture(109);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Darmstadtium" target="_blank">
                    <p class="110">
                    <?php
                    $post = lecture(110);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Roentgenium" target="_blank">
                    <p class="111">
                    <?php
                    $post = lecture(111);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="PostTransitionMetals rot">
                <a href="https://fr.wikipedia.org/wiki/Copernicium" target="_blank">
                    <p class="112">
                    <?php
                    $post = lecture(112);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Nihonium" target="_blank">
                    <p class="113">
                    <?php
                    $post = lecture(113);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Fl%C3%A9rovium" target="_blank">
                    <p class="114">
                    <?php
                    $post = lecture(114);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Moscovium" target="_blank">
                    <p class="115">
                    <?php
                    $post = lecture(115);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Livermorium" target="_blank">
                    <p class="116">
                    <?php
                    $post = lecture(116);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                </p>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Tennesse" target="_blank">
                    <p class="117">
                    <?php
                    $post = lecture(117);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="nonDéterminé rot">
                <a href="https://fr.wikipedia.org/wiki/Oganesson" target="_blank">
                    <p class="118">
                    <?php
                    $post = lecture(118);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------ LIGNE 8 ---------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th></th>
            <td colspan="3" rowspan="2" class="affichage ZoneLigne8">
                <div class="GroupeLegendeCouleur1">
                    <h4 class="titreGroupeMetaux1">Les familles d'éléments </h4>
                        <div class="LegendeCouleur"><div><h4>Non classée </h4></div><div class="CouleurNonClasse top"></div></div>
                    <div class="GroupeMetaux">
                        <h4 class="titreGroupeMetaux">Métaux</h4>
                        <div class="LegendeCouleur"><div><h4>Alcalins</h4></div><div class="CouleurAlcalins top"></div></div>
                        <div class="LegendeCouleur"><div><h4>Alcalino-terreux</h4></div><div class="CouleurAlcalinoTerreux top"></div></div>
                        <div class="LegendeCouleur"><div><h4>Lanthanides</h4></div><div class="CouleurLanthanides top"></div></div>
                        <div class="LegendeCouleur"><div><h4>Actinides</h4></div><div class="CouleurActinides "></div></div>
                        <div class="LegendeCouleur"><div><h4>Métaux de transition</h4></div><div class="CouleurMétauxdetransition top"></div></div>
                        <div class="LegendeCouleur"><div><h4>Métaux pauvres</h4></div><div class="CouleurMétauxPauvres top"></div></div>
                    </div>
                        <div class="LegendeCouleur"><div><h4>Métalloides</h4></div><div class="CouleurMétalloides top"></div></div>
                    <div class="GroupeNonMetaux">
                        <h4 class="titreGroupeMetaux">Non Métaux</h4>
                        <div class="LegendeCouleur"><div><h4>Non-métaux</h4></div><div class="CouleurNonMétaux top"></div></div>
                        <div class="LegendeCouleur"><div><h4>Halogènes</h4></div><div class="CouleurHalogènes top"></div></div>
                        <div class="LegendeCouleur"><div><h4>Gaz nobles</h4></div><div class="CouleurGazNobles top"></div></div>
                    </div>
                </div>
            </td>


            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Lanthane" target="_blank">
                    <p class="57">
                    <?php
                    $post = lecture(57);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/C%C3%A9rium" target="_blank">
                    <p class="58">
                    <?php
                    $post = lecture(58);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Pras%C3%A9odyme" target="_blank">
                    <p class="59">
                    <?php
                    $post = lecture(59);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/N%C3%A9odyme" target="_blank">
                    <p class="60">
                    <?php
                    $post = lecture(60);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Prom%C3%A9thium" target="_blank">
                    <p class="61">
                    <?php
                    $post = lecture(61);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Samarium" target="_blank">
                    <p class="62">
                    <?php
                    $post = lecture(62);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Europium" target="_blank">
                    <p class="63">
                    <?php
                    $post = lecture(63);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Gadolinium" target="_blank">
                    <p class="64">
                    <?php
                    $post = lecture(64);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Terbium" target="_blank">
                    <p class="65">
                    <?php
                    $post = lecture(65);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Dysprosium" target="_blank">
                    <p class="66">
                    <?php
                    $post = lecture(66);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Holmium" target="_blank">
                    <p class="67">
                    <?php
                    $post = lecture(67);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Erbium" target="_blank">
                    <p class="68">
                    <?php
                    $post = lecture(68);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Thulium" target="_blank">
                    <p class="69">
                    <?php
                    $post = lecture(69);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Ytterbium" target="_blank">
                    <p class="70">
                    <?php
                    $post = lecture(70);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Lanthanides rot">
                <a href="https://fr.wikipedia.org/wiki/Lut%C3%A9cium" target="_blank">
                    <p class="71">
                    <?php
                    $post = lecture(71);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
        </tr>
        <!------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------- LIGNE 9 --------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------->
        <tr>
            <th></th>


            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Actinium" target="_blank">
                    <p class="89">
                    <?php
                    $post = lecture(89);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Thorium" target="_blank">
                    <p class="90">
                    <?php
                    $post = lecture(90);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Protactinium" target="_blank">
                    <p class="91">
                    <?php
                    $post = lecture(91);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Uranium" target="_blank">
                    <p class="92">
                    <?php
                    $post = lecture(92);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Neptunium" target="_blank">
                    <p class="93">
                    <?php
                    $post = lecture(93);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Plutonium" target="_blank">
                    <p class="94">
                    <?php
                    $post = lecture(94);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Am%C3%A9ricium" target="_blank">
                    <p class="95">
                    <?php
                    $post = lecture(95);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Curium" target="_blank">
                    <p class="96">
                    <?php
                    $post = lecture(96);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Berk%C3%A9lium" target="_blank">
                    <p class="97">
                    <?php
                    $post = lecture(97);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Californium" target="_blank">
                    <p class="98">
                    <?php
                    $post = lecture(98);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Einsteinium" target="_blank">
                    <p class="99">
                    <?php
                    $post = lecture(99);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Fermium" target="_blank">
                    <p class="100">
                    <?php
                    $post = lecture(100);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Mend%C3%A9l%C3%A9vium" target="_blank">
                    <p class="101">
                    <?php
                    $post = lecture(101);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Nob%C3%A9lium" target="_blank">
                    <p class="102">
                    <?php
                    $post = lecture(102);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
            <td class="Actinides rot">
                <a href="https://fr.wikipedia.org/wiki/Lawrencium" target="_blank">
                    <p class="103">
                    <?php
                    $post = lecture(103);
                    echo "<span class='nom'>".$post['nom']."</span>"."<br>"."<span class='numero'>".$post['numero']."</span>"."<br>"."<span class='symbole'>".$post['symbole']."</span>"."<br>"."<span class='massAtom'>".$post['masse_atomique']."</span>";
                    ?>
                    </p>
                </a>
            </td>
        </tr>
    </table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script type="text/javascript" src="public/js/script.js"></script>


</body>
</html>
