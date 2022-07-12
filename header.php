<style>
  *,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/* css variables */
:root {
  --d-flex: flex;
  --f-col: column;
  --wrap: wrap;
  --f-row: row;
  --d-block: block;
  --primary-color: tomato;
  --secondary-color: gray;

  --black: #121212;
  --white: #eee;
  --white-light: #e5e2e2f8;

  --text-center: center;

  --full-w: 100%;
  --full-h: 100%;
  --half-w: 50%;
  --half-h: 50%;

  --full-vw: 100vw;
  --full-vh: 100vh;

  --mg: 1em;
  --mg-top: 1em;
  --mg-left: 1em;
  --mg-right: 1em;
  --mg-bottom: 1em;

  --pd: 1em;
  --pd-light: 0.5em;

  --bdr-1: 4px;
  --bdr-2: 50%;

  --fb: 4px solid #e5e2e2f8;

  --centered: 0 auto;
  --lh: 1.5;

  --primary-box-shadow: rgba(0, 0, 0, 0.3) 0 1px 3px;
}
/* html scroll behaviour */
html {
  scroll-behavior: smooth;
}
/* body */
body {
  font-family: 'Source Sans Pro', sans-serif;
  width: var(--full-vw);
  height: var(--full-vh);
  overflow-x: hidden;
}
/* wrapper */
.wrapper {
  display: flex;
  flex-flow: column;
  flex: 1;
  width: var(--full-w);
  height: var(--full-h);
  background: var(--f-col);
}
/* main nav */
.main-nav {
  display: var(--d-flex);
  flex-wrap: var(--wrap);
  height: 190px;
  background: rgba(0, 0, 0, 0.267);
  align-items: center;
  justify-content: space-around;

  padding: 1rem 0;
}
/* logo container */
.logo-container {
  height: 85%;
  /* background: chartreuse; */
}
/* logo */
.logo {
  max-width: var(--full-w);
  object-fit: cover;
  height: var(--full-h);
}
/* menu */
.menu {
  border-top: 3px solid #eee;
  display: flex;
  flex-flow: var(--f-col);
  padding: 0.6rem 0.3rem;
  position: relative;
  background: rgb(43, 43, 42);
  width: fit-content;
}
/* school name */
.school-name {
  position: absolute;
  top: -70px;
  font-size: 36px;
  width: var(--full-w);
  margin: 1rem 0;
  text-align: var(--text-center);
}
/* menu links */
.menu-a {
  display: var(--d-flex);
}
.active {
  background: #fff;
  color: black !important;
}
/* menu bar */
.menu a {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 1.5rem;
  text-decoration: none;
  color: var(--white);
  font-size: 12px;
  padding: 0.6rem 0.2rem;
  cursor: pointer;
  border-radius: 20px;
}
/* menu bar button */
/*.menu button {
  outline: none;
  background: none;
  border: none;
  color: var(--white);
  font-size: 12px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0.6rem 0.3rem;
  cursor: pointer;
  border-radius: 5px;
}*/
/* ad space */

/* hover effects */
.menu a:hover {
  background: #fff;
  color: #121212;
  transition: border 0.3 linear;
}
/*menu button:hover {
  background: #fff;
  color: #121212;
  border-bottom: 2px solid #eee;
  transition: border 3s linear;
}*/

/* menu bar  */

.bar {
  visibility: hidden;
  position: absolute;
  color: var(--white);
}
</style> 
<div class="wrapper">
<div class="ad-space-1"></div>
<div class="main-nav">
  <div class="logo-container">
    <img
      src="https://www.proedakademie.com/rw_common/images/Pro-Ed%20Logo-72%20DPI.png"
      alt="logo"
      class="logo"
    />
  </div>
  <div class="menu">
    <h2 class="school-name">
      HAVANA PROJECT SECONDARY SCHOOL<i
        class="fa fa-bars bar"
        style="font-size: 20px;"
      ></i>
    </h2>
    <div class="menu-a">
      <a class="active" href="#">HOME</a>
      <a href="#">ABOUT</a>
      <a href="#">NEWS</a>
      <a href="#">ACTIVITIES</a>
      <a href="#">CONTACT</a>
      <a href="#">LIFE AT HSPS</a>
      <a href="#">GALLERY</a>
      <a href="#">SHOP</a>
      <a href="#">LOGIN</a>
    </div>
  </div>
</div>