<script>
export default{
    props:['listeners']
}
</script>
<template>
<div>
    <h1>Hola Mundo</h1>
    <p v-for="listener of listeners" :key="listener.name">{{ article.email }}</p>
</div>
</template>