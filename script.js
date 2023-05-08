var modal = document.getElementById("simpleModal");
//Get open modal button
var modalBtn = document.getElementById("modalBtn");
//Get close button
var span = document.getElementsByClassName("closeBtn")[0];

// When the user clicks on the button, open the modal
modalBtn.onclick = function () {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

document.getElementById("fill-text").addEventListener("keyup", function () {
  var Input = document.getElementById('id="fill-text"').value;
  if (Input == "") {
    document.getElementById("button-fill").removeAttribute("disabled");
  } else {
    document.getElementById("button-fill").setAttribute("disabled", null);
  }
});
