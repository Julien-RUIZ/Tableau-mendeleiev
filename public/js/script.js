$(function(){

    $(".NonClasse").hide();
    $(".Alcalins").show();
    $(".AlcalinoTerreux").hide();
    $(".GroupLanthanides").hide();
    $(".GroupActinides").hide();
    $(".Métauxdetransition").hide();
    $(".MétauxPauvres").hide();
    $(".Métalloides").hide();
    $(".NonMétaux").hide();
    $(".Halogènes").hide();
    $(".GazNobles").hide();

    $(".titreEtat").hide();
    $(".titreChoixElement").hide();
    $(".titreMetauxOuNON").hide();


//--------------------Partie qui va permettre de definir le tableau en rapport avec la page definitionView.php-----------------------------------------------------
    var ArrayAtom = ["id","#Hydrogène","#Hélium","#Lithium","#Béryllium","#Bore","#Carbone","#Azote","#Oxygène","#Fluor","#Néon","#Sodium","#Magnésium","#Aluminium","#Silicium","#Phosphore","#Soufre","#Chlore","#Argon","#Potassium","#Calcium","#Scandium","#Titane","#Vanadium","#Chrome","#Manganèse","#Fer","#Cobalt","#Nickel","#Cuivre","#Zinc","#Gallium","#Germanium","#Arsenic","#Sélénium","#Brome","#Krypton","#Rubidium","#Strontium","#Yttrium","#Zirconium","#Niobium","#Molybdène","#Technétium","#Ruthénium","#Rhodium","#Palladium","#Argent","#Cadmium","#Indium","#Étain","#Antimoine","#Tellure","#Iode","#Xénon","#Césium","#Baryum","#Lanthane","#Cérium","#Praséodyme","#Néodyme","#Prométhium","#Samarium","#Europium","#Gadolinium","#Terbium","#Dysprosium","#Holmium","#Erbium","#Thulium","#Ytterbium","#Lutécium","#Hafnium","#Tantale","#Tungstène","#Rhénium","#Osmium","#Iridium","#Platine","#Or","#Mercure","#Thallium","#Plomb","#Bismuth","#Polonium","#Astate","#Radon","#Francium","#Radium","#Actinium","#Thorium","#Protactinium","#Uranium","#Neptunium","#Plutonium","#Américium","#Curium","#Berkélium","#Californium","#Einsteinium","#Fermium","#Mendélévium","#Nobélium","#Lawrencium","#Rutherfordium","#Dubnium","#Seaborgium","#Bohrium","#Hassium","#Meitnérium","#Darmstadtium","#Roentgenium","#Copernicium","#Nihonium","#Flérovium","#Moscovium","#Livermorium","#Tennessine","#Oganesson"];
    for (var i=1; i<=118; i++){
        $(ArrayAtom[i]).hide();
    }

    var ArrayNonClasse=[];
    var ArrayAlcalinoTerreux=[];
    var ArrayGroupLanthanides=[];
    var ArrayGroupActinides=[];
    var ArrayMétauxdetransition=[];
    var ArrayMétauxPauvres=[];
    var ArrayMétalloides=[];
    var ArrayNonMétaux=[];
    var ArrayHalogènes=[];
    var ArrayGazNobles=[];

    
    
    $("td p").mouseover(function(){
        $(".titreMetauxOuNON").hide();
        $(".titre").hide();
        $(".titreChoixElement").hide();
//----------------------------------------------------------------------------------------------------------------------------------
//-------------------Partie qui va selectionner les td en faire un copier/coller avec une modif de la taille --------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------
        $('.zone1').empty();
        var second = $(this).clone();
        second.prependTo('.zone1');
        $(".zone1").addClass("nom2");//on va ajouter la class "nom2" a la div

//--------------------Boucle en rapport au tableau ArrayAtom[], teste le numero de class sur le mouseover-------------------------------
        for (var i=1; i<=118; i++){
            if($(this).hasClass(i)) {
                console.log(i);
                $(ArrayAtom[i]).show();

                //-------------------------selon l'élément, affiche en rouge l'état de cette élément dans le bloc etat--------------------
                if (i==35 || i==80 ){
                    $(".EtatLiquide").css('color','red');
                    $(".EtatGazeux").css('color','black');
                    $(".Inconnu").css('color','black');
                    $(".EtatSolide").css('color','black');
                }else if (i==1 || i==2 || i==7 || i==8 || i==9 || i==10 || i==17 || i==18 || i==36 || i==54 || i==86  ){
                    $(".EtatGazeux").css('color','red');
                    $(".EtatLiquide").css('color','black');
                    $(".Inconnu").css('color','black');
                    $(".EtatSolide").css('color','black');
                }else if (i==104 || i==105 || i==106 || i==107 || i==108 || i==109 || i==110 || i==111 || i==112 || i==113 || i==114|| i==115|| i==116|| i==117|| i==118 ) {
                    $(".Inconnu").css('color','red');
                    $(".EtatLiquide").css('color','black');
                    $(".EtatGazeux").css('color','black');
                    $(".EtatSolide").css('color','black');
                }else{
                    $(".EtatSolide").css('color','red');
                    $(".Inconnu").css('color','black');
                    $(".EtatLiquide").css('color','black');
                    $(".EtatGazeux").css('color','black');
                }
            //-----------------------------------------------------------------------------------
            }else{
                $(ArrayAtom[i]).hide();
            }
        }
    })

//--------------------------------------------------------------------------------------------------------------------
//---------------------Partie lors de la sortie du td, avec remise a zero de la zone qui affiche -----------------------------------
//--------------------------------------------------------------------------------------------------------------------
    $("td p").mouseleave(function(){
        $('.zone1').empty();
    })
//---------------------Lorsque nous sortons de la tablea, disparitions des éléments de l'affichage2
//---------------------apparition du titre
    $(".tableau").mouseleave(function(){
        $(".titre").show();
        $(".titreChoixElement").hide();
        $(".titreEtat").hide();
        for (var i=1; i<=118; i++){
            $(ArrayAtom[i]).hide();
        }
        $(".Inconnu").css('color','black');
        $(".EtatLiquide").css('color','black');
        $(".EtatGazeux").css('color','black');
        $(".EtatSolide").css('color','black');
    })

//--------------------------------------------------------------------------------------------------------------------
//-------------------------Partie qui va gérer la section etat des éléments-------------------------------------------
//--------------------------------------------------------------------------------------------------------------------
    var tabLiquide=[".35",".80"];
    var tabGazeux=[".1",".2",".7",".8",".9",".10",".17",".18",".36",".54",".86"];
    var tabInconnu=[".104",".105",".106",".107",".108",".109",".110",".111",".112",".113",".114",".115",".116",".117",".118"];




    $("td h4").mouseover(function(){
        $(".titreMetauxOuNON").hide();
        $(".titreChoixElement").hide();
        $(".titreEtat").show();     //
        for (var i=1; i<=118; i++){ // fait disparaitre le titre de la zone d'affichage et le remplace par le titre Etat
            $(ArrayAtom[i]).hide(); //
        }

        if ($(this).hasClass('EtatLiquide')) {

                            $(".EtatSolide").css("color",'black');
                            $("td p").css("color","black");

            // Si la class est EtatLiquide, le texte en vert et les élément de couleurs
            $(this).css("color",'green');
            for (var j=0; j<=tabLiquide.length; j++){
                $(tabLiquide[j]).css("color",'white');
            }

                            $(".EtatGazeux").css("color",'black');
                            for (var k=0; k<=tabGazeux.length; k++){
                                $(tabGazeux[k]).css("color",'black');
                            }
                            $(".Inconnu").css("color",'black');
                            for (var k=0; k<=tabInconnu.length; k++){
                                $(tabInconnu[k]).css("color",'black');
                            }

        }else if ($(this).hasClass('EtatGazeux')){

                            $(".EtatSolide").css("color",'black');
                            $("td p").css("color","black");

            // Si la class est EtatGazeux, le texte en vert et les élément de couleurs
            $(this).css("color",'green');
            for (var k=0; k<=tabGazeux.length; k++){
                $(tabGazeux[k]).css("color",'white');
            }

                            $(".EtatLiquide").css("color",'black');
                            for (var j=0; j<=tabLiquide.length; j++){
                                $(tabLiquide[j]).css("color",'black');
                            }
                            $(".Inconnu").css("color",'black');
                            for (var k=0; k<=tabInconnu.length; k++){
                                $(tabInconnu[k]).css("color",'black');
                            }

        }else if ($(this).hasClass('Inconnu')){

                            $(".EtatSolide").css("color",'black');
                            $("td p").css("color","black");

            // Si la class est Inconnu, le texte en vert et les élément de couleurs
            $(this).css("color",'green');
            for (var k=0; k<=tabInconnu.length; k++){
                $(tabInconnu[k]).css("color",'white');
            }

                            $(".EtatLiquide").css("color",'black');
                            for (var j=0; j<=tabLiquide.length; j++){
                                $(tabLiquide[j]).css("color",'black');
                            }
                            $(".EtatGazeux").css("color",'black');
                            for (var k=0; k<=tabGazeux.length; k++){
                                $(tabGazeux[k]).css("color",'black');
                            }

        }else if ($(this).hasClass('EtatSolide')){

            // Si la class est EtatSolide, le texte en vert et les élément de couleurs
            $(this).css("color",'green');
            $("td p").css("color","white");

                            $(".EtatLiquide").css("color",'black');
                            for (var j=0; j<=tabLiquide.length; j++){
                                $(tabLiquide[j]).css("color",'black');
                            }
                            $(".EtatGazeux").css("color",'black');
                            for (var k=0; k<=tabGazeux.length; k++){
                                $(tabGazeux[k]).css("color",'black');
                            }
                            $(".Inconnu").css("color",'black');
                            for (var k=0; k<=tabInconnu.length; k++){
                                $(tabInconnu[k]).css("color",'black');
                            }
        }

    })
    $(".groupeEtat").mouseleave(function(){
        $(".EtatLiquide").css("color",'black'); //
        $(".EtatGazeux").css("color",'black');  //
        $(".Inconnu").css("color",'black');     // Remettre toutes les écritures de couleur noir en sortant du bloc des états
        $(".EtatSolide").css("color",'black');  //
        $("td p").css("color","black");         //
        $(".titreEtat").hide(); // Fait disparaitre le titre "Visualisation des éléments par état" en sortant du bloc des etats
    })

//--------------------------------------------------------------------------------------------------------------------
//-------------------------Partie pour éviter les bug d'affichage lors des mouseover et mouseleave-------------------------------------------
//--------------------------------------------------------------------------------------------------------------------
    //Par cette partie faire en sorte de créer un mouseover sur les zone d'affichage
    $(".affichage").mouseover(function(){
        $(".titreMetauxOuNON").hide();
        $(".titreChoixElement").show();
        $(".titre").hide();
        for (var i=1; i<=118; i++){
            $(ArrayAtom[i]).hide();
        }
    })
    //Partie affichage ligne8, disparition de tous les titre
    $(".ZoneLigne8").mouseover(function(){
        $(".titreMetauxOuNON").show();
        $(".titreChoixElement").hide();
        $(".titre").hide();
        $(".titreEtat").hide();
    })

//--------------------------------------------------------------------------------------------------------------------
//--------------------------Affichage de la zone ligne 2------------------------------------------
//--------------------------------------------------------------------------------------------------------------------
    var ArrayFamilyAffichage = [".NonClasse",".Alcalins",".AlcalinoTerreux",".GroupLanthanides",".GroupActinides",
        ".Métauxdetransition",".MétauxPauvres",".Métalloides",".NonMétaux",".Halogènes",".GazNobles"];
    var ArrayFamilyClass = [".nonDéterminé",".metauxAlcalin",".metauxAlcalinoTerreux",".Lanthanides",".Actinides",
        ".metauxTransition",".PostTransitionMetals",".metalloides",".NonMetaux",".halogene",".gazNobles"];


    var a=".NonClasse";
    var b=".Alcalins";
    var c=".AlcalinoTerreux";
    var d=".GroupLanthanides";
    var e=".GroupActinides";
    var f=".Métauxdetransition";
    var g=".MétauxPauvres";
    var h=".Métalloides";
    var i=".NonMétaux";
    var j=".Halogènes";
    var k=".GazNobles";

    function deleteFamily(a,b,c,d,e,f,g,h,i,j){
        $(a).hide();
        $(b).hide();
        $(c).hide();
        $(d).hide();
        $(e).hide();
        $(f).hide();
        $(g).hide();
        $(h).hide();
        $(i).hide();
        $(j).hide();
    }

    $("td").mouseover(function(){
        if ($(this).hasClass("nonDéterminé")){
            $(".NonClasse").show();
            deleteFamily(b,c,d,e,f,g,h,i,j,k);
        }else if($(this).hasClass("metauxAlcalin")){
            $(".Alcalins").show();
            deleteFamily(a,c,d,e,f,g,h,i,j,k);
        }else if($(this).hasClass("metauxAlcalinoTerreux")){
            $(".AlcalinoTerreux").show();
            deleteFamily(a,b,d,e,f,g,h,i,j,k);
        }else if($(this).hasClass("Lanthanides")){
            $(".GroupLanthanides").show();
            deleteFamily(a,b,c,e,f,g,h,i,j,k);
        }else if($(this).hasClass("Actinides")){
            $(".GroupActinides").show();
            deleteFamily(a,b,c,d,f,g,h,i,j,k);
        }else if($(this).hasClass("metauxTransition")){
            $(".Métauxdetransition").show();
            deleteFamily(a,b,c,d,e,g,h,i,j,k);
        }else if($(this).hasClass("PostTransitionMetals")){
            $(".MétauxPauvres").show();
            deleteFamily(a,b,c,d,e,f,h,i,j,k);
        }else if($(this).hasClass("metalloides")){
            $(".Métalloides").show();
            deleteFamily(a,b,c,d,e,f,g,i,j,k);
        }else if($(this).hasClass("NonMetaux")){
            $(".NonMétaux").show();
            deleteFamily(a,b,c,d,e,f,g,h,j,k);
        }else if($(this).hasClass("halogene")){
            $(".Halogènes").show();
            deleteFamily(a,b,c,d,e,f,g,h,i,k);
        }else if($(this).hasClass("gazNobles")){
            $(".GazNobles").show();
            deleteFamily(a,b,c,d,e,f,g,h,i,j);
        }
    })


//--------------------------------------------------------------------------------------------------------------------
//--------------------------Un click une rotation, voir la face deux de l'élément------------------------------------------
//--------------------------------------------------------------------------------------------------------------------

    var ArrayFamilyAffichage = [".NonClasse",".Alcalins",".AlcalinoTerreux",".GroupLanthanides",".GroupActinides",".Métauxdetransition",".MétauxPauvres",".Métalloides",".NonMétaux",".Halogènes",".GazNobles"];
    var ArrayFamilyClass = [".nonDéterminé",".metauxAlcalin",".metauxAlcalinoTerreux",".Lanthanides",".Actinides",".metauxTransition",".PostTransitionMetals",".metalloides",".NonMetaux",".halogene",".gazNobles"];

    $("td.rot").click(function(){
        $(this).css("transform", "rotateY(180deg)");
        $(this).css("border-width","1px 1px 3px 3px");
    })







});