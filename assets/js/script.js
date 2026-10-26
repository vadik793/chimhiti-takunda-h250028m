const menuButton = document.querySelector('.menu-toggle');
const nav = document.querySelector('.nav-links');

if (menuButton && nav) {
  menuButton.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(isOpen));
    menuButton.textContent = isOpen ? '✕' : '☰';
  });

  nav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      nav.classList.remove('open');
      menuButton.setAttribute('aria-expanded', 'false');
      menuButton.textContent = '☰';
    });
  });
}

const membershipForm = document.querySelector('#membership-form');
if (membershipForm) {
  membershipForm.addEventListener('submit', event => {
    const email = membershipForm.querySelector('#email');
    const fullName = membershipForm.querySelector('#full_name');
    if (!fullName.value.trim() || !email.validity.valid) {
      event.preventDefault();
      alert('Please enter your name and a valid email address.');
    }
  });
}
