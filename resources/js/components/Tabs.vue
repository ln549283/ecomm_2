<template>
    <div>
      <!-- Barre de navigation des onglets -->
        <div class="flex border-b border-gray-300">
            <button
                v-for="tab in tabs"
                :key="tab.id"
                :class="[
                    'px-4 py-2',
                    activeTab === tab.id
                    ? 'border-b-2 border-blue-500 text-blue-500'
                    : 'text-gray-600 hover:text-blue-400',
                ]"
                @click="$emit('update:activeTab', tab.id)"
            >
                {{ tab.name }}
            </button>
        </div>
  
        <!-- Contenu des onglets -->
        <div class="mt-4">
            <slot/>
        </div>
    </div>
</template>
  
<script setup>
    import { ref } from 'vue';
  
    // Props pour recevoir les catégories
    const props = defineProps({
        tabs: {
            type: Array,
            required: true,
        },
        activeTab: {
            type: [String, Number],
            required: true,
        },
    });
  
</script>
  
<style>
    /* Transition pour les hover et bordures */
    button {
        transition: color 0.3s, border-color 0.3s;
    }
</style>
  