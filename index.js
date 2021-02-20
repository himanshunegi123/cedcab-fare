function carTyped() {
  let selected = document.getElementById("carType").value;
  if (selected == "CedMicro") {
    document.getElementById("luggage").value = "";
    document.getElementById("luggage").disabled = true;
    document.getElementById("luggage").placeholder =
      "Luggage is not allowed for current car.";
  } else {
    document.getElementById("luggage").value = "";
    document.getElementById("luggage").disabled = false;
    document.getElementById("luggage").placeholder = "Enter Luggage in KG.";
  }
}