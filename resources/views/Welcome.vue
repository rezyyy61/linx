<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
        <div class="space-x-4">
            <button
                @click="goToLogin"
                class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
            >
                Login
            </button>
            <button
                @click="goToRegister"
                class="px-6 py-3 bg-green-600 text-white rounded hover:bg-green-700 transition"
            >
                Register
            </button>
        </div>
    </div>
</template>

<script setup>
function goToLogin() {
    // Redirect or emit event to show login form/page
    alert('Go to Login page')
}

function goToRegister() {
    // Redirect or emit event to show register form/page
    alert('Go to Register page')
}
</script>
