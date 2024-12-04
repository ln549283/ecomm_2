<template>
    <div>
        <!-- Affiche le nombre de jours et l'heure au format HH:MM -->
        <div>{{ nbDays }} jours {{ formattedTime }}</div>
    </div>
</template>

<script setup>
import { ref, onUnmounted, computed } from 'vue';

// Initialisation à 7h00
const startHour = 0; // 7h00 en millisecondes
const elapsed = ref(0); // Temps écoulé en millisecondes
const nbDays = ref(0); // Compteur de jours
let lastTime;

// Calcul de l'heure formatée HH:MM
const formattedTime = computed(() => {
    const totalMinutes = Math.floor(elapsed.value / 1000); // Convertit les millisecondes en minutes
    const hours = String(Math.floor(totalMinutes / 60)).padStart(2, '0'); // Heures
    const minutes = String(totalMinutes % 60).padStart(2, '0'); // Minutes
    return `${hours}:${minutes}`;
});

// Fonction pour mettre à jour l'heure
const update = () => {
    elapsed.value += (performance.now() - lastTime) * 60; // Temps accéléré : 1 seconde = 1 minute
    lastTime = performance.now(); // Met à jour la référence

    // Vérifie si 24 heures ont été atteintes
    if (Math.floor(elapsed.value / 1000) >= 24 * 60) {
        nbDays.value += 1; // Incrémente le compteur de jours
        elapsed.value = 0; // Réinitialise à 7h00
    }

    requestAnimationFrame(update); // Continue la mise à jour
};

// Réinitialise le compteur à 7h00 et 0 jour
const reset = () => {
    elapsed.value = startHour; // Réinitialise à 7h00
    nbDays.value = 0; // Réinitialise le compteur de jours
    lastTime = performance.now(); // Réinitialise le temps
    update();
};

reset();

onUnmounted(() => {
    // Stop le compteur lors de la destruction du composant
    cancelAnimationFrame(update);
});
</script>
