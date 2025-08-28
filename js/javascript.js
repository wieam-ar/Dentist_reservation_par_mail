  // Fonction pour animer les compteurs
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const suffix = counter.getAttribute('data-suffix') || "+";
                let current = 0;
                const increment = target / 200; // vitesse (200 steps)

                function updateCounter() {
                    if (current < target) {
                        current += increment;
                        counter.innerText = Math.ceil(current) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target + suffix; // valeur finale
                    }
                }
                updateCounter();
            });
        }

        // Lancer l'animation quand la page se charge
        window.addEventListener('DOMContentLoaded', animateCounters);