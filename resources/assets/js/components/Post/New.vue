<template lang="html">
    <div class="panel panel-default">
        <div class="panel-heading"><h4>Postar</h4></div>
            <div class="panel-body">
                <textarea 
                    name="post" 
                    id="post" 
                    rows="3" 
                    class="form-control" 
                    style="resize: none" 
                    maxlength="140" 
                    v-model="postText" 
                    @keyup.enter="sendMessage">
                </textarea>
                <div 
                    class="alert alert-danger small" style="margin-top: 10px; display:none" id="errorSendPost">Insira algum texto antes de postar</div>

                <button  class="btn btn-default pull-right" style="margin-top: 10px"  @click="sendMessage" >Postar :)</button>
                <div id="loadingSendPost" style="height: 69px; margin-right: 31px;display: none" class="cssload-container pull-right">
                    <div class="cssload-whirlpool"></div>
                </div>
            </div>
        </div>
    </div>      
</template>

<script>
    export default {
        data() {
            return {
                postText: ''
            }
        },
        methods: {
            sendMessage() {
                if(this.postText.length > 0){
                    $('#errorSendPost').fadeOut(300);
                    this.$emit('newpost', {
                        text: this.postText
                    });
                    this.postText = '';
                }else{
                    $('#errorSendPost').fadeIn(300);
                }
            }
        }
    }
</script>
