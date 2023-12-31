function inscrire(){
    num=document.getElementById("num").value;
    nom=document.getElementById("nom").value;
    prenom=document.getElementById("prenom").value;
    file=document.getElementById("file").checked;
    garcon=document.getElementById("garcon").checked;
    ns=document.getElementById("ns").selectedIndex;
    if(!(chiffre(num))){
        alert ("verifier une cjhine de 4 chiffres")
    }
    if ((!(lettre(nom)))||(!(lettre(prenom)))){
        alert ("nom et prenom doient etre compse ")

    }
    if(file==false ||garcon==false){
        alert ("le choix du genre est obligatoire")
    }
    if(ns==0){
        alert("le choix du niveau scolaire est obligatoire")
    }


}
function chiffre(ch){
    if(ch.length!=4){
        test=false;
    }else{
        i=0;
        test=true;
        while(i<ch.length && test==true){
            if(ch.charAt(i)<"0"||ch.charAt(i)>"9"){
                test=false;
            }
            i++;
        }
        return (test);
    }
}
function lettre(ch){
    ch=ch.toUpperCase();
    i=0;
    test=true;
    while(i<ch.length && test==true){
        if(ch.charAt(i)<"a"||ch.charAt(i)>"z"){
            test=false;
        }
        i++;
    }
    return (test);


}
function voter(){
    e=document.getElementById("e").value;
    as=document.getElementById("as").checked;
    tm=document.getElementById("tm").checked;
    bak=document.getElementById("bak").checked;
    db=document.getElementById("db").checked;
    if(!(chiffre(e))){
        alert ("le champ 'electeur N°' est une chaine de 4 chiffres")
    }
    if (as==false|| tm==false && bak==false|| db==false){
        alert ("le choix genre fille  ou gracon est obligations ")
    }
}