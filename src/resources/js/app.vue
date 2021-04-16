<template>
    <div>
        <transition name="slide-fade" mode="out-in">
            <router-view :key="$route.fullPath"></router-view>
        </transition>
    </div>
</template>
<script>
const default_layout = "default";


export default {};
</script>
