import "flowbite";
import { initCarousels } from "flowbite";

document.addEventListener("DOMContentLoaded", () => initCarousels());
document.addEventListener("livewire:navigated", () => initCarousels());
