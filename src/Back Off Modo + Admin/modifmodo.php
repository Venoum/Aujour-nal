<!doctype html>
<html class="no-js" lang="fr">  
<head>  
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Back Off Modérateur Aujour'nal" />
    <title>Back Office Modérateur - Home</title>
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="icon" type="image/png" href="css/img/favicon.png" />
</head> 
    
<body>
    
    <div class="banmodif1">
        <div class="titlemodif">Ajouter l'article dans : 
            
            <select class="choixcatmodif" name="choixcatmodif">
                <option value="1">LifeStyle</option>
                <option value="2">Evenements</option>
                <option value="3">Culture</option>
            </select></div>
        
    <div class="banmodif2">
        
        <div class="titlemodif">Phrase de description :  <input class="inputmodif" type="text" name="phdescri"></input> </div>: 
        </div>
    
    </div>
    
    
<?php include("menumodif.php"); ?>   

<div class="containermodif">
    
    <div class="usertitle">Ludovic Bouvinet <img class="tofprofilmodif" src="css/img/tofprofilmodif.png"></img> Rédacteur en Chef </div>
   
    <div class="zonemodif">
        
        <input class="chapo" type="text" name="chapo" placeholder="Commencez à écrire ici votre chapeau"></input><br>
        <input class="impoimage" type="text" name="impoimage" placeholder="Importer votre image ici "></input><br>
        <textarea class="writetext" name="textarea" rows="15" cols="120"  placeholder="Commencez à écrire ici votre texte" ></textarea>

        <button class="buttonvalid" name="buttonvalid">Valider</button>
        <button class="buttonsoum" name="buttonsoum">Soumetttre modifications</button>
        <button class="buttonsupp" name="buttonsupp">Supprimer</button>
        
    
    </div>

</div>

    
    
</body>
    
</html>    