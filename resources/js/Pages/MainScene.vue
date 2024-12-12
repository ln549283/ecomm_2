<template>
   <div class="container mx-auto p-4 bg-gray-100 h-screen flex flex-col justify-between">
        <!-- Conteneur de toasts -->
        <div class="toast-container">
            <transition-group name="toast" tag="div">
                <Toast
                    v-for="(toast) in dataGameStore.toasts"
                    :key="toast.id"
                    :message="toast.message"
                    :type="toast.type"
                    @close="dataGameStore.removeToast(toast.id)"
                />
            </transition-group>
        </div>
        <Modal :show="modalCatalogue" @close="modalCatalogue = false">
            <Catalogue :categories="categories" :products="products"/>
        </Modal>
        <Modal :show="modalMarketing" @close="modalMarketing = false">
            <Marketing/>
        </Modal>
        <Modal :show="modalMissions" @close="modalMissions = false">
            <Missions/>
        </Modal>
        <Modal :show="modalOptions" @close="modalOptions = false">
            <Options/>
        </Modal>
        <!-- Header -->
        <div class="flex justify-between items-top">
            <Button @click="modalOptions = true" class="h-20" variant="yellow">
                <SettingIcon class="inline me-4" width="35" height="35" />
                Menu
            </Button>

            <div class="text-center">
                <div class="bg-green-300 px-4 py-2 rounded shadow">
                    <CoinIcon class="inline me-4" width="40" height="40"/>
                    <span class="text-lg font-bold">{{ dataGameStore.player.balance }}</span>
                </div>
            </div>
            <div class="flex flex-col space-y-4">
                <button class="bg-blue-400 text-white px-4 py-2 rounded shadow hover:bg-blue-500">Dépenses hebdo</button>
                <button class="bg-blue-400 text-white px-4 py-2 rounded shadow hover:bg-blue-500">Solde actuel</button>
                <button class="bg-blue-400 text-white px-4 py-2 rounded shadow hover:bg-blue-500">Nombre site ouvert</button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-row justify-between">
            <!-- Center Missions Box -->
            <div class="bg-pink-200 p-4 rounded shadow">
                <h2 class="text-lg font-bold mb-2">Missions :</h2>
                <ul class="list-disc pl-6">
                    <li>Mission 1</li>
                    <li>Mission 2</li>
                    <li>Mission 3</li>
                </ul>
            </div>
        </div>

        <!-- Footer Buttons -->
        <div class="grid grid-cols-4 gap-4 mt-6">
            <div><TimeIcon  class="inline-flex me-5" width="50" height="50"/><Timer  class="text-lg inline-flex"/></div>
            <!-- <button class="bg-green-400 px-6 py-2 rounded shadow hover:bg-green-500">Boutiques</button> -->
            <Button @click="modalMarketing = true" variant="blue"><ChartIcon class="inline me-4" width="35" height="35" />Publicité</Button>
            <Button @click="modalCatalogue = true" variant="purple"><ListIcon class="inline me-4" width="35" height="35" />Catalogue</button>
        </div>
    </div>


</template>
<script setup>
    import Catalogue from './MiniScene/Catalogue.vue';
    import Marketing from './MiniScene/Marketing.vue';
    import Missions from './MiniScene/Missions.vue';
    import Options from './MiniScene/Options.vue';

    import Button from '@/components/Button.vue'
    import Timer from '@/components/Timer.vue';
    import Modal from '@/components/Modal.vue';
    import Toast from '@/components/Toast.vue';

    import TimeIcon from '@/components/icons/Time.vue'
    import LightningIcon from '@/components/icons/Lightning.vue';
    import ListIcon from '@/components/icons/List.vue';
    import CardIcon from '@/components/icons/Card.vue';
    import CoinIcon from '@/components/icons/Coin.vue';
    import DiamondIcon from '@/components/icons/Diamond.vue';
    import ChartIcon from '@/components/icons/Chart.vue';
    import SettingIcon from '@/components/icons/Setting.vue';
    
    import { ref, onMounted } from 'vue';
    import { useDataGameStore } from '../Store/dataGame';

    const dataGameStore = useDataGameStore();    

    const modalCatalogue = ref(false);
    const modalMarketing = ref(false);
    const modalMissions = ref(false);
    const modalOptions = ref(false);

    const props = defineProps({
        products : {
            type : Object,
            required : true
        },
        categories : {
            type : Object,
            required : true,
        },
        player : {
            type : Object,
            required : true,
        },
        playerCategories : {
            type : Object,
            required : true,
        },
        playerProducts : {
            type : [Object,null],
            required : true,
        }
    })

    dataGameStore.products = props.products
    dataGameStore.player = props.player
    dataGameStore.categories = props.categories
    dataGameStore.playerCategories = props.playerCategories
    if(props.playerProducts){
        dataGameStore.playerProducts = props.playerProducts
    }
    
</script>
<style>
    .toast-container {
        position: fixed;
        top: 20px;
        right: 20px;
        display: flex;
        flex-direction: column;
        z-index: 1000;
    }

    .toast-enter-active,
    .toast-leave-active {
        transition: opacity 0.5s, transform 0.5s;
    }

    .toast-enter-from,
    .toast-leave-to {
        opacity: 0;
        transform: translateY(-20px);
    }
</style>