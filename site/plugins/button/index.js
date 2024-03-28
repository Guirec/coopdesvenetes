panel.plugin("your-project/button-block", {
  blocks: {
    button: `
      <div class="button-container">
        <button type="button" @click="open">
          {{ content.text }}
        </button>
      </div>

    `
  }
});
