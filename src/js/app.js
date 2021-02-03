// alert('ciao');
let app = new Vue({
    el: '#app',
    data:{
        albumArray:[],
    },
    methods:{

    },
    mounted(){
        var config ={
            method: 'get',
            url:'partials/json-data.php',
            headers:{

            }
        };
        axios(config)
        .then(response => {
            this.albumArray = response.data;
            console.log(this.albumArray);
            console.log(response);
        }).catch(function (error){
			console.log(error);
        })
    }
});
console.log('ciao');
// axios.get('json-data.php')
// .then(response =>{
//     console.log(response);
// })