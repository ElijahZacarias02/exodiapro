

<form class="my-form">
      <div class="container-contact">
        <h2 class="h2 section-title">
          <span class="span">Contact Us</span>
        </h2>

        <h1>Get in touch!</h1>
        <ul>
          <li>
            <select>
              <option selected disabled>-- Please choose an option --</option>
              <option>Request Quote</option>
              <option>Send Resume</option>
              <option>Other</option>
            </select>
          </li>
          <li>
            <div class="grid grid-2">
              <input type="text" placeholder="Name" required />
              <input type="text" placeholder="Surname" required />
            </div>
          </li>
          <li>
            <div class="grid grid-2">
              <input type="email" placeholder="Email" required />
              <input type="tel" placeholder="Phone" />
            </div>
          </li>
          <li>
            <textarea placeholder="Message"></textarea>
          </li>

          <li>
            <div class="grid grid-3">
              <div class="required-msg" style="opacity: 0">REQUIRED FIELDS</div>
              <button class="btn-grid" type="submit">
                <span class="front">SUBMIT</span>
              </button>
              <button class="btn-grid" type="reset">
                <span class="front">RESET</span>
              </button>
            </div>
          </li>
        </ul>
      </div>
    </form>
