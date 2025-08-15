var database=[
    {
        username: "person",
        password: "1234"
    }
];

function details(){
    var params = new URLSearchParams(window.location.search);

    console.log("First Name:", params.get('firstName'));
    console.log("Last Name:", params.get('lastName'));
    console.log("Email:", params.get('email'));
    console.log("Reason for contact:", params.get('reason'));
    var service = params.getAll('service');
    console.log("Service:",service.join(","));
    console.log("Job offering:", params.get('job'));

}

function signIn(user,pass){
    if(user === database[0].username && pass === database[0].password){
        details();
    }
    else{
        alert("Incorrect username and password");
    }
}

var userNamePrompt = prompt("Enter username:");
var passwordPrompt = prompt("Enter password:");

signIn(userNamePrompt,passwordPrompt);