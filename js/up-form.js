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

document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    let airportDeparture = document.getElementById("departure-airport").value;
    let arrivalAirport = document.getElementById("arrival-airport").value;
    let date = document.getElementById("date").value;
    let phoneNumber = document.getElementById("phone-number").value;
    let email = document.getElementById("email").value;
    let makNights = document.getElementById("mak-nights").value;
    let medNights = document.getElementById("med-nights").value;
    let rooms = document.getElementById("rooms").value;
    let adults = document.getElementById("adults").value;
    let children = document.getElementById("children").value;
    let infants = document.getElementById("infants").value;
    let answer = document.getElementById("answer").value;

    Email.send({
      SecureToken: "C973D7AD-F097-4B95-91F4-40ABC5567812",
      To: "raza.ataki@gmail.com",
      From: email,
      Subject: "New Contact Form Submission",
      Body: `<p><strong>Email:</strong> ${email}</p>
        <p><strong>Phone Number:</strong> ${phoneNumber}</p>
        <p><strong>Departure Airport:</strong> ${airportDeparture}</p>
        <p><strong>Arrival Airport:</strong> ${arrivalAirport}</p>
        <p><strong>Date:</strong> ${date}</p>
        <p><strong>Makkah Nights:</strong> ${makNights}</p>
        <p><strong>Medinah Nights:</strong> ${medNights}</p>
        <p><strong>Rooms:</strong> ${rooms}</p>
        <p><strong>Adults:</strong> 3</p>
        <p><strong>Children:</strong> 2</p>
        <p><strong>Infants:</strong> 1</p>
        <p><strong>Additional Info:</strong> ${answer}</p>`,
    }).then((response) => {
      if (response === "OK") {
        alert("Email sent successfully!");
        document.getElementById("contactForm").reset();
      } else {
        alert("Error sending email: " + response);
      }
    });
  });
