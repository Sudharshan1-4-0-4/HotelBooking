
let icon = document.getElementById("likeIcon");
let btn = document.getElementById("likeButton");

let form = document.getElementById("myForm");
function onClickLikeButton() {
   
        
        btn.style.backgroundColor = "#f19116";
        icon.style.color = "#f19116";
        btn.style.color = "#ffffff";
        icon.classList.remove("d-none");
    
}


let twitter = document.getElementById("twitter");
let facebook = document.getElementById("facebook");
let insta = document.getElementById("insta");

twitter.addEventListener("mouseover", function(){
        twitter.classList.toggle("icon");
        

        
});
facebook.addEventListener("mouseover", function(){
        facebook.classList.toggle("icon");
        

        
});
insta.addEventListener("mouseover", function(){
        insta.classList.toggle("icon");
        

        
});

let add = document.getElementById("add");

add.addEventListener("mouseover", function(){
        add.classList.toggle("text");
        
});


