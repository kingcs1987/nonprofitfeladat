
 <script type="text/javascript" src="logicals/main.js"></script>

<h1>Kapcsolat</h1>
<h2>Amennyiben szeretné felvenni velünk a kapcsolatot kérem töltse ki az űrlapot és küldje el üzenetét</h2>
   <form action = "?oldal=uzenet" method = "post">
        <div>
		 <label><input type="text" id="felhasznalo" name="felhasznalo" size="20" maxlength="40">Felhasználó  </label>
		   <br/>
		  <label><input type="text" id="jelszo" name="jelszo" size="20" maxlength="40">jelszó  </label>
		    <br/>
            <label><input type="text" id="nev" name="nev" size="20" maxlength="40">Név  </label>
            <br/>
            <label><input type="text" id="email" name="email" size="30" maxlength="40">Az Ön E-mail címe </label>
            <br/>
            <label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> Üzenet  </label>
            <br/>
            <input id="kuld"  type="submit" value="E-mail elküldése">
			<button onclick="ellenoriz();" type="button">Ellenőrzés</button>
           
        </div>
    </form>
	<br><br><br><br><br><br><br><br>