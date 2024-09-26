class MainNavigation extends HTMLElement {
	constructor() {
		super();

		this.menuTrigger = this.querySelector("[data-menu-trigger]");
		this.menuNav = this.querySelector("[data-menu-nav]");
		this.menuListItems = this.menuNav.querySelectorAll("li a");
	}

	openNavigation() {
		this.menuTrigger.setAttribute("aria-expanded", "true");
		this.menuNav.classList.add("is-open");
	}

	closeNavigation() {
		this.menuTrigger.setAttribute("aria-expanded", "false");
		this.menuNav.classList.remove("is-open");
	}

	toggleNavigation() {
		const open = this.menuTrigger.getAttribute("aria-expanded");
		open === "false" ? this.openNavigation() : this.closeNavigation();
	}

	// Closes an open disclosure if a user tabs away from the last anchor element in the list. It is reliant on the ul container having a class to check whether the relatedTarget is within the disclosure. If not, it will close.
	handleBlur(event) {
		const menuList = event.currentTarget.closest("[data-menu-list]");
		if (!event.relatedTarget || !menuList.contains(event.relatedTarget)) {
			this.closeNavigation();
		}
	}

	connectedCallback() {
		this.menuTrigger.addEventListener("click", this.toggleNavigation.bind(this));

		// Add event to the last item in the nav list to trigger the disclosure to close if the user tabs out of the disclosure.
		this.menuListItems[this.menuListItems.length - 1].addEventListener("blur", this.handleBlur.bind(this));

		// Close the disclosure if a user presses the escape key.
		window.addEventListener("keyup", (event) => {
			if (event.key === "Escape") {
				this.menuTrigger.focus();
				this.closeNavigation();
			}
		});
	}

	disconnectedCallback() {
		window.removeEventListener("keyup", this.handleBlur.bind(this));
	}
}

customElements.define("main-navigation", MainNavigation);
