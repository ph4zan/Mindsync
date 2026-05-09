// Init

document.addEventListener("DOMContentLoaded", init);

async function init() {
  bindEvents();
  await loadInitialData();
}
// Загрузка первых данных
async function loadInitialData() {
  const status = getStatusFromUrl();
  const res = await fetch("api/tasks?status=" + status, {
    headers: {
      "X-Requested-With": "XMLHttpRequest",
    },
  });

  const data = await res.json();
  render(data, status);
  toggleInput(status);
}

//
async function loadData(status) {
  history.pushState(null, "", "?status=" + status);

  const res = await fetch("api/tasks?status=" + status, {
    headers: {
      "X-Requested-With": "XMLHttpRequest",
    },
  });

  const data = await res.json();

  render(data, status);
  toggleInput(status);
}

// Рендер

function render(data, status) {
  renderPageUI(status);
  renderTasks(data);
}

function renderTasks(data = []) {
  const content = document.querySelector(".todo-list");

  content.innerHTML = data
    .map(
      (task) => `
    <li data-id="${task.id}" data-status="${task.status}">
        <input type="checkbox" class="todo-check" autocomplete="off">
        <span class="todo-text">${task.title}</span>
        <div class="todo-actions"></div>
    </li>
  `
    )
    .join("");
}

function renderPageUI(status) {
  const ui = document.querySelector(".page-ui");

  let html = "";

  if (status === "active") {
    html = `
      <h1>My tasks</h1>
    `;
  }

  if (status === "archived") {
    html = `
      <h1>Архив</h1>
      <div class="info">Задачи в архиве</div>
    `;
  }

  if (status === "completed") {
    html = `
      <h1>History</h1>
      <div class="info">История хранится 14 дней</div>
    `;
  }

  ui.innerHTML = html;
}

function getStatusFromUrl() {
  const params = new URLSearchParams(window.location.search);
  return params.get("status") || "active";
}

function bindEvents() {
  const pages = [
    { id: "active", status: "active" },
    { id: "archived", status: "archived" },
    { id: "completed", status: "completed" },
  ];

  pages.forEach((page) => {
    const el = document.getElementById(page.id);

    if (!el) {
      console.warn("Missing element:", page.id);
      return;
    }

    el.addEventListener("click", (e) => {
      e.preventDefault();
      loadData(page.status);
    });
  });

  const list = document.querySelector(".todo-list");
  if (list && !list.dataset.bound) {
    list.addEventListener("change", handleToggle);
    list.dataset.bound = "true";
  }

  const form = document.querySelector("form");
  if (form && !form.dataset.bound) {
    form.addEventListener("submit", handleSubmit);
    form.dataset.bound = "true";
  }

  const toggle = document.querySelector(".sidebar-toggle");
  if (toggle) toggle.onclick = toggleSidebar;
}

function toggleInput(status) {
  const blocks = document.querySelectorAll(".todo-input-block");

  blocks.forEach((block) => {
    block.classList.toggle("hidden", status !== "active");
  });
}

async function handleToggle(e) {
  if (!(e.target instanceof HTMLInputElement) || e.target.type !== "checkbox")
    return;

  const li = e.target.closest("li");
  const id = li.dataset.id;

  const status = e.target.checked ? "completed" : "active";

  const res = await fetch(`api/tasks`, {
    method: "PATCH",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      id,
      status,
    }),
  });
  const data = await res.json();

  console.log(data);
  if (data.success) {
    li.classList.toggle("done", e.target.checked);
  }
}

async function handleSubmit(e) {
  e.preventDefault();
  const inputTitle = document.querySelector('input[name="title"]');
  const inputDescription = document.querySelector(
    'textarea[name="description"]'
  );

  const res = await fetch("api/tasks", {
    method: "POST",
    headers: { "Content-type": "application/json" },
    body: JSON.stringify({
      title: inputTitle.value,
      description: inputDescription.value,
    }),
  });

  const data = await res.json();

  const li = document.createElement("li");
  li.innerHTML = `
                <input type="checkbox" class="todo-check">
                  ${data.title}
        `;

  li.dataset.id = data.id;
  document.querySelector(".todo-list").appendChild(li);

  inputTitle.value = "";
  inputDescription.value = "";
}

function toggleSidebar() {
  document.querySelector(".sidebar").classList.toggle("mini");
}
