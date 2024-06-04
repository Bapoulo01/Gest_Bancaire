const WEBURL="http://localhost:8888";
const inputTel=document.querySelector("#inputTel")
let demande=[];

document.addEventListener("DOMContentLoaded",async(event)=>{
    let datas = await findAllDemandeWithClient();
    demande = [...datas];
    inputTel.addEventListener("input",function(){
        console.log(demande);
    })
})



async function findAllDemandeWithClient(){
    let response = await fetch(`${WEBURL}/?ressource=api&controller=demande`);    //fetch fct async
    let datas = await response.json();
    return datas;
}