function login(){
    let url = "../controller/login.php";
    fetch(url)
    .then((response) => response.json())
    .then((data)=> {
        console.log(data);
    });
}