<template>
 <div>
 Rows is: {{rows}}
 <div v-if="loading"><h1><B>Chargement de données ...</B></h1></div>
   <div v-else>
  <bookable-list-item 
     
      :item-title="bookable.title"
      :item-content="bookable.content"
      v-bind:price="12000"
      v-for="(bookable,index) in bookables"
      :key="index"
      >
  </bookable-list-item>
  </div>
  <!--
  <bookable-list-item :item-title="bookable1.title" :item-content="bookable1.content" v-bind:price="10000"></bookable-list-item>
  <bookable-list-item item-title="Why do we use it" item-content="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English." v-bind:price="10000"></bookable-list-item> 
  --> 
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
            /*
            bookable1:{
                title:"What is Lorem Ipsum",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
            */
            bookables:null,
            loading:false,
            columns:3,
          
        };

    },
    computed:{
      rows(){
          return this.bookables==null ? 0 : Math.ceil(this.bookables.length / this.columns);
      }
    },
    /*
    beforeCreate(){
        console.log('before create');
    },
    */
    created(){
       this.loading=true;
       
        //reactivity
        setTimeout(()=>{
            //this.bookable1.title="Titre";
            this.bookables=[
            {
                id:1,
                title:"What is Lorem Ipsum ??",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
            {
                id:2,
                title:"What is Lorem Ipsum !!",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
             {
                id:3,
                title:"What is Lorem Ipsum !!",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
             {
                id:4,
                title:"What is Lorem Ipsum !!",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
             {
                id:5,
                title:"What is Lorem Ipsum !!",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
             {
                id:6,
                title:"What is Lorem Ipsum !!",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            },
             {
                id:7,
                title:"What is Lorem Ipsum !!",
                content:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic",
            }
            ];
            this.loading=false;
            
        },8000);
        /*
        setTimeout(()=>{
            this.bookable1.title="Tu es encore ici ?";
          
        },12000);
        */
    },
    /*
    beforeMount(){
        console.log('before mount');
    },
    */
    /*
    mounted(){
        console.log('mounted');
        
    },*/
    
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