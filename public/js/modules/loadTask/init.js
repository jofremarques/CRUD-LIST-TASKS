import { LoadTask } from "./index.js"

document.addEventListener("DOMContentLoaded", () => {
    const loadTask = new LoadTask();

    loadTask.handle();
})