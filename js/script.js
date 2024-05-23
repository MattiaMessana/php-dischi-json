const { createApp } = Vue;

createApp({
    data() {
        return {
            message: "ciao",
            listaDischi: [],
        }
    },
    created() {
        axios
        .get("http://localhost:8888/boolean/php-dischi-json/server.php")
        .then((resp) => {
            // console.log(resp.data.results);
            this.listaDischi = resp.data.results; 
        })
    }
}).mount('#app');