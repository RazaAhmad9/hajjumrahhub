<div class="up-form">
<form
        id="contactForm"
        class="contact-form"
        action="https://api.web3forms.com/submit"
        method="POST"
      >
        <input
          type="hidden"
          name="access_key"
          value="ab0c9348-af56-418a-b741-fd2748149933"
        />
        <input
          type="hidden"
          name="subject"
          value="New Contact Form Submission from Al Mutamir Travels"
        />
        <input type="hidden" name="from_name" value="Al Mutamir Travels" />
        <input type="hidden" name="redirect" value="http://hajjumrahhub.test/?page=thankyou">
        <!-- More custom ization options available in the docs: https://docs.web3forms.com -->
        <div class="up-form__group">
          <div class="up-form__wraper">
              <img class="up-form__img" src="../images/from.png" width="21" height="15" alt="departure-airport" />
              <label for="departure-airport">Departure Airport</label>
          </div>
          <select id="departure-airport" name="departure_airport" required>
            <option value=""></option>
            <option value="Aberdeen (ABZ)">Aberdeen (ABZ)</option>
            <option value="Amsterdam (AMS)">Amsterdam (AMS)</option>
            <option value="Belfast Intl (BFS)">Belfast Intl (BFS)</option>
            <option value="Birmingham (BHX)">Birmingham (BHX)</option>
            <option value="Bristol (BRS)">Bristol (BRS)</option>
            <option value="Cardiff (CWL)">Cardiff (CWL)</option>
            <option value="Dublin (DUB)">Dublin (DUB)</option>
            <option value="Eindhoven (EIN)">Eindhoven (EIN)</option>
            <option value="Glasgow (GLA)">Glasgow (GLA)</option>
            <option value="London (LON)">London (LON)</option>
            <option value="London Gatwick (LGW)">London Gatwick (LGW)</option>
            <option value="London Heathrow (LHR)">London Heathrow (LHR)</option>
            <option value="Manchester (MAN)">Manchester (MAN)</option>
            <option value="Newcastle (NCL)">Newcastle (NCL)</option>
            <option value="Rotterdam The Hague (RTM)">
              Rotterdam The Hague (RTM)
            </option>
          </select>
        </div>
        <div class="up-form__group">
        <div class="up-form__wraper">
            <img class="up-form__img" src="../images/to.png" width="26" height="21" alt="arrival-airport" />
              <label for="arrival-airport">Arrival Airport</label>
        </div>
          <select id="arrival-airport" name="arrival_airport" required>
            <option value=""></option>
            <option value="Jeddah">Jeddah</option>
            <option value="Dammam">Dammam</option>
            <!-- other options -->
          </select>
        </div>
        <div class="up-form__group">
        <div class="up-form__wraper">
            <img class="up-form__img" src="../images/calender.png" width="21" height="21" alt="date" />
            <label for="date">Date:</label>
        </div>
          <input type="date" id="date" name="date" required />
        </div>
        <div class="up-form__group">
        <div class="up-form__wraper">
            <img class="up-form__img" src="../images/phone.png" width="22" height="18" alt="phone-number" />
              <label for="phone-number">Phone Number:</label>
        </div>
          <input type="text" id="phone-number" name="phone_number" required />
        </div>
        <div class="up-form__group">
        <div class="up-form__wraper">
            <img class="up-form__img" src="../images/email.png" width="22" height="16" alt="email" />
              <label for="email">Email:</label>

        </div>
          <input type="email" id="email" name="email" />
        </div>

        <div class="up-form__group">
        <div class="up-form__wraper">
          <img class="up-form__img" src="../images/moon.png" width="17" height="19" alt="nights" />
          <label for="mak-nights">Nights:</label>
        </div>
        <select id="mak-nights" name="mak_nights" required>
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

        <div class="up-form__group">
        <div class="up-form__wraper">
        <img class="up-form__img" src="../images/moon.png" width="17" height="19" alt="nights" />
        <label for="med-nights">Nights:</label>
        </div>
        <select id="med-nights" name="med_nights" required>
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

        <div class="up-form__group">
        <div class="up-form__wraper">
            <img class="up-form__img" src="../images/rooms.png" width="22" height="16" alt="rooms" />
            <label for="rooms">Rooms:</label>
        </div>
          <select id="rooms" name="rooms" required>
            <option value=""></option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
          </select>
        </div>
        <div class="guest-dropdown up-form__group">
        <div class="up-form__wraper">
          <img class="up-form__img" src="../images/travellers.png" width="21" height="20" alt="travellers" />
          <label for="guestInput">Travellers:</label>
        </div>
          <input
            type="text"
            id="guestInput"
            placeholder="Select Guests"
            readonly
            onclick="toggleDropdown()"
          />
          <div class="dropdown-content" id="guestDropdown">
            <div class="up-form-item">
            <div class="up-form__wraper">
                <label for="adults">Adults:</label>
            </div>
              <div class="up-form-item__inner">
                <button type="button" onclick="updateGuests('adults', -1)">
                  −
                </button>
                <input type="text" name="adults" id="adults" value="0" readonly />
                <button type="button" onclick="updateGuests('adults', 1)">
                  +
                </button>
              </div>
            </div>
            <div class="up-form-item">
            <div class="up-form__wraper">
                <label for="children">Children:</label>
            </div>
              <div class="up-form-item__inner">
                <button type="button" onclick="updateGuests('children', -1)">
                  −
                </button>
                <input type="text" name="children" id="children" value="0" readonly />
                <button type="button" onclick="updateGuests('children', 1)">
                  +
                </button>
              </div>
            </div>
            <div class="up-form-item">
            <div class="up-form__wraper">
                <label for="infants">Infants:</label>
            </div>
              <div class="up-form-item__inner">
                <button type="button" onclick="updateGuests('infants', -1)">
                  −
                </button>
                <input type="text" id="infants" name="infants" value="0" readonly />
                <button type="button" onclick="updateGuests('infants', 1)">
                  +
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="up-form__group up-form__footer">
        <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
          <button type="submit" class="primary-button">Submit</button>
        </div>
      </form>
      <div id="result"></div>
    </div>