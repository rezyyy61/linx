<template>
    <div class="min-h-screen bg-gray-100 dark:bg-[#0f0f0f]">
        <MainNavbar />
        <AdvancedNavbar />
        <ThreeColumnLayout />
    </div>
</template>

<script>
import MainNavbar from "@/components/MainNavbar.vue";
import AdvancedNavbar from "@/components/AdvancedNavbar.vue";
import ThreeColumnLayout from "@/layouts/ThreeColumnLayout.vue";

export default {
    name: "HomePage",
    components: {
        MainNavbar,
        AdvancedNavbar,
        ThreeColumnLayout
    }
};
</script>
