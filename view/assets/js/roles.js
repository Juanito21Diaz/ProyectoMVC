function create(){
    let data = `txtRol=${document.getElementById("txtNombre").value}`;
    
    let option={
        method: "post",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    };
    
    let url = "../controller/roles.create.php"


    fetch(url,option)
    .then((response)=> response.json())
    .then((data)=>{
        console.log(data);
    });
}
function read(){}
function update(){}
function deletes(){}
