// src/auth/pwd-toggle.js
// Aggiunge l'occhietto "mostra/nascondi password" a un campo input.
// Uso: initPwdToggle(document.getElementById('password'))

const EYE_OPEN = `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
  viewBox="0 0 24 24" fill="none" stroke="currentColor"
  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M1 12S5 5 12 5s11 7 11 7-4 7-11 7S1 12 1 12z"/>
  <circle cx="12" cy="12" r="3"/>
</svg>`;

const EYE_CLOSED = `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
  viewBox="0 0 24 24" fill="none" stroke="currentColor"
  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20C5 20 1 12 1 12
           a18.45 18.45 0 0 1 5.06-5.94"/>
  <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8
           a18.5 18.5 0 0 1-2.16 3.19"/>
  <line x1="1" y1="1" x2="23" y2="23"/>
</svg>`;

export function initPwdToggle(input) {
  // Wrap l'input in un contenitore relativo
  const wrapper = document.createElement('div');
  wrapper.className = 'pwd-wrapper';
  input.parentNode.insertBefore(wrapper, input);
  wrapper.appendChild(input);

  // Crea il bottone
  const btn = document.createElement('button');
  btn.type      = 'button';
  btn.className = 'pwd-toggle';
  btn.setAttribute('aria-label', 'Mostra password');
  btn.innerHTML = EYE_OPEN;
  wrapper.appendChild(btn);

  // Toggle al click
  btn.addEventListener('click', () => {
    const isPassword = input.type === 'password';
    input.type = isPassword ? 'text' : 'password';
    btn.innerHTML = isPassword ? EYE_CLOSED : EYE_OPEN;
    btn.setAttribute('aria-label', isPassword ? 'Nascondi password' : 'Mostra password');
  });
}