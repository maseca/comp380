<template>
    <div class="column is-narrow">
        <ul class="menu-list">
            <nav-item
                    v-for="item in items"
                    :info="item"
                    :key=item.id
                    :activeIndex=activeIndex
            ></nav-item>
        </ul>
    </div>
</template>

<script>
    import NavItem from './NavItem.vue'
    export default {
        name: "side-nav",

        components: {
            NavItem
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
                ]
            }
        },
    }
</script>
