<template>
    <card class="flex flex-col items-center justify-center">
        <section class="px-3 py-3">
            <h1 class="text-center text-3xl text-80 font-light">Bienvenue à vous</h1>
            <p>C'est ici, dans le paneau d'administration que vous pouvez voir toutes les demandes afin de devenir
                exposant, messages d'utilisateurs ainsi que des informations les plus utiles les uns que les autres</p>
        </section>
    </card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() {
        //
    },
}
</script>
