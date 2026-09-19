var Alert = new CustomAlert();

function CustomAlert() {
  this.render = function() {
    let popUpBox = document.getElementById('popUpBox');
    popUpBox.style.display = "block";

    document.getElementById('closeModal').innerHTML =
       '<img src="pregunta.png" alt="Pregunta" style="width:200px; margin:15px auto; display:block;">' +
       '<a href="index.php"><button type="button">¡Sí quiero!</button></a>' +
       '<button onclick="Alert.ok()">No</button>';
    

  }

  this.ok = function() {
    document.getElementById('popUpBox').style.display = "none";
    document.getElementById('popUpOverlay').style.display = "none";
  }
}
