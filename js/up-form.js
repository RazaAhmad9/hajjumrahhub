function toggleDropdown() {
  let dropdown = document.getElementById("guestDropdown");
  dropdown.style.display =
    dropdown.style.display === "block" ? "none" : "block";
}

function updateGuests(type, change) {
  let adults = parseInt(document.getElementById("adults").value);
  let children = parseInt(document.getElementById("children").value);
  let infants = parseInt(document.getElementById("infants").value);

  let totalGuests = adults + children + infants;

  let input = document.getElementById(type);
  let currentValue = parseInt(input.value);

  // Ensure total guests do not exceed 9
  if (change > 0 && totalGuests >= 9) {
    alert("Total guests cannot exceed 9!");
    return;
  }

  if (currentValue + change >= 0) {
    input.value = currentValue + change;
    updateGuestInput();
  }
}

function updateGuestInput() {
  let adults = document.getElementById("adults").value;
  let children = document.getElementById("children").value;
  let infants = document.getElementById("infants").value;

  document.getElementById(
    "guestInput"
  ).value = `${adults} Adults, ${children} Children, ${infants} Infants`;
}

// Close dropdown when clicking outside
document.addEventListener("click", function (event) {
  let dropdown = document.getElementById("guestDropdown");
  let inputField = document.getElementById("guestInput");

  if (!dropdown.contains(event.target) && event.target !== inputField) {
    dropdown.style.display = "none";
  }
});
