document.querySelector()
const stylesheet = document.createElement('style');
stylesheet.textContent = `
  h2 {
    font-size: 24px;
  }
`;
document.head.appendChild(stylesheet);
