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

  if (
    dropdown &&
    !dropdown.contains(event.target) &&
    event.target !== inputField
  ) {
    dropdown.style.display = "none";
  }
});

const form = document.getElementById("contactForm");
const result = document.getElementById("result");

if (form) {
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);
    const object = Object.fromEntries(formData);
    const json = JSON.stringify(object);

    result.innerHTML = "Please wait...";

    fetch("https://api.web3forms.com/submit", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
      body: json,
    })
      .then(async (response) => {
        let json = await response.json();
        if (response.status == 200) {
          result.innerHTML = json.message;
          result.classList.remove("hidden");
          result.classList.remove("error");
          result.classList.add("show");
          result.classList.add("success");
        } else {
          result.innerHTML = json.message;
          result.classList.remove("show");
          result.classList.remove("success");
          result.classList.add("hidden");
          result.classList.add("error");
        }
      })
      .catch((error) => {
        result.innerHTML = "Something went wrong!";
      })
      .then(function () {
        form.reset();
        setTimeout(() => {
          result.style.display = "none";
        }, 5000);
      });
  });
}
