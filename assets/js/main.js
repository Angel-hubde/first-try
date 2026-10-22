document.addEventListener('DOMContentLoaded', function () {
  const buttons = document.querySelectorAll('.button');

  buttons.forEach((button) => {
    button.addEventListener('click', function (event) {
      event.preventDefault();
      button.textContent = 'Projet prêt à personnaliser';
    });
  });
});
