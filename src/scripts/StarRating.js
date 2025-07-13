class StarRating {
    constructor(starRatingSelector, hiddenInputSelector) {
        this.starRating = document.querySelector(starRatingSelector);
        this.hiddenInput = document.querySelector(hiddenInputSelector);
        this.updateStarColor(this.hiddenInput.value);
        this.activeColor = 'text-tertiary';
        this.defaultColor = 'text-gray-500';

        this.events()

        this.starRating.querySelectorAll('i').forEach((star) => {
            star.addEventListener('click', () => {
                const value = star.getAttribute('data-value');

                this.updateHiddenRatingField(value);
                this.updateStarColor(value, 'click');
            })

            star.addEventListener('pointerover', () => {
                const value = star.getAttribute('data-value');
                this.updateStarColor(value, 'pointerover');
            })

            star.addEventListener('pointerleave', () => {
                this.updateStarColor(this.hiddenInput.value, 'pointerleave');
            })
        })
    }

    events() {
        this.hiddenInput.addEventListener('change', (e) => {
            this.updateStarColor(this.hiddenInput.value, 'change');
        })
    }

    updateStarColor(value, e) {
        this.starRating.querySelectorAll('i').forEach(star => {
            if (e === 'pointerover') {
                star.classList.add("opacity-50")
            } else {
                star.classList.remove("opacity-50")
            }

            if (parseInt(star.getAttribute('data-value')) <= parseInt(value)) {
                star.classList.add(this.activeColor)
                star.classList.remove(this.defaultColor)
            } else {
                star.classList.remove(this.activeColor)
                star.classList.add(this.defaultColor)
            }
        })
    }

    updateHiddenRatingField(newValue) {
        this.hiddenInput.value = newValue;
    }
}

export default StarRating;