const form = document.getElementById("form");
const buttons = document.getElementById("form-buttons");
const resultsContainer = document.getElementById("results-container");
const results = document.getElementById("results");

const operations = {
  "+": (a, b) => a + b,
  "-": (a, b) => a - b,
  "*": (a, b) => a * b,
  "/": (a, b) => a / b,
};

form.addEventListener("submit", e => {
  e.preventDefault();
});
buttons.addEventListener("click", e => {
  const operation = e.target.dataset.operation;
  const a = parseInt(form["digit-1"].value);
  const b = parseInt(form["digit-2"].value);

  resultsContainer.style.display = "block";

  if (operation === "/" && b === 0) {
    results.innerText = "Błąd – nie wolno dzielić przez 0";
    return;
  }

  const result = operations[operation](a, b);

  if (Number.isNaN(a) || Number.isNaN(b)) {
    results.innerText =
      "Błąd – nie wprowadzono danych lub dane nie są liczbami";
    return;
  }

  results.innerText = result;
});
