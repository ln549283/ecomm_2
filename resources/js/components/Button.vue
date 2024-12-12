<template>
    <button
        :disabled="disabled"
    >
        <div :class="['button-custom', variant, size]">
            <slot/>
        </div>
    </button>
</template>
  
<script setup>
    import { computed } from 'vue';
  
    // Définition des props
    const props = defineProps({
        variant: {
            type: String,
            default: 'blue', // primary, secondary, danger, etc.
        },
        disabled: {
            type: Boolean,
            default: false, // Si le bouton est désactivé
        },
        size: {
            type: String,
            default : 'lg',
        }
    });

</script>

<style>
.sm {
    @apply px-[2px] py-[1px] md:px-6 md:py-[10px];
}

.md {
    @apply px-[2px] py-[1px] md:px-7 md:py-[15px];
}

.lg {
    @apply px-[2px] py-[1px] md:px-8 md:py-[19px];
}
.blue{
    @apply before:bg-[rgba(59,130,246,0.32)] after:bg-[linear-gradient(92.83deg,#3b82f6_0,#2563eb_100%)];
}
.blue:active:not(:disabled):after {
    @apply bg-[linear-gradient(0deg,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),linear-gradient(92.83deg,#3b82f6_0,#2563eb_100%)] inset-1;
}

.orange {
    @apply before:bg-[rgba(249,58,19,0.32)] after:bg-[linear-gradient(92.83deg,#ff7426_0,#f93a13_100%)];
}
.orange:active:not(:disabled):after {
    @apply bg-[linear-gradient(0deg,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),linear-gradient(92.83deg,#ff7426_0,#f93a13_100%)] inset-1;
}

.yellow {
    @apply before:bg-[rgba(250,204,21,0.32)] after:bg-[linear-gradient(92.83deg,#facc15_0,#eab308_100%)];
}
.yellow:active:not(:disabled):after  {
    @apply bg-[linear-gradient(0deg,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),linear-gradient(92.83deg,#facc15_0,#eab308_100%)] inset-1;
}

.red {
    @apply before:bg-[rgba(239,68,68,0.32)] after:bg-[linear-gradient(92.83deg,#ef4444_0,#b91c1c_100%)];
}
.red:active:not(:disabled):after  {
    @apply bg-[linear-gradient(0deg,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),linear-gradient(92.83deg,#ef4444_0,#b91c1c_100%)] inset-1;
}

.green {
    @apply before:bg-[rgba(34,197,94,0.32)] after:bg-[linear-gradient(92.83deg,#22c55e_0,#15803d_100%)];
}
.green:active:not(:disabled):after  {
    @apply bg-[linear-gradient(0deg,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),linear-gradient(92.83deg,#22c55e_0,#15803d_100%)] inset-1;
}
.purple {
    @apply before:bg-[rgba(139,92,246,0.32)] after:bg-[linear-gradient(92.83deg,#8b5cf6_0,#6d28d9_100%)];
}
.purple:active:not(:disabled):after {
    @apply bg-[linear-gradient(0deg,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),linear-gradient(92.83deg,#8b5cf6_0,#6d28d9_100%)] inset-1;
}

.close-btn {
    @apply absolute top-0 right-0;
}

.button-custom {
    @apply items-center appearance-none bg-clip-padding bg-[initial] bg-none box-border text-white cursor-pointer inline-block flex-row shrink-0 text-base font-extrabold justify-center leading-4 min-h-[4px] overflow-visible pointer-events-auto relative text-center no-underline normal-case select-none touch-manipulation align-middle w-auto break-keep z-0 m-0  border-none before:content-[""] before:block before:h-full before:overflow-hidden before:absolute before:w-full before:z-[-2] before:left-0 before:top-0 after:bg-[initial]  after:content-[""] after:block after:overflow-hidden after:absolute after:transition-all after:duration-100 after:ease-[ease-out] after:z-[-1] after:inset-1 disabled:cursor-default disabled:opacity-[0.24];
    font-family: Eina01, sans-serif;
    outline: none;
    -webkit-user-select: none;
}


.button-custom:before,
.button-custom:after {
    @apply rounded-[80px];
}
.button-custom:hover:not(:disabled):after {
     @apply ease-[ease-in] inset-0;
}
.button-custom:active:not(:disabled) {
     @apply text-[#ccc];
}
</style>
  