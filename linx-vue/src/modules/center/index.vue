<template>
    <div class="space-y-6">
        <PostItem
            v-for="i in 10"
            :key="i"
            title="بیانیه درباره وضعیت کارگران"
            content="در شرایط سخت اقتصادی، حمایت از حقوق کارگران اولویت اصلی ماست. مطالبات به حق آنان باید شنیده شود..."
            date="1403/04/10"
        />
    </div>
</template>

<script>
import PostItem from './PostItem.vue'

export default {
    name: 'CenterFeed',
    components: { PostItem }
}
</script>
