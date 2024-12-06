<template>
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Catalogue de produit
                </h3>
                <!-- <Button variant="red" class="text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </Button> -->
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <Tabs :tabs="categories" :activeTab="activeTab" @update:activeTab="activeTab = $event">
                    <template v-slot>
                        <div v-for="category in categories" :key="category.id" v-show="activeTab === category.id" class="grid grid-cols-3 gap-2 mt-6">
                            <div 
                                v-for="product in products.filter(product => product.category_id === activeTab)" 
                                :key="product.id"
                                class="text-nowrap max-w-sm p-6 bg-white border border-gray-200 rounded-lg mx-auto shadow dark:bg-gray-800 dark:border-gray-700"
                            >
                                <MugCustom class="mx-auto mb-2" width="100" height="100"/>
                                <p >{{ product.name }}</p>
                                <p>Prix d'achat : {{ product.base_purchase_price }} €</p>
                                <p>Rang : {{ product.rank }}</p>
                                                               
                            </div>
                            <!-- <p>Voici le contenu spécifique pour {{ category.name }}</p>
                            <p>Coût de déblocage : {{ category.unlock_cost }} €</p>
                            <p>Débloqué : {{ category.is_unlocked ? 'Oui' : 'Non' }}</p> -->
                        </div>
                    </template>
                </Tabs>
            </div>
        </div>
    </div>
</template>
<script setup>
    import { ref, onMounted } from 'vue';
    import Tabs from '@/components/Tabs.vue';
    import MugCustom from '@/components/icons/MugCustom.vue';
    import Shirt from '@/components/icons/Shirt.vue';
    import Button from '@/components/Button.vue';
    const props = defineProps({
        categories: {
            type: Array,
            required: true,
        },
        products: {
            type: Array,
            required: true,
        },
    });

    const activeTab = ref(null);
    console.log(props.categories)
    
    onMounted(() => {
        activeTab.value = props.categories[0]?.id || null;
    });

</script>
<style>
    
</style>