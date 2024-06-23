<div class="w-full md:w-1/2 " x-data="{mainImage:'https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg'}">
    <div>
        <img class="max-w-full rounded-lg" :src="mainImage" alt="">
    </div>
    <div class="grid grid-cols-5 gap-4 mt-5">
        <div @click="mainImage = 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg'">
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
        </div>
        <div @click="mainImage = 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg'">
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        </div>
        <div @click="mainImage = 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg'">
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
        </div>
        <div @click="mainImage = 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg'">
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
        </div>
        <div @click="mainImage = 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg'">
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
        </div>
        
    </div>
</div>