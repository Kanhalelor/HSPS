// remove form onclick

const form = `
  <div class="contact-container">
      <form action="" class="contact-form" id="form">
        <h3 class="form-header">Contact Us</h3>
        <label for="name">Name</label>
        <input type="text" name="name" id="user-name" required />
        <label for="email">Email</label>
        <input type="email" name="email" id="mail" />
        <label for="message">Message</label>
        <textarea id="msg" placeholder="Type your message here..."></textarea>
        <button id="btn-submit" type="submit">submit</button>
      </form>
    </div>
`;
document.body.innerHTML = form;
const submitBtn = document.getElementById("btn-submit");

submitBtn.addEventListener("click", (e) => {
  const template = `
    <div class="l">
    <img src="https://bit.ly/3Oq9RMk"/>
    </div>
  `;
  document.getElementById("form").style.display = "none";
  document.body.innerHTML = template;
});
