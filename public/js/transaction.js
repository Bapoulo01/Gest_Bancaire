const WEBURL="http://localhost:8888";
const inputTel=document.querySelector("#inputTel")
let transaction=[];

document.addEventListener("DOMContentLoaded",async(event)=>{
    let datas = await findAllTransaction();
    transaction = [...datas];
    inputTel.addEventListener("input",function(){
        console.log(transaction);
    })
})



async function findAllTransaction(){
    let response = await fetch(`${WEBURL}/?ressource=api&controller=transaction`);    //fetch fct async
    let datas = await response.json();
    return datas;
}