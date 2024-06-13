const WEBURL="http://localhost:8888";

const tBody=document.getElementById("tBody");
const inputType=document.getElementById("inputType");
const inputEtat=document.getElementById("inputEtat");
const inputDate=document.getElementById("inputDate");
let comptes=[];

document.addEventListener("DOMContentLoaded",async(event)=>{
    let datas = await findAllCompte();
    comptes = [...datas];

    init()

})

async function findAllCompte(){
    let response = await fetch(`${WEBURL}/?ressource=api&controller=compte`);    //fetch fct async
    let datas = await response.json();
    return datas;
}


inputType.addEventListener("input",function(){
    let Valtype = inputType.value;
    let filteredType= filterCompteByType(Valtype);
    tBody.innerHTML=generateTBody(filteredType);

})

inputEtat.addEventListener("input",function(){
    let etat = inputEtat.value;
    let filteredEtat= filterCompteByEtat(etat);
    tBody.innerHTML=generateTBody(filteredEtat);

})

inputDate.addEventListener("input",function(){
alert(inputDate.value);

})


function init() {
    //ajout des tr sur le tbody du tableau
    tBody.innerHTML = generateTBody(comptes)
}

//fonction qui permet de generer des tr
function generateTr(compte) {

    return `
    <tr>
        <td class="col">${compte.numero}</td>
        <td class="col">${compte.dateCrea}</td>
        <td class="col">${compte.prenom}</td>
        <td class="col">${compte.nom}</td>
        <td class="col">${compte.adresse}</td>
        <td class="col">${compte.solde}</td>
        <td class="col">${compte.libtc}</td>
        <td class="col">${compte.taux}</td>
        <td class="col">${compte.frais}</td>
        <td class="col">${compte.etat}</td>
    </tr> 
    `
} 

//fonction qui permet de generer tbody
function generateTBody(allcompte) {
    html = ""
    for (const compte of allcompte) {
        html += generateTr(compte)
    }
    return html;
}

//fonction qui permet de filter les demande par type
function filterCompteByType(type) {
    if (type !== "All") {
        return comptes.filter(u => u.libtc.toUpperCase().includes(type.toUpperCase()));
    }
    return comptes;
}

//fonction qui permet de filter les demande par statut
function filterCompteByEtat(etat) {
    if (etat !== "All") {
        return comptes.filter(u => u.etat.toUpperCase().startsWith(etat.toUpperCase()));
    }
    return comptes;
}
