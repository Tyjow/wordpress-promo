var liste1 = document.getElementsByClassName("descriptif_experience");
var liste2 = document.getElementsByClassName("descriptif_experience_2");

for (i = 0; i < liste1.length; i++) {
    liste1[i].id = "descript" + i;
    liste2[i].setAttribute("data-target", "#descript" + i);
}