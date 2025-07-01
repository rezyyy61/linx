<template>
    <div class="w-full h-[calc(100vh-64px)] px-2 md:px-6 lg:px-12 py-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden shadow-md h-full">

            <!-- ستون چپ -->
            <aside class="hidden lg:block lg:col-span-3 border-r border-gray-200 dark:border-gray-700 bg-red-50/40 dark:bg-red-900/10 p-4 overflow-y-auto">
                <LeftSidebar />
            </aside>

            <!-- محتوای اصلی -->
            <main class="col-span-12 lg:col-span-6 bg-white dark:bg-gray-900 p-4 overflow-y-auto">
                <CenterFeed />
            </main>

            <!-- ستون راست -->
            <aside class="hidden lg:block lg:col-span-3 border-l border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-4 overflow-y-auto">
                <RightSidebar />
            </aside>

        </div>
    </div>
</template>

<script>
import LeftSidebar from '@/modules/left/index.vue'
import CenterFeed from '@/modules/center/index.vue'
import RightSidebar from '@/modules/right/index.vue'

export default {
    name: 'ThreeColumnLayout',
    components: {
        LeftSidebar,
        CenterFeed,
        RightSidebar
    }
}
</script>
