function verif()
{ if(document.f.nom.value == "")
 { alert("Veuillez taper votre nom et pr�nom!");
  return false; };
if(document.f.cin.value == "") 
{ alert("Veuillez taper votre CIN!");
 return false; };
var v = 1;
var taille =document.f.cin.value.length;
for(i=0;i<taille;++i){ 
    if(document.f.cin.value.charAt(i) < "0" || document.f.cin.value.charAt(i) > "9" || taille!=8) v = -1;}
if(v == -1) { 
    alert("Le num�ro de votre MATRICULE est incorrect!"); 
return false; }
if(document.f.email.value == "") { 
    alert("Veuillez entrer votre adresse e-mail!"); 
    return false; }
if(document.f.email.value.indexOf('@') == -1) { 
    alert("Adresse e-mail incorrecte!"); return false; }
taille=document.f.list.options.length;
var n=0;
for(i=0;i<taille;i++)
{if (document.f.list[i].selected){n+=1};}
if (n==0) { 
    alert("Veuillez choisir un module de formation!"); 
    return false;}
if (n>2) { 
    alert("Veuillez s�lectionner au maximum 2 choix!");
    return false;}
}