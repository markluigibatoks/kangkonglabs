class Drawer {
    constructor(drawerSelector, toggleSelector, closeSelector) {
        this.drawer = document.querySelector(drawerSelector);
        this.toggle = document.querySelector(toggleSelector);
        this.close = closeSelector ? document.querySelector(closeSelector) : null;

        if (this.toggle && this.drawer) {
            this.toggle.addEventListener('click', () => this.open());
        }

        if (this.close && this.drawer) {
            this.close.addEventListener('click', () => this.closeDrawer());
        }

        if (this.drawer) {
            this.drawer.addEventListener('click', (e) => {
                if (e.target === this.drawer) this.closeDrawer();
            })
        }
    }

    open() {
        this.drawer.classList.remove('translate-y-full');
        this.drawer.classList.add('translate-y-0');
    }

    closeDrawer() {
        this.drawer.classList.remove('translate-y-0'); 
        this.drawer.classList.add('translate-y-full');
    }
}

export default Drawer