<?php
include_once "connexion.php";
$requete = $bdd->query('SELECT * FROM modal');

//Solution create loop
echo '<table>
            <tr>
                <th>email</th>
                <th>password</th>';


while ($donnees = $requete->fetch()){
    //repot the data in the table.
    echo '<tr>
                <td>' .$donnees['email'].'</td>
                <td>' .$donnees['password'].'</td>
                </tr>';


} 
echo '</tr>
            </table>';



?>