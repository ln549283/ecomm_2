<template>
   <div class="space-y-4">
        <!-- Bouton primaire -->
        <Button variant="primary">Primary Button</Button>

        <!-- Bouton secondaire -->
        <Button variant="info">Secondary Button</Button>

        <!-- Bouton danger -->
        <Button variant="danger">Danger Button</Button>

        <!-- Bouton désactivé -->
        <Button variant="success" :disabled="true">Disabled Button</Button>
    </div>
</template>
<script setup>
    import Button from '@/components/Button.vue'

    const handleClick = () => {
        alert('Button clicked!');
    };
</script>
<style>
    
</style>