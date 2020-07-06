export default {
    data(){
        
        return {

        }

    },
    methods: {
        callApi(method, url, dataDbj){
             try {
                 return  axios({
                    method: method,
                    url: url,
                    data: dataDbj
                  });

            } catch(e){
                    return e.response
            }
            
        },
        i(desc, title="Hey") {
            this.$Notice.info({
                title: title,
                desc:desc
            });
        },
        s(desc, title="Great!") {
            this.$Notice.success({
                title: title,
                desc:desc
            });
        },
        w(desc, title="Oops!") {
            this.$Notice.warning({
                title: title,
                desc:desc
            });
        },
        e(desc, title="Oops!") {
            this.$Notice.error({
                title: title,
                desc:desc
            });
        },
        swr(desc='Sometingn went wrong! Please try again', title="Oops") {
            this.$Notice.error({
                title: title,
                desc:desc
            });
        },



    },
}