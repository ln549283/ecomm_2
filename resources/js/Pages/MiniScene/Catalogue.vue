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
                        <div v-for="category in categories" :key="category.id" v-show="activeTab === category.id">
                            <div v-if="dataGameStore.getUnlockedCategoriesId().includes(category.id)" class="grid grid-cols-3 gap-2 mt-6" >
                                <div 
                                    v-for="product in products.filter(product => product.category_id === activeTab)" 
                                    :key="product.id"
                                    class="grid grid-cols-2 gap-4  text-nowrap max-w-sm p-6 bg-white border border-gray-200 rounded-lg mx-auto shadow dark:bg-gray-800 dark:border-gray-700"
                                >
                                    <div class="me-5">
                                        <MugCustom class="mx-auto mb-2" width="100" height="100"/>
                                        <p >{{ product.name }}</p>
                                        <p>Prix d'achat : {{ product.base_purchase_price }} €</p>
                                        <p>Rang : {{ product.rank }}</p>
                                    </div>
                                    <div class="">
                                        <Button 
                                            @click="dataGameStore.unlockProduct(product.id)" 
                                            :variant="dataGameStore.isBalanceEnough(product.unlock_price) ? 'green' : 'red'"
                                            v-if="!dataGameStore.getUnlockedProductsId().includes(product.id)"
                                        >
                                            <LockIcon width="45" height="45" class="mx-auto"/>
                                            <div class="text-nowrap">
                                                <CoinIcon width="30" height="30" class="mx-auto inline-block"/>  {{ product.unlock_price }}
                                            </div>
                                        </Button>
                                        <div v-else>

                                            <Button 
                                                :variant="dataGameStore.isBalanceEnough(product.unlock_price) ? 'green' : 'red'" 
                                                @click="dataGameStore.buyProduct(product.id, 1)"
                                                size="sm" 
                                                class="flex text-nowrap"
                                            >
                                                <div class="border-b pb-1">+1</div>
                                                <div class="text-nowrap pt-1">
                                                    ${{ Math.floor(product.unlock_price) }}
                                                </div>
                                            </Button>
                                            <Button 
                                                :variant="dataGameStore.isBalanceEnough(product.unlock_price*10) ? 'green' : 'red'"
                                                @click="dataGameStore.buyProduct(product.id, 10)"
                                                size="sm" 
                                                class="flex text-nowrap my-1"
                                            >
                                                <div class="border-b pb-1">+10</div>
                                                <div class="text-nowrap pt-1">
                                                    ${{ product.unlock_price *10}}
                                                </div>
                                            </Button>
                                            <Button 
                                                :variant="dataGameStore.isBalanceEnough(product.unlock_price*100) ? 'green' : 'red'"
                                                @click="dataGameStore.buyProduct(product.id, 100)"
                                                size="sm" 
                                                class="flex text-nowrap"
                                            >
                                                <div class="border-b pb-1">+100</div>
                                                <div class="text-nowrap pt-1">
                                                    ${{ product.unlock_price *100}}
                                                </div>
                                            </Button>

                                        </div>                                   
                                    </div>                                                                                               
                                </div>
                            </div>
                            <div v-else class="w-full mx-auto text-center">
                                <Button variant="red">
                                    <LockIcon width="45" height="45" class="mx-auto"/>
                                    <div class="text-nowrap">
                                        <CoinIcon width="30" height="30" class="mx-auto inline-block"/>  {{ category.unlock_cost }}
                                    </div>
                                </Button>
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

    import { useDataGameStore } from '../../Store/dataGame';

    const dataGameStore = useDataGameStore();

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

    const activeTab = ref(0);
    console.log(props.categories)
    
    onMounted(() => {
        activeTab.value = props.categories[0]?.id || null;
    });

</script>
<style>
    
</style>