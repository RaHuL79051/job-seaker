const quotes = document.querySelectorAll('.quote');
let currentQuoteIndex = 0;

setInterval(() => {
  const currentQuote = quotes[currentQuoteIndex];
  const nextQuoteIndex = (currentQuoteIndex + 1) % quotes.length;
  const nextQuote = quotes[nextQuoteIndex];

  // Slide out current quote
  currentQuote.classList.remove('active');
  currentQuote.classList.add('exit');

  // Slide in next quote
  nextQuote.classList.remove('exit');
  nextQuote.classList.add('active');

  currentQuoteIndex = nextQuoteIndex;
}, 15000); // Change every 15 seconds


const loginForm = document.querySelector('#LoginForm')

loginForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const Email = document.getElementById('email').value;
  const Password = document.getElementById('password').value;
  console.log(Email, Password);
  if (Email === 'test@gmail.com' && Password === '12345') {
    window.location.href = "./AdminDashboard.html"
  }
})