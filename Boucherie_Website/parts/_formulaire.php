	<br>
	<img id="logo" src="img/boucherie_mariethoz_logo_vitrine2.png" alt="Boucherie Nendaz" /img>
	<br>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
	<script>

        jQuery(document).ready(function() {
            $(".more").hide();
            $(".button-read-more").on('click', function(){
        		if($(this).text() == 'Afficher'){
        			$(this).text('Masquer');
        			$(this).parent().next('div').fadeIn(1500);
        		}else{
        			$(this).text('Afficher');
        			$(this).parent().next('div').fadeOut(500);
        		}
        	});
        });
	</script>
	<hr>
	<h1> Formulaire de demande d'offre</h1>	
	<hr>
	<h2>Simple et facile</h2>

		<form method="post" action="envoi.php">
			<fieldset>
			<label>&ensp;Nom</label>
			<input type="text" name="nom" required="required" placeholder= "Votre nom"/>
			<br><br>
			<label>&ensp;Prénom</label>
			<input type="text" name="prenom"  required="required" placeholder= "Votre prénom"/>
			<br><br>
			<label>&ensp;Où peut-on vous joindre?</label>
			<input type="text" name="contact"  required="required" placeholder= "N° de tel. ou e-mail"/>
			<br><br>
			<label>&ensp;Quand aimeriez vous récupérer votre commande?</label>
			<input type="text" name="date" required="required" placeholder="Date pour la commande"/>
			
			<br><br>
			<label>&ensp;Et à quelle heure?</label>
			<input type="radio" name="heure" value="11h30" checked/>
			<label>11h30</label>
			<input type="radio" name="heure" value="17h30"/>
			<label>17h30</label>
			<br><br>
			<label>&ensp;Pour combien de personnes?</label>
			<input type="number" min="15" max="100" name="nombre" required="required"placeholder= "(minimum 15 pers.)"/>
			<br><br>
			</fieldset>
			<br>
			<br>
			
			<fieldset>
			
	
			<br>
			
	<table class ="formulaire">		
		<tr>
			<td colspan="2">
			<h3> <b>Les Viandes</b><h3>
			</td>
		</tr>
		<tr>
			<td>
				<h4>Les rôtis au grill&ensp;</h4>
				<div class="toggle">
					<div class="less">
						<a class="button-read-more button-read" href="#read">Afficher</a>
					</div>
					<div class="more">
						<label><b>Le porc</b></label><br>
							<input type="radio" name="porc" value=" Rôti Porc épaule"/>
							<label>Dans l'épaule&ensp;</label>
							<input type="radio" name="porc" value=" Rôti Porc cou"/>
							<label>Dans le cou&ensp;</label>
							<input type="radio" name="porc" value=" Rôti Porc filet"/>
							<label>Dans le filet&ensp;</label>
							<br><br>
						<label><b>Le veau</b></label><br>
							<input type="radio" name="veau" value=" Rôti Veau épaule"/>
							<label>Dans l'épaule&ensp;</label>
							<input type="radio" name="veau" value=" Rôti Veau cou"/>
							<label>Dans le cou&ensp;</label>
							<input type="radio" name="veau" value=" Rôti Veau filet"/>
							<label>Dans le filet&ensp;</label>
							<br><br>
						<label><b>Les autres rôtis</b></label><br>
							<input type="checkbox" name="poulet"value="Poulet Rôti"/>
							<label>Poulet rôti&ensp;</label>
							<input type="checkbox" name="dinde" value="Rôti de dinde"/>
							<label>Rôti de dinde&ensp;</label>
							<input type="checkbox" name="agneau" value="Gigot d'agneau"/>
							<label>Gigot d'agneau&ensp;</label>
							<input type="checkbox" name="cerf" value="Rôti de cerf"/>
							<label>Rôti de cerf&ensp;</label>
							<br><br>
					</div>
		
					
		
				</div>
			</td>
			<br>
			<td>
				<h4>&ensp;Les émincés et ragoûts</h4>
			<div class="toggle">
			<div class="less">
					<a class="button-read-more button-read" href="#read">Afficher</a>			
				</div>
			<div class="more">
				
				<label><b>Le porc</b></label><br>
					<input type="checkbox" name="emporc"  value="Emincé de porc"/>
					<label>Emincé de porc&ensp;</label>
					<input type="checkbox" name="ragporc"  value="Ragoût de porc"/>
					<label>Ragoût de porc&ensp;</label>
					<br><br>
				<label><b>Le veau</b></label><br>
					<input type="checkbox" name="emveau"  value="Emincé de veau"/>
					<label>Emincé de veau&ensp;</label>
					<input type="checkbox" name="ragveau"  value="Ragoût de veau"/>
					<label>Ragoût de veau&ensp;</label>
				<input type="checkbox" name="blanquette"  value=" Blanquette de veau"/>
					<label>Blanquette de veau&ensp;</label>
					<br><br>
				<label><b>La volaille</b></label><br>
					<input type="checkbox" name="emdinde"  value="Emincé de dinde"/>
					<label>Emincé de dinde&ensp;</label>
					<input type="checkbox" name="empoulet"  value="Emincé de poulet"/>
					<label>Emincé de poulet&ensp;</label>	
					<br><br>
				<label><b>Le boeuf</b></label><br>
					<input type="checkbox" name="ragboeuf"  value="Ragoût de boeuf"/>
					<label>Ragoût de boeuf&ensp;</label>
					<input type="checkbox" name="emboeuf"  value="Emincé de boeuf"/>
					<label>Emincé de boeuf&ensp;</label>
					<br><br>
				<label><b>La chasse</b></label><br>
					<input type="checkbox" name="civet"  value="Civet de cerf"/>
					<label>Civet de cerf&ensp;</label>
				</div>
    
			
		</div>				
		</td>
	</tr>
			
	<tr>
		<td colspan="3">
			<h3> <b>Les Garnitures</b><h3>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Les sauces</h4>
			<div class="toggle">
			<div class="less">
					<a class="button-read-more button-read" href="#read">Afficher</a>		
				</div>
			<div class="more">
				
			<label><b>Les champignons</b></label><br>
					<input type="radio" name="champignons" value="Sauce 3 champignons"/>
					<label>Sauce aux trois champignons&ensp;</label>
					<input type="radio" name="champignons" value="Sauce morilles"/>
					<label>Sauce aux morilles&ensp;</label>
					<input type="radio" name="champignons" value="Sauce aux bolets"/>
					<label>Sauce aux bolets&ensp;</label>
					<br><br>
			<label><b>Les currys</b></label><br>
				<input type="radio" name="currys" value="Sauce au curry jaune"/>
				<label>Sauce au curry jaune&ensp;</label>
				<input type="radio" name="currys" value="Sauce au curry rouge"/>
				<label>Sauce au curry rouge&ensp;</label>
				<input type="radio" name="currys" value="Sauce au curry vert"/>
				<label>Sauce au curry vert&ensp;</label>
				<br><br>
			<label><b>Les autres sauces</b></label><br>
				<input type="checkbox" name="madere" value="Sauce Madère"/>
				<label>Sauce au Madère&ensp;</label>
				<input type="checkbox" name="cognac" value="Sauce Cognac"/>
				<label>Sauce au Cognac&ensp;</label>
				<input type="checkbox" name="provencale" value="Sauce provrençale"/>
				<label>Sauce à la provençale&ensp;</label>
				<br><br>
				</div>
			
		</div>	
		</td>
		<td>
			
		
			<h4> Les classiques</h4>
			<div class="toggle">
			<div class="less">
					<a class="button-read-more button-read" href="#read">Afficher</a>			
				</div>
			<div class="more">
				
					<input type="checkbox" name="gratin"  value="gratin"/>
					<label>Le gratin de pommes de terre maison&ensp;</label>
					<input type="checkbox" name="riz"  value="riz"/>
					<label>Le riz&ensp;</label>
					<input type="checkbox" name="polenta"  value="polenta"/>
					<label>La polenta&ensp;</label>
					<input type="checkbox" name="patate"  value="pommes vapeur"/>
					<label>Les pommes vapeur&ensp;</label>
					<input type="checkbox" name="puree"  value="purée"/>
					<label>La purée de pommes de terre&ensp;</label>
					<input type="checkbox" name="patategrill"  value="pomme de terre grillées"/>
					<label>Les pommes de terre grillées&ensp;</label>
					<br><br>
					</div>
				
		</div>
		</td>
	</tr>
	<tr>
		<td>
			<br>
			
			<h4> Les légumes</h4>
			<div class="toggle">
			<div class="less">
					<a class="button-read-more button-read">Afficher</a>
				</div>
			<div class="more">
				
					<input type="checkbox" name="jardin" value="jardinière de légumes"/>
					<label>La jardinière de légumes&ensp;</label>
					<input type="checkbox" name="haricots" value="haricots"/>
					<label>Les haricots au beurre&ensp;</label>
					<input type="checkbox" name="tomates" value="tomates provençales"/>
					<label>Les tomates à la provençale&ensp;</label>
					<input type="checkbox" name="choux" value="choux rouges"/>
					<label>Les choux rouges&ensp;</label>
					<input type="checkbox" name="papet"     value="papet de poireaux"/>
					<label>Le papet de poireaux&ensp;</label>
					<br><br>
					</div>
			
		</div>	
		
		</td>
		<td>
			<br>		
			<h4>Les garnitures de chasse</h4>
			<div class="toggle">
			<div class="less">
				<a class="button-read-more button-read" href="#read">Afficher</a>
			
			</div>
			<div class="more">
			
					<input type="checkbox" name="marrons"    value="marrons caramélisés"/>
					<label> Les marrons caramélisés&ensp;</label>
					<input type="checkbox" name="pruneaux"    value="chutney de pruneaux"/>
					<label>Le chutney de pruneaux&ensp;</label>
					<input type="checkbox" name="myrtilles"    value="chutney de myrtilles"/>
					<label>Le chutney de myrtilles&ensp;</label>
					<br><br>
					</div>
				
		</div>	
		</td>
	</tr>
	<tr>
		<td colspan="3">
			
			<h3><b>Nos Autres Propositions</b></h3>
		</td>
	</tr>
	<tr>
		<td colspan="3">
		<h4>Sont également possible</h4>
			<div class="toggle">
			<div class="less">
					<a class="button-read-more button-read" href="#read">Afficher</a>
			</div>
			<div class="more">
				
					<input type="checkbox" name="soupe" value="soupe aux légumes"/>
					<label>La soupe aux légumes comme grand-mère&ensp;</label>
					<input type="checkbox" name="macaronis" value="macaronis montagnards"/>
					<label>Les macaronis montagnards&ensp;</label>
					<input type="checkbox" name="chourcroute" value="choucroute garnie"/>
					<label>La choucroute garnie&ensp;</label>
					<input type="checkbox" name="travers" value="travers au miel"/>
					<label>Les travers de porc au miel&ensp;</label>
					<input type="checkbox" name="lasagnes" value="lasagnes maison"/>
					<label>Les lasagnes maison&ensp;</label>
					<input type="checkbox" name="jambonos" value="jambon à l'os"/>
					<label>Le jambon à l'os&ensp;</label>
					<br><br>
					</div>
			
		</div>
		</td>
	</tr>
    
</table>			 

	
			</fieldset>
			<fieldset>
<table class ="formulaire">
	<tr>
		<td colspan="2">
			
			<h3><b>NOS BUFFETS</b></h3>
		</td>
	</tr>
	<tr>
		<td>
		
			<h4>Les plats Valaisans</h4>
				<div class="toggle">
				<div class="less">
							<a class="button-read-more button-read" href="#read">Afficher</a>
						</div>
					<div class="more">
						
					<input type="checkbox" name="viandesecigp"   value="viande séchée"/>
					<label> La viande séchée du Valais IGP&ensp;</label>
					<input type="checkbox" name="jamboncru"   value="jambon cru"/>
					<label>Le jambon cru du Valais IGP&ensp;</label>
					<input type="checkbox" name="lardsec"   value="lardsec"/>
					<label>Le lard sec du Valais IGP&ensp;</label>
					<input type="checkbox" name="saucissesec"   value="saucisses sèches"/>
					<label>Les saucisses sèches maison&ensp;</label>
					<input type="checkbox" name="coppa"   value="coppa maison"/>
					<label>La coppa maison&ensp;</label>
					<input type="checkbox" name="viandecheval"   value="viande séché de cheval"/>
					<label>La viande séchée de cheval maison&ensp;</label>
					<input type="checkbox" name="viandecerf"   value="viande séché de cerf"/>
					<label>La viande séchée de cerf maison&ensp;</label>
					<br><br>
					Il est possible d'ajouter une sorte de fromage à vos plats valaisans en sélectionnnant un des fromages dans la liste correspondante
					</div>
			
		</div>		
		</td>
<td>
		<h4>De la mer</h4>
				<div class="toggle">
				<div class="less">
						<a class="button-read-more button-read" href="#read">Afficher</a>
					</div>
					<div class="more">
					
					<input type="checkbox" name="saumon"  value="saumon fumé"/>
					<label>Le saumon fumé&ensp; </label>						
					<input type="checkbox" name="tartaresaumon"  value="tartare de saumon"/>
					<label>Le tartare de saumon&ensp; </label>
					<input type="checkbox" name="prawn"  value="cocktail de crevettes"/>
					<label>Le coktail de crevettes&ensp; </label>					
					<br><br>
					</div>
			
			</td>		
		
	</tr>
	<tr>
		<td>	
			<h4>Les plats de fromage du pays&ensp;</h4>
			
				<div class="toggle">
				<div class="less">
							<a class="button-read-more button-read" href="#read">Afficher</a>
						</div>
					<div class="more">
						
			
					<input type="checkbox" name="fromnendaz" value="raclette Nendaz"/>
					<label> Le raclette de la laiterie de Nendaz&ensp;</label>
					<input type="checkbox" name="frombrignon" value="raclette Brignon"/>
					<label>Le raclette de la laiterie de Brignon&ensp;</label>
					<input type="checkbox" name="fromfume" value="raclette fumé"/>
					<label> Le raclette fumé de Nendaz&ensp;</label>
					<input type="checkbox" name="tomme" value="tomme de nendaz"/>
					<label>La tomme de la laiterie de Nendaz&ensp;</label>
					<input type="checkbox" name="serac" value="sérac de Nendaz"/>
					<label>Le sérac de Nendaz&ensp;</label>
					<input type="checkbox" name="gruyere" value="gruyère"/>
					<label>Le gruyère d'alpage&ensp; </label>	
					<br><br>
					
					</div>
		
		</div>
		</td>
		<td>
		<h4>&ensp;Les plateaux de viande froide</h4>
				<div class="toggle">
				<div class="less">
							<a class="button-read-more button-read" href="#read">Afficher</a>
						</div>
					<div class="more">
						
					<input type="checkbox" name="roastbeef" value="roastbeef"/>
					<label> Le roastbeef maison&ensp;</label>
					<input type="checkbox" name="roastpork" value="rôti de porc"/>
					<label>Le rôti de porc&ensp;</label>
					<input type="checkbox" name="terrine" value="mélange de terrines"/>
					<label> La sélection de terrine maison&ensp;</label>
					<input type="checkbox" name="charcuterie" value="mélange charcuterie"/>
					<label>La sélection de charcuteries&ensp;</label>
					<input type="checkbox" name="pate" value="pâté en croute"/>
					<label>Le paté en croûte&ensp;</label>
					<input type="checkbox" name="tartareboeuf" value="tartare de boeuf"/>
					<label>Le tartare de boeuf&ensp; </label>						
					<br><br>
					</div>
			
		</div>
		</td>
		
		</tr>
		<tr>
			<td colspan="2">
			<label><b>Assortiment de grillades</b></label><br><br>
				<div class="toggle">
				<div class="less">
							<a class="button-read-more button-read" href="#read">Afficher</a>
						</div>
					<div class="more">
					<input type="checkbox" name="grillades"  value="Assortiment de tranches"/>
					<label>Assortiment de tranches&ensp; </label>		
					<input type="checkbox" name="brochettes"  value="Assortiment de brochettes"/>
					<label>Assortiment de brochettes&ensp; </label>						
					<input type="checkbox" name="saucissesgrill"  value="Assortiment de saucises grill"/>
					<label>Assortiment de saucisses&ensp; </label>
					<input type="checkbox" name="lardailours"  value="Lard à l'ail des ours"/>
					<label>Lard à l'ail des ours&ensp; </label>					
					<br><br>
					</div>
			
			</td>
		</tr>
</table>				
			</fieldset>
			<fieldset>
			<h3><b>Particularités</b></h3>
			<blockquote>
			Pour les personnes allergiques nous avons la possibilité de préparer en petite quantité une sauce spéciale ou séparer certains ingrédients, par exemple une portion de viande du reste...
			</blockquote>
			<label><b>Infos Allergies</b></label><br><br>
					<input type="checkbox" name="gluten" value="gluten"/>
					<label> Le gluten&ensp;</label>
					<input type="checkbox" name="lactose" value="lactoses"/>
					<label>Les lactoses&ensp;</label>
					<input type="checkbox" name="oeufs" value="oeufs"/>
					<label> Les oeufs&ensp;</label>
					<input type="checkbox" name="noix" value="fruits à coques"/>
					<label>Les fruits à coques(noix,arachides)&ensp;</label>
					<input type="checkbox" name="moutarde" value="moutarde"/>
					<label>La moutarde&ensp;</label>
					<input type="checkbox" name="celeri" value="céleri"/>  
					<label>Le céleri&ensp; </label>
					<input type="checkbox" name="crustaces" value="crustacés"/>
					<label>Les poissons et fruits de mer&ensp; </label>					
					<br><br>
				
				
			<label>Vos questions ou remarques ici</label>
			<br>
			<textarea name="remarques" type="text"></textarea>
			</fieldset>
			<fieldset>
			<input type="reset" value="Effacer"/>
			<input type="submit" value= "Envoyer"/>
			</fieldset>
		</form>	