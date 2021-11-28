<template>
 <div>
  <bookable-list-item :item-title="bookable1.title" :item-content="bookable1.content" v-bind:price="10000"></bookable-list-item>
  <bookable-list-item :item-title="bookable2.title" :item-content="bookable2.content" v-bind:price="12000"></bookable-list-item>
  <bookable-list-item item-title="Why do we use it" item-content="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English." v-bind:price="10000"></bookable-list-item>
 </div>
</template>
<script>
import BookableListItem from "./BookableListItem";

export default {
    components:{
       "bookable-list-item":BookableListItem
    },
    data(){
        return{
            bookable1:{
                title:"What is Lorem Ipsum",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
            bookable2:{
                title:"What is Lorem Ipsum ??",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
          
        }

    },
    /*
    beforeCreate(){
        console.log('before create');
    },
    */
    created(){
        console.log('created');
        console.log(this.bookable1);
        console.log(this.bookable2);
        //reactivity
        setTimeout(()=>{
            this.bookable1.title="Titre";
        },5000);
    },
    /*
    beforeMount(){
        console.log('before mount');
    },
    */
    /*
    mounted(){
        console.log('mounted');
    },
    */
    /*
    beforeDestroy(){
        console.log('before destroy');
    },
    destroyed(){
        console.log('destroyed');
    },
    */
}
</script>