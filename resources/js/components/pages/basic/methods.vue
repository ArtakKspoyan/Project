<template>
    <div>
        <h1>this namber is : {{views}}</h1>
        <button @click="updateCounter(1)">Increase</button>
        <button @click="updateCounter(-1)">Decrease</button>
        <br>
        <br><br>  
        <div v-for="(blog, i) in blogs" :key="i" v-if="blogs.length" >
            <h1>{{blog.title}}</h1>
            <p>{{blog.post}}</p> 
        </div>
        <br>
        <br>
        <br>
        <div>
            <h1 v-if="showItem">show this item if "showItem" is true</h1>
            <p v-else>show this item if "showItem" is false</p>

            <button @click="showItem = !showItem">Change showItem</button>
        </div>  
        
    </div>
</template>

<script>
export default {
    data(){
        return {
            views: 0,
            blogs: [],
            showItem: false 
        }
    },
    methods:{
        updateCounter(number){
            this.views += number
        },
        changeShowItem(){
            this.showItem = !this.showItem 
        }
    },

    created(){
        this.views = 100
        //get the blog posts
        let posts = [
                {title: 'this is a bloge title ', 'post': 'this is a blog post 1', id: 1 },
                {title: 'this is a bloge title 1', 'post': 'this is a blog post 2', id: 2 },
                {title: 'this is a bloge title 2', 'post': 'this is a blog post 3', id: 3 },
                {title: 'this is a bloge title 3', 'post': 'this is a blog post 4', id: 4 },]
        this.blogs = posts
    }
}
</script>