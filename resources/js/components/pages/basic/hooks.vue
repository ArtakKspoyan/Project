<template>
    <div>
        <h1 ref="myref">Hook toturial</h1>
        <p>My name is {{name}}</p>
    </div>
</template>

<script>
export default {
    data(){
        return {
                name: 'Artak'
        }
    },

    created(){
        console.log(this.$refs.myref)
    }
}


</script>