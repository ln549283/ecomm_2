<template>
    <div class="toast" :class="type" @click="removeToast">
      {{ message }}
    </div>
  </template>
  
  <script setup>
  import { defineProps, defineEmits } from 'vue';
  
  defineProps({
    message: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      default: 'info', // Types : info, success, error
    },
  });
  
  const emit = defineEmits(['close']);
  
  const removeToast = () => {
    emit('close');
  };
  </script>
  
  <style>
  .toast {
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    animation: fadeInOut 0.5s ease-in-out;
  }
  .toast.info {
    background-color: #3498db;
  }
  .toast.success {
    background-color: #2ecc71;
  }
  .toast.error {
    background-color: #e74c3c;
  }
  
  @keyframes fadeInOut {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
  </style>
  