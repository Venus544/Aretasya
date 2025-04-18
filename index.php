<?php include 'header.php'; ?>

  <div class="hero-image">
    <img src="images/vecteezy_graphics-image-drawing-yoga-female-with-sunrise-and-mountain_8071640.jpg" alt="Person practicing yoga at sunrise" />
  </div>

  <section id="about">
    <h2>About ARETASYA</h2>
    <p>ARETASYA is a holistic yoga space created to help you reconnect with your body, mind, and spirit. Our classes blend traditional yoga techniques with mindfulness and breathwork.</p>
  </section>

  <section id="classes">
    <h2>Our Classes</h2>
    <ul class="class-list">
      <li>
        <img src="https://images.unsplash.com/photo-1540206395-68808572332f?auto=format&fit=crop&w=200&q=80" alt="Hatha Yoga pose" />
        <strong>Hatha Yoga</strong> – For strength and flexibility
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=200&q=80" alt="Vinyasa Flow yoga" />
        <strong>Vinyasa Flow</strong> – Dynamic movement and breath
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=200&q=80" alt="Yin Yoga relaxation" />
        <strong>Yin Yoga</strong> – Deep relaxation and stillness
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=200&q=80" alt="Meditation and Pranayama" />
        <strong>Meditation & Pranayama</strong> – Breath control and inner calm
      </li>
    </ul>
  </section>

  <section id="schedule">
    <h2>Schedule</h2>
    <p>Join us every week!</p>
    <ul>
      <li>Mon, Wed, Fri – 6:30 AM & 6:00 PM</li>
      <li>Tue, Thu – Meditation Sessions at 7:00 PM</li>
      <li>Sat – Yin Yoga (Weekend Relax) at 9:00 AM</li>
    </ul>
  </section>

  <section id="cost-plan">
    <h2>Session Cost Plan</h2>
    <ul>
      <li><strong>Hatha Yoga:</strong> $15 per session</li>
      <li><strong>Vinyasa Flow:</strong> $15 per session</li>
      <li><strong>Yin Yoga:</strong> $15 per session</li>
      <li><strong>Meditation & Pranayama:</strong> $10 per session</li>
    </ul>
  </section>

  <section id="booking">
    <h2>Book a Session</h2>
    <form id="booking-form" action="booking.php" method="post">
      <label for="name">Full Name<span style="color:red;">*</span>:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email<span style="color:red;">*</span>:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone Number<span style="color:red;">*</span>:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="10 digit number" required>

      <label for="session-type">Session Type<span style="color:red;">*</span>:</label>
      <select id="session-type" name="session-type" required>
        <option value="">Select a session</option>
        <option value="hatha">Hatha Yoga - $15</option>
        <option value="vinyasa">Vinyasa Flow - $15</option>
        <option value="yin">Yin Yoga - $15</option>
        <option value="meditation">Meditation & Pranayama - $10</option>
      </select>

      <label for="preferred-time">Preferred Timing<span style="color:red;">*</span>:</label>
      <select id="preferred-time" name="preferred-time" required>
        <option value="">Select a time</option>
        <option value="mon-wed-fri-6-30am">Mon, Wed, Fri – 6:30 AM</option>
        <option value="mon-wed-fri-6pm">Mon, Wed, Fri – 6:00 PM</option>
        <option value="tue-thu-7pm">Tue, Thu – 7:00 PM (Meditation)</option>
        <option value="sat-9am">Sat – 9:00 AM (Yin Yoga)</option>
      </select>

      <button type="submit">Book Now</button>
    </form>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <form id="contact-form" action="contact.php" method="post">
      <label for="contact-name">Name<span style="color:red;">*</span>:</label>
      <input type="text" id="contact-name" name="contact-name" required>

      <label for="contact-email">Email<span style="color:red;">*</span>:</label>
      <input type="email" id="contact-email" name="contact-email" required>

      <label for="contact-message">Message<span style="color:red;">*</span>:</label>
      <textarea id="contact-message" name="contact-message" rows="4" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </section>

<?php include 'footer.php'; ?>
