<template>
    <div class="column is-narrow">
        <ul class="menu-list">
            <nav-item
                    v-for="item in items"
                    :info="item"
                    :key=item.id
                    :activeIndex=activeIndex
            ></nav-item>
            <li><a @click="activateHelp"><i>Help</i></a></li>
        </ul>
        <pmmodal :active="helpActive"
                 @deactivated="helpActive = false">
            <help-modal ></help-modal>
        </pmmodal>
    </div>
</template>

<script>
    import NavItem from './NavItem.vue'
    import HelpModal from './HelpModal.vue'
    export default {
        name: "side-nav",

        components: {
            NavItem,
            HelpModal
        },

        props: ['activeIndex'],

        data: function () {
            return {
                items: [
                    { id: 0, link: "/tasks", text: "Tasks"},
                    { id: 1, link: "/actionitems", text: "Action Items"},
                    { id: 2, link: "/deliverables", text: "Deliverables"},
                    { id: 3, link: "/issues", text: "Issues"},
                    { id: 4, link: "/resources", text: "Resources"},
                ],

                helpActive: false
            }
        },

        methods: {
            activateHelp() {
                this.helpActive = true;
            }
        }
    }
</script>
