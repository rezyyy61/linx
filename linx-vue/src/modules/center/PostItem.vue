<template>
    <div class="rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 shadow-sm p-4 space-y-2">
        <div class="flex justify-between items-center mb-2">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ title }}</h3>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ date }}</span>
        </div>
        <p class="text-sm text-gray-700 dark:text-gray-300">
            {{ content }}
        </p>
        <div class="flex justify-between items-center text-sm text-gray-600 dark:text-gray-400 pt-2 border-t border-gray-100 dark:border-gray-700 mt-2">
            <button class="hover:text-red-500">❤️ Like</button>
            <button class="hover:text-blue-500">💬 Comment</button>
            <button class="hover:text-green-600">🔗 Share</button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostItem',
    props: {
        title: String,
        content: String,
        date: String
    }
}
</script>
