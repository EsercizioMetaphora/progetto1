if('serviceWorker' in navigator){
    navigator.serviceWorker.register('/sw.js')
    .then(function(reg){
        console.log("service worker registered: "+reg.scope);
    })
    .catch(function(error){
        console.log(error);
    });
}

var deferredPrompt;
window.addEventListener("beforeinstallprompt", function(event){
    event.preventDefault();
    console.log("intercettato evento installazione");
    deferredPrompt = event;
    return false;
});

var btn = document.querySelectorAll(".btn-primary");
for (var i = 0; i<btn.length; i++){
    btn[i].addEventListener("click", function(event){
        event.preventDefault();
        if(deferredPrompt){
            deferredPrompt.prompt();
            deferredPrompt.userChoice.then(function(choiceResult){
                if(choiceResult.outcome === "dismissed"){
                    console.log("nope");
                }
                else{
                    console.log("FUCKYEAH");
                }
                window.location.href= event.target.getAttribute("href");
            });
            deferredPrompt = null;
        } else {
            window.location.href= event.target.getAttribute("href");
        }
    });
}

var customerbtn=document.getElementById("customer-btn");
var login_container=document.getElementById("login_container");
var cancel_button=document.getElementById("cancel-btn");
/*console.log(customerbtn, login_container, cancel_button)*/

customerbtn.addEventListener("click",function(event){
/*    console.log("ho cliccato sul customerbtn");*/
    login_container.classList.add("login-form-show");
});


cancel_button.addEventListener("click",function(event){
    login_container.classList.remove("login-form-show");
});
