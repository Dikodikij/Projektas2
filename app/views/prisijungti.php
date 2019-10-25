<?php
session_start();
?>
<ul class="menu">
        <li><a href="index.php">Apie</a></li>
        <li><a href="saldumynai2.php">Saldumynai</a></li>
        <li><a href="receptai2.php">Receptai</a></li>
        <li><a class="active" href="prisijungti2.php">Prisijungti</a></li>
        <li><a href="kontaktai2.php">Kontaktai</a></li>
</ul>
<article class="tekstas">
        <div class="login-forma">
            
            <table action="includes/logout.inc.php" method="post">
                <tr>
                    <th class="eilute">Naujas vartotojas</th>
                    <th class="eilute">Prisijungti</th>
                </tr>
                <tr> 
                    <td class="eilute">Vardas Pavardė:</td>
                    <td>Slapyvardis:</td>
                </tr>
                <tr>
                    <td><input class="inputas" type="text" placeholder="Vardas Pavardė"></td>
                    <td><input class="inputas" type="text" placeholder="slapyvardis"></td>
                </tr>
                <tr>
                <td>Jūsų El. paštas:</td>
                    <td>Slaptažodis</td>
                </tr>
                <tr>
                    <td><input class="inputas" type="mail" name="lastname" placeholder="El. paštas"></td>
                    <td><input class="inputas" type="password" placeholder="slaptažodis"></td>
                </tr>
                <tr>
                    <td name="uid">Slapyvardis</td>
                    <td></td>
                </tr>
                <tr>
                <td><input class="inputas" name="uid" type="text" placeholder="slapyvardis"></td>
                    <td><button class="button-siusti" type="submit" name="submit">Prisijungti</button></td>
                </tr>
                <tr>
                    <td>Slaptažodis</td>
                    <td></td>
                </tr>
                <tr>
                <td><input class="inputas" name="pwd" type="password" placeholder="slaptažodis"></td>
                    <td></td>
                </tr>
                <tr>
                    <td><button class="button-siusti" name="submit" type="submit">Pradėti</button></td>
                    <td></td>
                </tr>
            </table>
    </div>  
    
</article>
   