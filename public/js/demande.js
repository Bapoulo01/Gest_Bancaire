const WEBURL="http://localhost:8888";
const inputTel=document.querySelector("#inputTel")
const tBody=document.getElementById("tBody");
const inputType=document.getElementById("inputType");
const inputStatut=document.getElementById("inputStatut");
const pagination = document.getElementById("pagination");
let demandes=[];

document.addEventListener("DOMContentLoaded",async(event)=>{
    let datas = await findAllDemandeWithClient();
    demandes = [...datas];

    init()

})

function init() {
    //ajout des tr sur le tbody du tableau
    tBody.innerHTML = generateTBody(demandes)
}

inputTel.addEventListener("input",function(){
    let  tel= inputTel.value;
    let filteredDemande = filterDemandeByTel(tel);
    tBody.innerHTML=generateTBody(filteredDemande);
    // console.log(filteredDemande);

})

inputType.addEventListener("input",function(){
    let Valtype = inputType.value;
    let filteredType= filterDemandeByType(Valtype);
    tBody.innerHTML=generateTBody(filteredType);

})

inputStatut.addEventListener("input",function(){
    let statut = inputStatut.value;
    let filteredStatut= filterDemandeByStatut(statut);
    tBody.innerHTML=generateTBody(filteredStatut);

})



async function findAllDemandeWithClient(){
    let response = await fetch(`${WEBURL}/?ressource=api&controller=demande`);    //fetch fct async
    let datas = await response.json();
    return datas;
}



//fonction qui permet de generer des tr
function generateTr(demande) {

    return `
    <tr onmouseover="btnview(this)">
        <td class="col">
            <input class="" type="checkbox" name="" data-id="${demande.idd}"  onclick="taskDone(this)">
        </td>
        <td class="col">${demande.dated}</td>
        <td class="col">${demande.prenom+ " " +demande.nom}</td>
        <td class="col">${demande.telephone}</td>
        <td class="col">${demande.email}</td>
        <td class="col">${demande.libtc}</td>
        <td class="col">${demande.statut}</</td>
        <td><button type="button" class="btn btn-primary" hidden>Envoyer</button></td>
    </tr>
    `
} 

//fonction qui permet de generer tbody
function generateTBody(alldemande) {
    html = ""
    for (const demande of alldemande) {
        html += generateTr(demande)
    }
    return html;
}

//fonction qui permet de filter les demande par Tel
function filterDemandeByTel(saisi){
    if (saisi!="") {
        return demandes.filter(function (u) {
        return u.telephone.toUpperCase().startsWith(saisi) == true  //startswith tri par orde de l'input
    })
    }
    return []
}

//fonction qui permet de filter les demande par type
function filterDemandeByType(type) {
    if (type !== "All") {
        return demandes.filter(u => u.libtc.toUpperCase().includes(type.toUpperCase()));
    }
    return demandes;
}

//fonction qui permet de filter les demande par statut
function filterDemandeByStatut(statut) {
    if (statut !== "All") {
        return demandes.filter(u => u.statut.toUpperCase().includes(statut.toUpperCase()));
    }
    return demandes;
}



function btnview(tr){
 tr.lastElementChild.document.querySelector('button').hidden=false
    console.log(tr.lastElementChild);
}