

function like(id){
$.get("/hellowordsource/Social-Site/exstra/like.php",{id:id});
oldLikes = document.getElementById("likes" + id).innerHTML;
newLikes = parseInt(oldLikes) + 1;
document.getElementById("likes"+ id).innerHTML = newLikes;
document.getElementById("likebutton" + id).style.display = "none";
document.getElementById("unlikebutton" + id).style.display = "inline-block";
var x = document.getElementById("myAudio" + id);
x.play();
return false;
}

function unlike( id){
$.get("/hellowordsource/Social-Site/exstra/unlike.php",{id:id});
oldLikes = document.getElementById("likes" + id).innerHTML;
newLikes = parseInt(oldLikes) - 1;
document.getElementById("likes"+ id).innerHTML = newLikes;
document.getElementById("likebutton" + id).style.display = "inline-block";
document.getElementById("unlikebutton" + id).style.display = "none";
var x = document.getElementById("myAudio" + id);
x.play();
return false;
}