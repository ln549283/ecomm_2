import { defineStore } from "pinia";
import { ref, computed } from 'vue';
import axios from 'axios';

export const useDataGameStore = defineStore('dataGame', () => {
    const state = {
        player : ref([]),
        categories : ref([]),
        products : ref([]),
        playerProducts : ref([]),
        playerCategories : ref([]),
        toasts : ref([]),
    };

    const getters = {
        getUnlockedCategoriesId() {
            return this.playerCategories.map(playerCategories => playerCategories.id);
        },
        getUnlockedProductsId() {
            return this.playerProducts.map(playerProducts => playerProducts.id);
        },
        isBalanceEnough(money){
            return this.player.balance >= money ? true : false;
        }

    }

    const methods = {
        unlockProduct(productId){
            try{
                const product = this.products.find(product => product.id === productId);
                if(product){
                    if(this.isBalanceEnough(parseInt(product.unlock_price))){
                        this.playerProducts.push(product)
                        this.playerProducts.find(p => p.id === product.id).quantity = 0;
                        this.player.balance -= parseInt(product.unlock_price)
                        // this.addToastMessage('- '+product.unlock_price+' $')
                        this.addToast('Ceci est un nouveau toast : - '+product.unlock_price+' $', 'success');
                    }
                }
                else{
                    console.error('product not found : ' + productId);
                }
            }
            catch (error) {
                console.error(error);
            }
        },
        unlockCategory(categoryId){
            try{
                const category = this.categories.find(category => category.id === categoryId);
                if(category){
                    if(this.isBalanceEnough(parseInt(category.unlock_cost))){
                        this.playerCategories.push(category)
                        this.player.balance -= parseInt(category.unlock_cost)
                        this.addToast('Ceci est un nouveau toast : - '+category.unlock_cost+' $', 'success');
                    }
                }
                else{
                    console.error('product not found : ' + categoryId);
                }
            }
            catch (error) {
                console.error(error);
            }
        },
        buyProduct(productId, quantity){
            try{
                const playerProduct = this.playerProducts.find(product => product.id === productId);
                console.log(productId)
                if(playerProduct){
                    if(this.isBalanceEnough(parseInt(playerProduct.unlock_price)*quantity)){
                        playerProduct.quantity += quantity;
                        const totalPrice = parseInt(playerProduct.unlock_price)*quantity
                        this.player.balance -= totalPrice
                        this.addToast('Ceci est un nouveau toast : - '+totalPrice+' $', 'success');
                    }
                }
                else{
                    console.error('product not found in player inventory : ' + productId);
                }
            }
            catch (error) {
                console.error(error);
            }
        },
        addToast(message, type = 'info'){
            const id = Date.now();
            this.toasts.push({ id, message, type });
        
            setTimeout(() => {
                this.removeToast(id);
            }, 1500); // Durée de 2 secondes
        },
        removeToast(id){
            this.toasts = this.toasts.filter((toast) => toast.id !== id);
        },
    }

    return {
        ...state,
        ...methods,
        ...getters,
    }

});
