<!-- footer section -->
<style>
  /* footer */
footer {
  /*padding: 5rem 0;*/
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  background: white;
  margin-top: auto;
  border-top: 3px solid #eee;
}
/*contact wrapper*/
.contact-wrapper {
  margin-top: 3rem;
  width: 100%;
  display: flex;
  justify-content: center;
}
/*footer content*/
.contact-street, .contact-postal, .contact-phone {
  margin: .5rem 1rem;
  padding: 0rem 2rem;
  display: flex;
  flex-direction: column;
  background: white;
  align-items: center;
}
.contact-header {
  margin: 0 0 .4rem 0;
  text-transform: uppercase;
  font-size: 18px;
}
.contact-street {
  border-right: 2px solid #121212;
}
.contact-phone {
  border-left: 2px solid #121212;
}

.info {
  margin: .2rem 0;
  color: tomato;
  font-size: 14px;
}
/* banking details*/
.banking-details {
  margin-top: 3rem;
  width: 100%;
  display: flex;
  flex-flow: column;
  align-items: center;
}
/* copyright*/
.copyright {
  border-top: 3px solid #eee;
  padding-top: 3rem;
  margin: 2rem;
  display: flex;
  justify-content: center;
  width: 100%;
}
</style>
<footer>
  <div class="contact-wrapper">
    <div class="contact-street">
      <h4 class="contact-header">Street Address</h4>
      <p class="info">8 Hero Street, Havana</p>
      <p class="info">Windhoek</p>
      <p class="info">Namibia</p>
    </div>
    <div class="contact-postal">
      <h4 class="contact-header">Postal Address</h4>
      <p class="info">P.O.BOX 1521</p>
      <p class="info">Havana, Windhoek</p>
      <p class="info">Namibia</p>
    </div>
    <div class="contact-phone">
      <h4 class="contact-header">Contact</h4>
      <p class="info">Tel: +264 61 413 6064</p>
      <p class="info">FAX: +264 61 413 6068</p>
      <p class="info">info@hsps.edu.na</p>
    </div>
  </div>
  <div class="banking-details">
    <h4 class="contact-header">Banking Details</h4>
    <p class="info">Havana Secondary Project School</p>
    <p class="info">Bank Windhoek</p>
    <p class="info">Account: 85154461</p>
    <p class="info">Branch-Code: 5487</p>
    <p class="info">SWIFT: 2315</p>
  </div>
  <div class="copyright">
    <p>© Copyright 2022 by HSPS.</p>
  </div>
</footer>