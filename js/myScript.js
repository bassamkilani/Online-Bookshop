function createAcc() {
  document.getElementById('createAcc').insertAdjacentHTML('beforeend', "<input type='password' placeholder='Repeat Password' name='repsw' required/>");
}

// Get the modal
var modal = document.getElementById("addBook");

// When the user clicks anywhere outside of the modal, close it



// Get the modal
var login = document.getElementById("id01");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == login) {
    login.style.display = "none";
  }
};
