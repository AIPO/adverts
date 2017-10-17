<template>
    <div>
        <div v-for="advert in adverts">
            <div class="card">
                <h2 class="card-header" v-bind:class="advert.type">{{advert.id}} {{advert.name}}{{advert.price}} <i
                        class="fa fa-eur"></i>
                </h2>
                <div class="card-body">
                    <strong>Category:</strong> {{advert.category}}
                    <p class="card-text">{{advert.description}}</p>
                </div>
                <hr>
                <div class="card-footer text-muted">

                </div>
            </div>
            <br/>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['adverts'],
    }
</script>
