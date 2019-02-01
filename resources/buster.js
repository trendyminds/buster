class Buster {
  constructor() {
    this.$button = document.querySelector("[data-buster-button]");

    this.handleButtonClick = this.handleButtonClick.bind(this);

    this.events();
  }

  events() {
    this.$button.addEventListener("click", this.handleButtonClick);
  }

  handleButtonClick(ev) {
    ev.preventDefault();

    const originalButtonText = this.$button.innerText;

    const data = {
      action: "utilities/clear-caches-perform-action",
      caches: ["compiled-templates", "data", "temp-files", "template-caches"],
      [window.Craft.csrfTokenName]: window.Craft.csrfTokenValue
    };

    this.$button.innerText = "Clearing...";

    $.ajax({
      type: "post",
      url: "",
      data,
      success: () => {
        this.$button.innerText = originalButtonText;
        window.Craft.cp.displayNotice("Your cache was cleared successfully!");

        return true;
      },
      error: () => {
        window.Craft.cp.displayError(
          "Your cache could not be cleared successfully. Please try again later or contact support."
        );

        return true;
      }
    });
  }
}

new Buster();
