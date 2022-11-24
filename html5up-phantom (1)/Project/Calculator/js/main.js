function ageCalculator() {  
    var dateSaisie = document.getElementById("dt").value;  
    var dt = new Date(dateSaisie);  
    if(dateSaisie==null || dateSaisie=='') { 
		/* si aucune date n’est saisie affichage du message qui demande de le faire.*/
      document.getElementById("message").innerHTML = "**Choisissez une date s'il vous plaît!";    
      return false;   
    } else {  
      
    //calculer la différence entre la date actuelle et la date saisie.  
    var ma_diff = Date.now() - dt.getTime();  
      
    //calculer la différence entre la date actuelle et la date saisie. 
    var age_dt = new Date(ma_diff);  
      
    //extract year from date      
    var an = age_dt.getUTCFullYear();  
      
    //calculer maintenant l'âge de l'utilisateur 
    var age = Math.abs(an - 1970);  
      
    //afficher l'âge calculé 
    return document.getElementById("result").innerHTML =    
             "L’âge est: " + age + " ans. ";  
    }  
}  