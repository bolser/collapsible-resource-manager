<template>

    <div class="collapsible-indicator sidebar__link__collapsible-indicator" v-if="visible">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18">
          <path v-if="expanded" d="M16.498 13.892 9 5.893 1.5 13.892" stroke="currentColor" fill="transparent" stroke-width="2"/>
          <path v-else d="m5 17.783 7.999-7.5L5 2.786" stroke="currentColor" fill="transparent" stroke-width="2"/>
        </svg>

    </div>

</template>

<script>

    export default {
        name: 'CollapsibleIndicator',
        props: {
            expanded: {
                default: true
            },
            visible: {
                default: false
            },
        }
    }

</script>
