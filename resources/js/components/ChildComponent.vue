<template>
    <div>
        <span>ici: {{ foo }}</span>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                amount: 0,
                dummyData: [],
            }
        },
        props: [
            'foo'
        ],
    }
</script>
