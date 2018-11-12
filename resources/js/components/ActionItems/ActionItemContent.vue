<template>
        <div class="columns">
            <pmmodal :active=modalActive
                     @deactivated="modalActive = false">
                <action-item-modal :info="modalInfo"
                                   :addEdit="addEdit"
                                   @deactivated="modalActive = false"></action-item-modal>
            </pmmodal>
            <div class="column">
                <div class="container">
                    <action-item-card v-for="card in cards"
                               :info=card
                               :key=card.id
                               @edit=editModal
                    ></action-item-card>
                </div>
            </div>
            <div class="column">
                <section class="section">
                    <a class="button" @click=newModal>Create New Action Item</a>
                </section>
                <div class="box">
                    <h2 class="subtitle">Search Bar Goes Here</h2>
                </div>
                <div class="box">
                    <h2 class="subtitle">Calendar Goes Here</h2>
                </div>
            </div>
        </div>
</template>

<script>
    import ActionItemModal from "./ActionItemModal"
    import ActionItemCard from "./ActionItemCard"
    export default {
        name: "action-item-content",

        components: {
            ActionItemModal,
            ActionItemCard
        },

        data: function () {
            return {
                edit: false,
                modalActive: false,
                modalInfo: {
                    id: 0, title: 'My Action Item 1', status: 'Good',
                    expEnd: '2/24/2014', actEnd: '2/24/2014',
                    description: 'A cool action item', statDesc: 'A cool status'
                },
                cards: [
                    {
                        id: 0, title: 'My Action Item 1', status: 'Good',
                        expEnd: '2/24/2014', actEnd: '2/24/2014',
                        description: 'A cool action item', statDesc: 'A cool status'
                    },
                    {
                        id: 1, title: 'My Action Item 2', status: 'Good',
                        expEnd: '2/24/2014', actEnd: '2/24/2014',
                        description: 'A cool action item', statDesc: 'A cool status'
                    },
                    {
                        id: 2, title: 'My Action Item 3', status: 'Good',
                        expEnd: '2/24/2014', actEnd: '2/24/2014',
                        description: 'A cool action item', statDesc: 'A cool status'
                    }
                ]
            }
        },

        computed: {
            addEdit() {
                return this.edit ? "Edit" : "Create New";
            }
        },

        methods: {
            newModal() {
                this.modalInfo = {
                    id: 0, title: 'My Action Item 1', status: 'Good',
                    expEnd: '2/24/2014', actEnd: '2/24/2014',
                    description: 'A cool action item', statDesc: 'A cool status'
                };
                this.edit = false;
                this.modalActive = true;
            },

            editModal(info) {
                this.modalInfo = info;
                this.edit = true;
                this.modalActive = true;
            }
        }
    }
</script>
