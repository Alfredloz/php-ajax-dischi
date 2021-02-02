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
            url:'dist/php/json-data.php',
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
})
// axios.get('json-data.php')
// .then(response =>{
//     console.log(response);
// })