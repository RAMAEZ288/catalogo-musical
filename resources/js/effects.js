// resources/js/effects.js
function cardMouseOver(el) { el.classList.add('scale-105', 'shadow-2xl'); }
function cardMouseOut(el)  { el.classList.remove('scale-105', 'shadow-2xl'); }

function imageMouseOver(el) { el.classList.add('rotate-3', 'translate-y-1', 'scale-105'); }
function imageMouseOut(el)  { el.classList.remove('rotate-3', 'translate-y-1', 'scale-105'); }

function btnMouseOver(el) {
  el.classList.add('scale-105', 'ring', 'ring-offset-2', 'ring-indigo-300');
  if (el.classList.contains('bg-indigo-600')) {
    el.classList.remove('bg-indigo-600'); el.classList.add('bg-indigo-700');
  }
}
function btnMouseOut(el) {
  el.classList.remove('scale-105', 'ring', 'ring-offset-2', 'ring-indigo-300');
  if (el.classList.contains('bg-indigo-700')) {
    el.classList.remove('bg-indigo-700'); el.classList.add('bg-indigo-600');
  }
}

function initEffects() {
  const cards = document.getElementsByClassName('effect-card');
  for (let i = 0; i < cards.length; i++) {
    const c = cards[i];
    c.addEventListener('mouseover', () => cardMouseOver(c));
    c.addEventListener('mouseout',  () => cardMouseOut(c));
  }

  const imgs = document.getElementsByClassName('effect-image');
  for (let i = 0; i < imgs.length; i++) {
    const im = imgs[i];
    im.addEventListener('mouseover', () => imageMouseOver(im));
    im.addEventListener('mouseout',  () => imageMouseOut(im));
  }

  const btns = document.getElementsByClassName('effect-btn');
  for (let i = 0; i < btns.length; i++) {
    const b = btns[i];
    b.addEventListener('mouseover', () => btnMouseOver(b));
    b.addEventListener('mouseout',  () => btnMouseOut(b));
  }

  const special = document.getElementById('special-promo');
  if (special) {
    special.addEventListener('mouseover', () => special.classList.add('scale-105', 'shadow-inner', 'bg-yellow-50'));
    special.addEventListener('mouseout',  () => special.classList.remove('scale-105', 'shadow-inner', 'bg-yellow-50'));
  }
}

document.addEventListener('DOMContentLoaded', initEffects);


