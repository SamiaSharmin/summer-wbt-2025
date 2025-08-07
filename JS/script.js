function input(){
    var input = prompt("Enter your reason for contact(Project, Thesis, Meet and greet):");
    if(input === "Project"){
        var projectName = prompt("Enter project name:");
        var language = prompt("Which language will be used in this project?");
        var description = prompt("Enter brief description:");
        var offeringJob = prompt("Offering job:");
        alert("Details:/n + project name:" + projectName + "/nlanguage:" + language + "/nBrief Description:" + description + "/nOffering job:" + offeringJob + "Thank you. Your message is send. You will get a reply soon.");
    }
    else if(input === "Thesis"){
        var topicOfInterest = prompt("Enter topic of interest:");
        var researchArea = prompt("Enter Research area:");
        var offeringJob = prompt("Offering job:");

        alert("Thank you. Your message is send. You will get a reply soon.");
        
    }
    else if(input === "Meet and greet"){
        alert("Thank you for choosing project");
        
    }
}