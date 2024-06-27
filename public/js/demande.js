const WEBURL="http://localhost:8888";
const inputTel=document.querySelector("#inputTel")
const tBody=document.getElementById("tBody");
const inputType=document.getElementById("inputType");
const inputStatut=document.getElementById("inputStatut");
const paginationDemande = document.getElementById("paginationDemande");
const nombreElementPage=1;
let demandes=[];

document.addEventListener("DOMContentLoaded",async(event)=>{
    let datas = await findAllDemandeWithClient();
    demandes = [...datas];

    init();
    generatePagination(getDatasPaginate(demandes,1,nombreElementPage));

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

//fonction pour la pagination
function getDatasPaginate(demandes,start,nombreElementPage){
    let firstPosition=(start-1)*nombreElementPage
    let lastPosition=firstPosition+nombreElementPage
    return {
        datas:demandes.slice(firstPosition,lastPosition),
        pages:Math.ceil(demandes.length/nombreElementPage)
        
    }
}

//fonction pour generer pagination
function generatePagination(datasPaginate){  
    let {datas,pages}=datasPaginate
    let paginateHtml = ""
    for (let i = 1; i <= pages; i++) {
        paginateHtml += `<li class="page-item  ${i==1?'active':''}">
        <a class="page-link" href="#" data-pagenumber="${i}">${i}</a></li>`
    }
    paginationDemande.innerHTML=paginateHtml
    tBody.innerHTML = generateTBody(datas);
    const itemsLi=paginationDemande.querySelectorAll(".page-item") 
    itemsLi.forEach((item)=>{
        item.addEventListener("click",(e)=>{ 
        let{datas}=getDatasPaginate(demandes,parseInt(item.firstElementChild.dataset.pagenumber),nombreElementPage);
        console.log(item.firstElementChild.dataset.pagenumber);
        tBody.innerHTML = generateTBody(datas);
    })

})

}
// function btnview(tr){
//  tr.lastElementChild.document.querySelector('button').hidden=false
//     console.log(tr.lastElementChild);
// }