
for(x=0; x<2;x++) {
var general = 1;
var profil = 0;
var ajoutlog = 1;
var ajoutcap =0;
var actionner=0;
var photo=0;
var automatisation=1;
var allumer =1; 
}

    var oui1=document.getElementById("On1");
    var oui2=document.getElementById("On2");
    var oui3=document.getElementById("On3");
    var oui4=document.getElementById("On4");
    var oui5=document.getElementById("On5");
    var oui6=document.getElementById("On6");
    var oui7=document.getElementById("On7");
    var oui8=document.getElementById("On8");

    var non1=document.getElementById("Off1");
    var non2=document.getElementById("Off2");
    var non3=document.getElementById("Off3");
    var non4=document.getElementById("Off4");
    var non5=document.getElementById("Off5");
    var non6=document.getElementById("Off6");
    var non7=document.getElementById("Off7");
    var non8=document.getElementById("Off8");



function clic1(variable) {
variable = 0;
}

function clic2(variable) {
variable =1;
}


oui1.addEventListener("click", clic1(general));
oui2.addEventListener("click", clic1(profil));
oui3.addEventListener("click", clic1(ajoutlog));
oui4.addEventListener("click", clic1(ajoutcap));
oui5.addEventListener("click", clic1(actionner));
oui6.addEventListener("click", clic1(photo));
oui7.addEventListener("click", clic1(automatisation));
oui8.addEventListener("click", clic1(allumer));

non1.addEventListener("click", clic2(general));
non2.addEventListener("click", clic2(profil));
non3.addEventListener("click", clic2(ajoutlog));
non4.addEventListener("click", clic2(ajoutcap));
non5.addEventListener("click", clic2(actionner));
non6.addEventListener("click", clic2(photo));
non7.addEventListener("click", clic2(automatisation));
non8.addEventListener("click", clic2(allumer));



if ( ((profil==1)||(ajoutlog==1)||(ajoutcap==1)||(actionner==1)||(photo==1)||(automatisation==1)||(allumer==1)) && (general==0) ) {
	general=1;
}



if (general==0) {
	oui1.style.background="green";
    non1.style.background="grey";
	profil=0;
	ajoutlog=0;
	ajoutcap=0;
	actionner=0;
	photo=0;
	automatisation=0;
	allumer=0;
}
else {
	oui1.style.background="grey";
    non1.style.background="red";
}

if (profil==0) {
	oui2.style.background="green";
    non2.style.background="grey";
}
else {
	oui2.style.background="grey";
    non2.style.background="red";
}
if (ajoutlog==0) {
	oui3.style.background="green";
    non3.style.background="grey";
}
else {
	oui3.style.background="grey";
	non3.style.background="red";
}
if (ajoutcap==0) {
    oui4.style.background="green";
    non4.style.background="grey";
}
else {
	oui4.style.background="grey";
	non4.style.background="red";
}
if (actionner==0) {
    oui5.style.background="green";
    non5.style.background="grey";
}
else {
	oui5.style.background="grey";
	non5.style.background="red";
}
if (photo==0) {
    oui6.style.background="green";
    non6.style.background="grey";
}
else {
	oui6.style.background="grey";
	non6.style.background="red";
}
if (automatisation==0) {
    oui7.style.background="green";
    non7.style.background="grey";
}
else {
	oui7.style.background="grey";
	non7.style.background="red";
}
if (allumer==0) {
	oui8.style.background="green";
    non8.style.background="grey";
}
else {
	oui8.style.background="grey";
	non8.style.background="red";
}

