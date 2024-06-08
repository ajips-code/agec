document.addEventListener("DOMContentLoaded", function () {
  const tabInputs = document.querySelectorAll(".ui-tabs__input");
  tabInputs.forEach((input) => {
    input.addEventListener("change", function () {
      const panelId = this.id.replace("ui-tab-", "ui-tab-panel-");
      document.querySelectorAll(".ui-tabs__panel").forEach((panel) => {
        panel.style.display = panel.id === panelId ? "block" : "none";
      });
    });
  });
});
