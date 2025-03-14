<!-- Container Start Here -->
<div
  class="up-banner up-<?php echo htmlspecialchars($page, ENT_QUOTES, 'UTF-8'); ?>"
  id="up-<?php echo htmlspecialchars($page, ENT_QUOTES, 'UTF-8'); ?>"
>
  <div class="container">
    <h1 class="up-banner__heading">Umrah Packages</h1>
    <div class="up-form">
      <form action="#" method="post">
        <div class="up-form__group">
          <label for="departure-airport">Departure Airport</label>
          <select id="departure-airport" name="departure-airport" required>
            <option value=""></option>
            <option value="Aberdeen (ABZ)">Aberdeen (ABZ)</option>
            <option value="Amsterdam (AMS)">Amsterdam (AMS)</option>
            <!-- other options -->
          </select>
        </div>
        <div class="up-form__group">
          <label for="arrival-airport">Arrival Airport</label>
          <select id="arrival-airport" name="arrival-airport" required>
            <option value=""></option>
            <option value="Jeddah">Jeddah</option>
            <option value="Dammam">Dammam</option>
            <!-- other options -->
          </select>
        </div>
        <div class="up-form__group">
          <label for="date">Date:</label>
          <input type="date" id="date" name="date" required />
        </div>
        <div class="up-form__group">
          <label for="phone-number">Phone Number:</label>
          <input type="text" id="phone-number" name="phone-number" required />
        </div>
        <div class="up-form__group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" />
        </div>
        <div class="up-form__group up-form__group__items">
          <div class="up-form__group__inner">
            <label for="mak-nights">Nights:</label>
            <select id="mak-nights" name="mak-nights" required>
              <option value="">MAK</option>
              <option value="mak-1">MAK 1</option>
              <option value="mak-2">MAK 2</option>
              <option value="mak-3">MAK 3</option>
              <option value="mak-4">MAK 4</option>
              <option value="mak-5">MAK 5</option>
              <option value="mak-6">MAK 6</option>
              <option value="mak-7">MAK 7</option>
              <option value="mak-8">MAK 8</option>
              <option value="mak-9">MAK 9</option>
              <option value="mak-10">MAK 10</option>
            </select>
          </div>
          <div class="up-form__group__inner">
            <label for="med-nights">Nights:</label>
            <select id="med-nights" name="med-nights" required>
              <option value="">MED</option>
              <option value="med-1">MED 1</option>
              <option value="med-2">MED 2</option>
              <option value="med-3">MED 3</option>
              <option value="med-4">MED 4</option>
              <option value="med-5">MED 5</option>
              <option value="med-6">MED 6</option>
              <option value="med-7">MED 7</option>
              <option value="med-8">MED 8</option>
              <option value="med-9">MED 9</option>
              <option value="med-10">MED 10</option>
            </select>
          </div>
        </div>
        <div class="up-form__group">
          <label for="rooms">Rooms:</label>
          <select id="rooms" name="rooms" required>
            <option value=""></option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
          </select>
        </div>
        <div class="guest-dropdown up-form__group">
          <label for="guestInput">Travellers:</label>
          <input type="text" id="guestInput" placeholder="Select Guests" readonly onclick="toggleDropdown()" />
     <div class="dropdown-content" id="guestDropdown">
    <div class="up-form-item">
      <label for="adults">Adults:</label>
      <div class="up-form-item__inner">
        <button type="button" onclick="updateGuests('adults', -1)">−</button>
        <input type="text" id="adults" value="0" readonly />
        <button type="button" onclick="updateGuests('adults', 1)">+</button>
      </div>
    </div>
    <div class="up-form-item">
        <label for="children">Children:</label>
     <div class="up-form-item__inner">

         <button type="button" onclick="updateGuests('children', -1)">−</button>
         <input type="text" id="children" value="0" readonly />
         <button type="button" onclick="updateGuests('children', 1)">+</button>
         
     </div>
    </div>
    <div class="up-form-item">
        <label for="infants">Infants:</label>
      <div class="up-form-item__inner">

          <button type="button" onclick="updateGuests('infants', -1)">−</button>
          <input type="text" id="infants" value="0" readonly />
          <button type="button" onclick="updateGuests('infants', 1)">+</button>
        </div>

    </div>
  </div>
</div>
<div class="up-form__group">
          <label for="answer">Answer:</label>
          <input type="text" id="answer" name="answer" required />
        </div>
        <div class="up-form__group up-form__footer">
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Container Ends Here -->
