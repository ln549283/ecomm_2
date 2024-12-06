<template>
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Catalogue de produit
                </h3>
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
                                <div class="inline-block align-middle me-5">
                                    <MugCustom class="mx-auto mb-2" width="100" height="100"/>
                                    <p >{{ product.name }}</p>
                                    <p>Prix d'achat : {{ product.base_purchase_price }} €</p>
                                    <p>Rang : {{ product.rank }}</p>
                                </div>
                                <div class="inline-block">
                                    <p>Débloquer</p>
                                    <LockIcon width="45" height="45" class="mx-auto"/>
                                    <CoinIcon width="30" height="30" class="mx-auto"/> 
                                </div>
                                                                                               
                            </div>
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
    import LockIcon from '@/components/icons/Lock.vue';
    import CoinIcon from '@/components/icons/Coin.vue';

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