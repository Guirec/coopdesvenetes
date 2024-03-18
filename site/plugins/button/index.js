panel.plugin("coopdesvenetes/button-block", {
  blocks: {
    button: {
      computed: {
        placeholder() {
          return "Texte du bouton …";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.text"
          @input="update({ text: $event.target.value })"
        />
      `
    }
  }
});
