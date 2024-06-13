const WEBURL="http://localhost:8888";
const inputTel=document.querySelector("#inputTel")
let client=[];

document.addEventListener("DOMContentLoaded",async(event)=>{
    let datas = await  findAllClient();
    client = [...datas];
    inputTel.addEventListener("input",function(){
        console.log(client);
    })
})



async function findAllClient(){
    let response = await fetch(`${WEBURL}/?ressource=api&controller=client`);    //fetch fct async
    let datas = await response.json();
    return datas;
}