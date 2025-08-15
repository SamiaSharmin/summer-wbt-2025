function input(){
    var input = prompt("Enter your reason for contact(Project, Thesis, Meet and greet):").toLowerCase();
    if(input === "project"){
        var projectName = prompt("Enter project name:");
        var language = prompt("Which language will be used in this project?");
        var service = prompt("Service(App development, Web design, SEO):").toLowerCase();
        if(service === "app development"){
            alert("You chose App development");
        }
        else if(service === "web design"){
            alert("You chose Web design");
        }
        else if(service === "seo"){
            alert("You chose SEO");
        }
        var offeringJob = prompt("Offering job(HR, CEO):");
        alert("Details:\nProject name:" + projectName + "\nLanguage:" + language + + "\nService:" + service + "\nOffering job:" + offeringJob);
        alert("Thank you. Your message is send. You will get a reply soon.");
    }
    else if(input === "Thesis"){
        var topicOfInterest = prompt("Enter topic of interest:");
        var researchArea = prompt("Enter Research area:");
        var service = prompt("Service(App development, Web design, SEO):").toLowerCase();
        if(service === "app development"){
            alert("You chose App development");
        }
        else if(service === "web design"){
            alert("You chose Web design");
        }
        else if(service === "seo"){
            alert("You chose SEO");
        }
        var offeringJob = prompt("Offering job:");
        alert("Details:\nTopic of interest:" + topicOfInterest + "\nResearch Area:" + researchArea + "\nService:" + service + "\nOffering job:" + offeringJob);
        alert("Thank you. Your message is send. You will get a reply soon.");
        
    }
    else if(input === "Meet and greet"){
        var service = prompt("Service(App development, Web design, SEO):").toLowerCase();
        if(service === "app development"){
            alert("You chose App development");
        }
        else if(service === "web design"){
            alert("You chose Web design");
        }
        else if(service === "seo"){
            alert("You chose SEO");
        }
        var offeringJob = prompt("Offering job:");
        alert("Details:\nService:" + service + "\nOffering job:" + offeringJob);
        alert("Thank you. Your message is send. You will get a reply soon."); 
    }
}

input();